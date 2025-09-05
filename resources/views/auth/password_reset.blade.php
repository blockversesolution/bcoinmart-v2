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
                        <h3>Reset a password</h3>
                        <form action="{{route('password.confirmation')}}" class="signup-form mb-30" method="POST">
                            @csrf
                            <div class="form-input mb-40">
                                <label for=" ">Password</label>
                                <div class="password-wrapper">
                                    <input type="password" id="password" name="password" placeholder="Enter your password">
                                    <input type="hidden" id="" name="email" value="{{$email}}" placeholder="Enter your password">
                                    <input type="hidden" id="" name="phone" value="{{$phone}}" placeholder="Enter your password">
                                    <span id="togglePassword" class="eye-icon">
                                        <i class="fa-solid fa-eye" id="showIcon"></i>
                                        <i class="fa-solid fa-eye-slash" id="hideIcon" style="display: none;"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="password-type-check mb-40">
                                <ul>
                                    <li><p class="text-type-gray d-flex gap-2 align-items-center"> <i class="fa-solid fa-check"></i> 8 to 128 characters</p></li>
                                    <li><p class="text-type-gray d-flex gap-2 align-items-center"> <i class="fa-solid fa-check"></i> At least 1 number</p></li>
                                    <li><p class="text-type-gray d-flex gap-2 align-items-center"> <i class="fa-solid fa-check"></i> At least 1 upper case letter</p></li>
                                </ul>
                            </div>
                            <button type="submit" class="primary-btn w-100 text-center justify-content-center">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>


        // check password valid
        const passwordInputType = document.getElementById('password');

        const rules = [
            {
                element: document.querySelectorAll('.password-type-check ul li')[0],
                check: (value) => value.length >= 8 && value.length <= 128,
            },
            {
                element: document.querySelectorAll('.password-type-check ul li')[1],
                check: (value) => /\d/.test(value),
            },
            {
                element: document.querySelectorAll('.password-type-check ul li')[2],
                check: (value) => /[A-Z]/.test(value),
            },
        ];

        passwordInputType.addEventListener('input', () => {
            const value = passwordInputType.value;

            rules.forEach((rule) => {
                const paragraph = rule.element.querySelector('p');
                if (rule.check(value)) {
                    paragraph.classList.remove('text-type-gray');
                    paragraph.classList.add('text-primary-color');
                } else {
                    paragraph.classList.remove('text-primary-color');
                    paragraph.classList.add('text-type-gray');
                }
            });
        });

        // password type change
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
