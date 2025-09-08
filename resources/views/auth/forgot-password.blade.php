@extends('auth.app')
@section('content')
    <section class="sign-up-area">
        <div class="sign-up-box-content">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="signup-img">
                        <img src="{{asset('frontend')}}/assets/images/sign-up/signup.png" alt="sign up image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="signup-content">
                        <a class="sign-up-logo" href="{{url('/')}}"><img src="{{asset('frontend')}}/assets/images/logo.png" alt=""></a>
                        <h3>Reset Password</h3>
                        <p class="verify-text mb-30">
                            @if(isset($email))
                                {{ substr($email,0,1) . '*****' . strstr($email, '@') }}
                            @elseif(isset($phone))
                                {{ substr($phone,0,5) . '*****' . substr($phone,-3) }}
                            @endif
                        </p>
                        <p class="verify-text mb-30 text-white">In order to protect your account, withdrawals, P2P selling and payment services might be disabled for 24 hours after you change your password.</p>
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <a href="{{route('login.password')}}" class="secondary-btn w-100 text-center justify-content-center">Cancel</a>
                            <a href="{{route('password.otp')}}" class="primary-btn w-100 text-center justify-content-center">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
