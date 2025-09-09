<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\OTPVerificationMailJob;
use App\Models\PasswordResetOtp;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Success', 'Your password has been reset successfully. You can now log in with your new password.');
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

        if ($data['email'] == null) {
            $user = User::where('email', $data['email'])->first();
            if (!isset($user)) {
                Alert::warning('Warning', 'No account found with this email. Please try correct email.');
                return redirect()->route('password.request');
            }
        }

        if ($data['phone'] == null) {
            $user = User::where('phone', $data['phone'])->first();
            if (!isset($user)) {
                Alert::warning('Warning', 'No account found with this phone. Please try correct phone.');
                return redirect()->route('password.request');
            }
        }
        PasswordResetOtp::where('contact_info', $data['email'] ?? $data['phone'])->delete();
        $resetCode = PasswordResetOtp::create([
            'contact_info' => $data['email'] ?? $data['phone'],
            'code' => rand(100000, 999999),
        ]);

        if ($data['email']) {
            if (!isMailConfigured()){
                Alert::error('Error', 'Mail service is not configured. We need some time to fix it');
                return back();
            }
            OTPVerificationMailJob::dispatch(
                $data['email'],
                'Password Reset OTP',
                'App\Mail\ResetPasswordOtpMail',
                'mail.reset_password_mail',
                ['code' => $resetCode->code]
            );
            Alert::success('Success', 'OTP has been sent to your email.');
        }
        if ($data['phone']) {

//            $sms = new TwilioService();
//            $sms->sendSms($phone, "Your OTP code is: {$resetCode->code}");
//            $sms = new VonageNexmoService();
//            $sms->send($phone, "Your OTP code is: {$resetCode->code}");

            Alert::success('Success', 'OTP has been sent to your phone.');
        }

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

//        $otpRecord = PasswordResetOtp::where('contact_info', $request->email ?? $request->phone)
//            ->where('code', $request->code)
//            ->first();
//        if (!$otpRecord) {
//            Alert::warning('Warning', 'Invalid OTP. Please try again.');
//            return back();
//        }
//
//        if ($otpRecord->created_at->lt(now()->subMinutes(1))) {
//            $otpRecord->update([
//                'code' => rand(100000, 999999),
//                'created_at' => now()
//            ]);
//
//            if ($request->email != null) {
//                OtpVerificationMailJob::dispatch(
//                    $request->email,
//                    'Your Password Reset OTP',
//                    '\App\Mail\ResetPasswordOtpMail',
//                    'mail.reset_password_mail',
//                    ['code' => $otpRecord->code]
//                );
//                Alert::success('Success', 'Your OTP has been sent to your email.');
//                return back();
//            }
//            if ($request->phone != null) {
//                // Send OTP to phone via SMS gateway
//                Alert::success('Success', 'Your OTP has been sent to your phone.');
//                return back();
//            }
//        }

        return redirect()->route('password.reset.form');
    }

    public function showPasswordReset()
    {
        return view('auth.password_reset', [
            'email' => session('email'),
            'phone' => session('phone'),
            'page_title' => 'Reset Password',
        ]);
    }

    public function resendOtp(Request $request)
    {
        $email = session('email');
        $phone = session('phone');
        PasswordResetOtp::where('contact_info', $email ?? $phone)->delete();
        $resetCode = PasswordResetOtp::create([
            'contact_info' => $email ?? $phone,
            'code' => rand(100000, 999999),
        ]);
        if ($email) {
            if (!isMailConfigured()){
                Alert::error('Error', 'Mail service is not configured. We need some time to fix it');
                return back();
            }
            OTPVerificationMailJob::dispatch(
                $email,
                'Password Reset OTP',
                'App\Mail\ResetPasswordOtpMail',
                'mail.reset_password_mail',
                ['code' => $resetCode->code]
            );
            Alert::success('Success', 'OTP has been resent to your email.');
        } elseif ($phone) {
//            $sms = new TwilioService();
//            $sms->sendSms($phone, "Your OTP code is: {$resetCode->code}");
//            $sms = new VonageNexmoService();
//            $sms->send($phone, "Your OTP code is: {$resetCode->code}");
            Alert::success('Success', 'OTP has been resent to your phone.');
        }
        return back();
    }


}
