<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TempUser;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'contact_info' => ['required', 'string', 'max:255'],
            'is_agreed' => ['accepted'],
        ]);
        $email = null;
        $phone = null;

        if (filter_var($request->contact_info, FILTER_VALIDATE_EMAIL)) {
            $email = $request->contact_info;
        }
        if (preg_match("/^\+?[0-9]{10,15}$/", $request->contact_info)) {
            $phone = $request->contact_info;
        }

        if ($email) {
            $exists = User::where('email', $email)->exists();
            if ($exists) {
                Alert::warning('Warning', 'An account with this email already exists. Please log in instead.');
                return back();
            }
        }
        if ($phone) {
            $exists = User::where('phone', $phone)->exists();
            if ($exists) {
                Alert::warning('Warning', 'An account with this email already exists. Please log in instead.');
                return back();
            }
        }


        $tempUser = TempUser::updateOrCreate(
            ['contact_info' => $request->contact_info],
            [
                'contact_info' => $request->contact_info,
                'is_agreed' => $request->has('is_agreed') ? 1 : 0,
                'code' => rand(100000, 999999)
            ]
        );

        $request->session()->put('register_email', $email);
        $request->session()->put('register_phone', $phone);
        Alert::success('Success', 'Your otp sent to your registered email address or phone number.');
        return redirect()->route('register.verification');
    }

    public function verification(Request $request)
    {
        $data['page_title'] = "Registration Verification";
        $data['email'] = $request->session()->get('register_email');
        $data['phone'] = $request->session()->get('register_phone');
        return view('auth.register_verification', $data);
    }

    public function otpCheck(Request $request)
    {
        $request->validate([
            'email' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
        ]);


//        $tempUser = TempUser::where('contact_info', $request->email ?? $request->phone)
//            ->where('code', $request->code)
//            ->first();
//        if (!$tempUser) {
//            return redirect()->route('register.verification', ['email' => $request->email, 'phone' => $request->phone]);
//        }
        return redirect()->route('register.password.set');

    }

    public function passwordSet(Request $request)
    {
        $data['page_title'] = "Set Password";
        $data['email'] = $request->session()->get('register_email');
        $data['phone'] = $request->session()->get('register_phone');
        $data['code'] = $request->code;
        return view('auth.password_create', $data);
    }

    public function confirmation(Request $request)
    {
        $request->validate([
            'email' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'password' => [
                'required',
                'min:8',
                'max:128',
                'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            ],
        ]);

        $user = User::create([
            'name' => '',
            'email' => $request->email ?? '',
            'phone' => $request->phone ?? '',
            'password' => Hash::make($request->password),
            'is_agreed' => 1
        ]);

        TempUser::where('contact_info', $request->email ?? $request->phone)->delete();
        Alert::success('Success', 'Registration Successful');
        Auth::login($user);
        return redirect()->route('dashboard');
    }

}
