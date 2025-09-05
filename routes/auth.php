<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('register/verification', [RegisteredUserController::class, 'verification'])->name('register.verification');
    Route::post('register/otp/check', [RegisteredUserController::class, 'otpCheck'])->name('register.otp.check');
    Route::get('register/password/set', [RegisteredUserController::class, 'passwordSet'])->name('register.password.set');
    Route::post('register/confirmation', [RegisteredUserController::class, 'confirmation'])->name('register.confirmation');

    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login/create', [LoginController::class, 'store'])->name('login.post');
    Route::get('login/password', [LoginController::class, 'login_password'])->name('login.password');
    Route::post('login', [LoginController::class, 'login_confirm'])->name('login.confirm');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::get('forgot-password/otp/send', [PasswordResetLinkController::class, 'otpSend'])
        ->name('password.otp');

    Route::post('reset-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.confirmation');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
