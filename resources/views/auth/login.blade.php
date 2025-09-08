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
                        <div class="login-qr-box d-flex align-items-center justify-content-between ">
                            <h3 class="m-0">Log in</h3>
                            <div class="login-qr">
                                <img src="{{asset('frontend')}}/assets/images/sign-up/qr.png" alt="qr code">
                            </div>
                        </div>
                        <form action="{{route('login.post')}}" class="signup-form" method="POST">
                            @csrf
                            <div class="form-input mb-40">
                                <label for="email-input">Email/Phone Number</label>
                                <input type="text" id="email-input" name="contact_info" class="@error('contact_info') is-invalid @enderror" placeholder="Enter email or phone number ( With country code)">
                                @error('contact_info')
                                    <span class="text-danger">Please provide your login email or phone</span>
                                @enderror
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Next</button>
                        </form>
                        <p class="sign-up-or">or</p>
                        <div class="sing-up-social">
                            <ul>
                                <li><a href="{{route('social.redirect',['provider' => 'google'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/google.png" alt=""></a></li>
                                <li><a href="{{route('social.redirect',['provider' => 'apple'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/apple.png" alt=""></a></li>
                                <li>
                                    <a href="{{route('social.redirect',['provider' => 'telegram'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/telegram.png" alt=""></a>
                                </li>

                            </ul>
                        </div>
                        <p class="sign-or-login"><a href="{{route('register')}}">Create a Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
