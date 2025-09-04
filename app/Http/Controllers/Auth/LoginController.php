<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'contact_info' => ['required', 'string'],
        ]);
        $email = null;
        $phone = null;
        if (filter_var($request->contact_info, FILTER_VALIDATE_EMAIL)) {
            $email = $request->contact_info;
            $user = User::where('email', $email)->first();
            if (!$user){
                Toastr::warning('Invalid email', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        }
        if (preg_match("/^\+?[0-9]{10,15}$/", $request->contact_info)) {

            $phone = $request->contact_info;
            $user = User::where('phone', $phone)->first();
            if (!$user){
                Toastr::warning('Invalid phone number', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
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
            $request->session()->regenerate();
            $request->session()->forget(['email', 'phone']);
            Toastr::success('You are logged in successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->intended(route('dashboard', absolute: false));
        }
        Toastr::error('The provided credentials do not match our records.', 'Error', ["positionClass" => "toast-top-right"]);
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
}
