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
                        <h3>Enter your password</h3>
                        <p class="verify-text mb-30">
                            @if(isset($email))
                                {{ substr($email,0,1) . '*****' . strstr($email, '@') }}
                            @elseif(isset($phone))
                                {{ substr($phone,0,5) . '*****' . substr($phone,-3) }}
                            @endif
                        </p>
                        <form action="{{route('login.confirm')}}" class="signup-form mb-30" method="POST">
                            @csrf
                            <div class="form-input mb-40">
                                <label for=" ">Password</label>
                                <div class="password-wrapper">
                                    <input type="password" id="password" name="password" placeholder="Enter your password">
                                    <input type="hidden" id="password" name="email" value="{{$email ?? ''}}" placeholder="Enter your password">
                                    <input type="hidden" id="password" name="phone" value="{{$phone ?? ''}}" placeholder="Enter your password">

                                    <span id="togglePassword" class="eye-icon">
                                        <i class="fa-solid fa-eye" id="showIcon"></i>
                                        <i class="fa-solid fa-eye-slash" id="hideIcon" style="display: none;"></i>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Next</button>
                        </form>
                        <p class="sign-or-login"><a href="{{route('password.request')}}">Forgot password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const showIcon = document.getElementById('showIcon');
        const hideIcon = document.getElementById('hideIcon');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            showIcon.style.display = isPassword ? 'none' : 'inline';
            hideIcon.style.display = isPassword ? 'inline' : 'none';
        });
    </script>
@endpush
