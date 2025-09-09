<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\OTPVerificationMailJob;
use App\Models\TempUser;
use App\Models\User;
use App\Services\SmsGateway\TwilioService;
use App\Services\SmsGateway\VonageNexmoService;
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
            $token = env("SENDBRIDGE_API_TOKEN");
            if ($token == null){
                Alert::error('Error', 'Email validation service is not configured. We need some time to fix it');
                return back();
            }
            if (!isEmailValid($email,$token)){
                Alert::warning('Warning', 'Please provide a valid email address.');
                return back();
            }

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
                Alert::warning('Warning', 'An account with this phone already exists. Please log in instead.');
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

        if ($email){
            if (!isMailConfigured()){
                Alert::error('Error', 'Mail service is not configured. We need some time to fix it');
                return back();
            }
            OTPVerificationMailJob::dispatch(
                $email,
                'Your Email Verification Code',
                '\App\Mail\RegistrationVerificationMail',
                'mail.registration_verification_mail',
                [
                    'code' => $tempUser->code,
                ]
            );
        }
        if ($phone){
//            $sms = new TwilioService();
//            $sms->sendSms($phone, "Your OTP code is: {$tempUser->code}");
//            $sms = new VonageNexmoService();
//            $sms->send($phone, "Your OTP code is: {$tempUser->code}");
        }

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


        $tempUser = TempUser::where('contact_info', $request->email ?? $request->phone)
            ->where('code', $request->code)
            ->first();
        if (!$tempUser) {
            Alert::warning('Warning', 'Invalid OTP');
            return redirect()->route('register.verification');
        }

//        if (!$tempUser->created_at || $tempUser->created_at->lt(now()->subMinutes(1))) {
//            $tempUser->update([
//                'code' => rand(100000, 999999),
//                'created_at' => now()
//            ]);
//
//            if ($request->email){
//                if (!isMailConfigured()){
//                    Alert::error('Error', 'Mail service is not configured. We need some time to fix it');
//                    return back();
//                }
//                OTPVerificationMailJob::dispatch(
//                    $request->email,
//                    'Your Email Verification Code',
//                    '\App\Mail\RegistrationVerificationMail',
//                    'mail.registration_verification_mail',
//                    [
//                        'code' => $tempUser->code,
//                    ]
//                );
//            }
//            if ($request->phone) {
//                //            $sms = new TwilioService();
////            $sms->sendSms($phone, "Your OTP code is: {$tempUser->code}");
////                $sms = new VonageNexmoService();
////                $sms->send($request->phone, "Your OTP code is: {$tempUser->code}");
//            }
//
//            Alert::warning('Warning', 'OTP expired. We send you a new otp please check your email.');
//            return redirect()->route('register.verification');
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

    public function resendRegisterOTP(Request $request)
    {
        $email = $request->session()->get('register_email');
        $phone = $request->session()->get('register_phone');

        $contact_info = $email ?? $phone;

        if (!$contact_info) {
            Alert::warning('Warning', 'No contact information found. Please start the registration process again.');
            return redirect()->route('register');
        }

        $tempUser = TempUser::where('contact_info', $contact_info)->first();

        if (!$tempUser) {
            $tempUser = TempUser::create([
                'contact_info' => $contact_info,
                'is_agreed' => 1,
                'code' => rand(100000, 999999),
                'created_at' => now()
            ]);
        } else {
            $tempUser->update([
                'code' => rand(100000, 999999),
                'created_at' => now()
            ]);
        }

        if ($email) {
            if (!isMailConfigured()){
                Alert::error('Error', 'Mail service is not configured. We need some time to fix it');
                return back();
            }
            OTPVerificationMailJob::dispatch(
                $email,
                'Your Email Verification Code',
                '\App\Mail\RegistrationVerificationMail',
                'mail.registration_verification_mail',
                [
                    'code' => $tempUser->code,
                ]
            );
        }

        if ($phone){
//            $sms = new TwilioService();
//            $sms->sendSms($phone, "Your OTP code is: {$tempUser->code}");
//            $sms = new VonageNexmoService();
//            $sms->send($phone, "Your OTP code is: {$tempUser->code}");
        }

        Alert::success('Success', 'A new OTP has been sent to your registered contact information.');
        return redirect()->route('register.verification');

    }

}
