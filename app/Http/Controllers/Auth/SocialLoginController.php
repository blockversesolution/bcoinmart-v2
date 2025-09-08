<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        $allowed = ['google', 'telegram'];
        if (!in_array($provider, $allowed)) {
            Alert::error('Error', 'Invalid social provider.');
            return redirect()->route('login');
        }
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $socialUser = Socialite::driver($provider)->stateless()->user();

        $user = User::updateOrCreate(
            [
                'provider_id' => $socialUser->getId(),
                'provider_name' => $provider,
            ],
            [
                'name' => $provider !== 'telegram'
                    ? $socialUser->getName() ?? $socialUser->getNickname()
                    : trim(($socialUser->user['first_name'] ?? '') . ' ' . ($socialUser->user['last_name'] ?? '')),
                'email' => $provider !== 'telegram' ? $socialUser->getEmail() : null,
                'password' => Hash::make(Str::random(24)),
            ]
        );

        $user->forceFill([
            'provider_id' => $socialUser->getId(),
            'provider_name' => $provider,
        ])->save();
        if ($user->two_factor_enabled) {
            session(['2fa:user_id' => $user->id]);
            Auth::logout();
            Alert::info('Two-Factor Verification', 'Please verify your OTP to continue.');
            return redirect()->route('2fa.index');
        }
        Auth::login($user);
        Alert::success('Success', 'Logged in successfully via ' . ucfirst($provider) . '.');
        return redirect()->route('dashboard');
    }

}
