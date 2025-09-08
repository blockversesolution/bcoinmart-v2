<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use PragmaRX\Google2FA\Google2FA;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $data['page_title'] = 'Login';
        return view('auth.login', $data);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'contact_info' => ['required', 'string'],
        ]);
        $request->session()->forget('email');
        $request->session()->forget('phone');
        $email = null;
        $phone = null;
        if (filter_var($request->contact_info, FILTER_VALIDATE_EMAIL)) {
            $email = $request->contact_info;
            $user = User::where('email', $email)->first();
            if (!$user){
                Alert::error('Error', 'No account found with this email.');
                return back();
            }
        }
        if (preg_match("/^\+?[0-9]{10,15}$/", $request->contact_info)) {

            $phone = $request->contact_info;
            $user = User::where('phone', $phone)->first();
            if (!$user){
                Alert::error('Error', 'No account found with this phone number.');
                return back();
            }
        }
        $request->session()->put('email', $email);
        $request->session()->put('phone', $phone);

        return redirect()->route('login.password');
    }

    public function login_password(Request $request): View
    {
        $data['page_title'] = 'Login';
        $data['email'] = $request->session()->get('email');
        $data['phone'] = $request->session()->get('phone');
        return view('auth.login_password',$data);
    }

    public function login_confirm(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string'],
            'email' => ['nullable', 'string', 'email'],
            'phone' => ['nullable', 'string'],
        ]);
        $credentials = [];
        if ($request->email) {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
        } elseif ($request->phone) {
            $credentials = [
                'phone' => $request->phone,
                'password' => $request->password,
            ];
        }
        if (Auth::attempt($credentials)) {


            $user = Auth::user();

            if ($user->two_factor_enabled) {
                session(['2fa:user_id' => $user->id]);
                Auth::logout();
                Alert::info('Two-Factor Verification', 'Please verify your OTP to continue.');
                return redirect()->route('2fa.index');
            }

            // Normal login
            $request->session()->regenerate();
            $request->session()->forget(['email', 'phone']);
            Alert::success('Success', 'Login successful');
            return redirect()->intended(route('dashboard'));
        }
        Alert::error('Error', 'Wrong credentials, please try again.');
        return redirect()->back();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function enable2fa()
    {
        $user = Auth::user();
        $google2fa = new Google2FA();
        $user->google2fa_secret = $google2fa->generateSecretKey();
        $user->two_factor_enabled = true;
        $user->save();

        return redirect('/')->with('two_factor_secret', $user->google2fa_secret);
    }

    public function show2faForm(Request $request): View
    {
        if (!$request->session()->has('2fa:user_id')) {
            return redirect()->route('login');
        }
        $data['page_title'] = '2FA Verification';
        return view('auth.2fa', $data);
    }

    public function verify2Fa(Request $request): RedirectResponse
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $userId = session('2fa:user:id');
        if(!$userId) {
            Alert::error('Error', 'Session expired, please login again.');
            return redirect()->route('login');
        }

        $user = User::find($userId);
        $google2fa = new Google2FA();

        if($google2fa->verifyKey($user->google2fa_secret, $request->otp)) {
            Auth::login($user);

            session(['2fa_verified' => true]);

            session()->forget('2fa:user:id');

            Alert::success('Success', '2FA verified successfully');
            return redirect()->intended(route('dashboard'));
        }

        Alert::error('Error', 'Invalid verification code.');
        return redirect()->back();
    }
}
