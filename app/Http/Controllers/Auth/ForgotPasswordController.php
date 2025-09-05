<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create()
    {
        $data['page_title'] = "Forgot Password";
        $data['email'] = session('email');
        $data['phone'] = session('phone');
        return view('auth.forgot-password', $data);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['nullable', 'email'],
            'phone' => ['nullable', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:128'],
        ]);
        $user = null;
       if ($request->phone != null) {
           $user = User::where('phone', $request->phone)->first();

       }
       if ($request->email != null) {
              $user = User::where('email', $request->email)->first();
       }

       if (isset($user)) {
              $user->password = Hash::make($request->password);
              $user->save();

              $request->session()->forget('email');
              $request->session()->forget('phone');

              return redirect('/login');
         } else {
              return back();
       }
    }

    public function otpSend()
    {
        $data['page_title'] = "Forgot Password";
        $data['email'] = session('email');
        $data['phone'] = session('phone');
        // otp send code here

        return view('auth.forgot_password_verification', $data);
    }

    public function checkOtp(Request $request)
    {
        $request->validate([
            'email' => ['nullable', 'email'],
            'phone' => ['nullable', 'string'],
            'code' => ['required', 'string'],
        ]);
        //check otp code here
        return redirect()->route('password.reset.form')
            ->with(['email' => $request->email, 'phone' => $request->phone]);

    }

    public function showPasswordReset()
    {
        return view('auth.password_reset', [
            'email' => session('email'),
            'phone' => session('phone'),
            'page_title' => 'Reset Password',
        ]);
    }


}
