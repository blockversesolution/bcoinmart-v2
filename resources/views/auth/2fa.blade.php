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
                        <div class="login-qr-box d-flex align-items-center justify-content-between ">
                            <h3 class="m-0">2FA</h3>
                            <div class="login-qr">
                                <img src="{{asset('frontend')}}/assets/images/sign-up/qr.png" alt="qr code">
                            </div>
                        </div>
                        <form action="{{route('2fa.verify')}}" class="signup-form" method="POST">
                            @csrf
                            <div class="form-input mb-40">
                                <label for="email-input">Authenticator Code</label>
                                <input type="text" id="email-input" name="otp" class="@error('otp') is-invalid @enderror" placeholder="Enter your 2FA code">
                                @error('otp')
                                    <span class="text-danger">Please provide your 2FA code</span>
                                @enderror
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
