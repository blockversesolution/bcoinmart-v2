<?php


use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('register/verification', [RegisteredUserController::class, 'verification'])->name('register.verification');
    Route::post('register/otp/check', [RegisteredUserController::class, 'otpCheck'])->name('register.otp.check');
    Route::get('register/password/set', [RegisteredUserController::class, 'passwordSet'])->name('register.password.set');
    Route::post('register/confirmation', [RegisteredUserController::class, 'confirmation'])->name('register.confirmation');
    Route::get('register/otp/resend', [RegisteredUserController::class, 'resendRegisterOTP'])->name('register.otp.resend');
    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login/create', [LoginController::class, 'store'])->name('login.post');
    Route::get('login/password', [LoginController::class, 'login_password'])->name('login.password');
    Route::post('login', [LoginController::class, 'login_confirm'])->name('login.confirm');

    Route::get('forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');

    Route::get('forgot-password/otp/send', [ForgotPasswordController::class, 'otpSend'])
        ->name('password.otp');

    Route::post('forgot-password/otp/check', [ForgotPasswordController::class, 'checkOtp'])
        ->name('password.otp.check');

    Route::get('forgot-password/otp/resend', [ForgotPasswordController::class, 'resendOtp'])->name('password.otp.resend');

    Route::get('reset-password', [ForgotPasswordController::class, 'showPasswordReset'])->name('password.reset.form');

    Route::post('reset-password', [ForgotPasswordController::class, 'store'])
        ->name('password.confirmation');


    Route::get('/auth/{provider}', [SocialLoginController::class, 'redirect'])->name('social.redirect');
    Route::get('/auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('social.callback');

});

Route::middleware('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
