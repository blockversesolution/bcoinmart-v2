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
                        <h3>Welcome To BcoinMart</h3>
                        <form action="{{route('register')}}" method="POST" class="signup-form">
                            @csrf
                            <div class="form-input">
                                <label for="email-input">Email/Phone Number</label>
                                <input type="text" id="email-input" name="contact_info"
                                       placeholder="Enter email or phone number ( With country code)">
                            </div>
                            <div class="form-input checkbox-input flex items-center gap-2">
                                <input type="checkbox"
                                       name="is_agreed"
                                       id="sign-check"
                                       class="@error('is_agreed') is-invalid @enderror">

                                <div class="flex flex-col">
                                    <label for="sign-check" class="m-0">
                                        By creating an account, I agree to BcoinMart's
                                        <a href="#">Terms of Service</a> and
                                        <a href="#">Privacy Notice</a>.
                                    </label>

                                    @error('is_agreed')
                                    <span class="text-danger text-sm mt-0.5">You must agree to the terms</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Next
                            </button>
                        </form>
                        <p class="sign-up-or">or</p>
                        <div class="sing-up-social">
                            <ul>
                                <li><a href="{{route('social.redirect',['provider' => 'google'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/google.png" alt=""></a></li>
                                <li><a href="{{route('social.redirect',['provider' => 'apple'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/apple.png" alt=""></a></li>
                                <li><a href="{{route('social.redirect',['provider' => 'telegram'])}}"><img src="{{asset('frontend')}}/assets/images/sign-up/telegram.png" alt=""></a></li>
                            </ul>
                        </div>
                        <p class="sign-or-login"><a href="{{route('register')}}">Sign up as an entity</a> or <a
                                href="{{route('login')}}">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

