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
                        <a class="sign-up-logo" href="#"><img src="{{asset('frontend')}}/assets/images/logo.png" alt=""></a>
                        <h3>Verify your OTP</h3>
                        <p class="verify-text mb-30">A 6-digit code has been sent to
                            @if(isset($email))
                                {{ substr($email,0,1) . '*****' . strstr($email, '@') }}
                            @elseif(isset($phone))
                                {{ substr($phone,0,5) . '*****' . substr($phone,-3) }}
                            @endif. Please enter it within the next 1 minutes.</p>
                        <form action="{{route('password.otp.check')}}" class="signup-form mb-30" method="POST">
                            @csrf
                            <div class="form-input mb-40">
                                <label for="email-input">Verification Code</label>
                                <input type="text" name="code" id="email-input" placeholder="Enter your code">
                                <input type="hidden" name="email" value="{{$email}}" id="email-input" placeholder="Enter your code">
                                <input type="hidden" name="phone" value="{{$phone}}" id="email-input" placeholder="Enter your code">
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Next</button>
                        </form>
                        <p class="sign-or-login"><a href="#">Didn't receive the code?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
