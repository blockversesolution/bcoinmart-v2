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

        Auth::login($user);
        Alert::success('Success', 'Logged in successfully via ' . ucfirst($provider) . '.');
        return redirect()->route('dashboard');
    }

    public function telegramCallback(Request $request)
    {
        $data = $request->all();

        // Telegram login verification
        $check_hash = $data['hash'];
        unset($data['hash']);
        ksort($data);
        $data_check_string = '';
        foreach ($data as $key => $value) {
            $data_check_string .= "$key=$value\n";
        }
        $data_check_string = rtrim($data_check_string, "\n");
        $secret_key = hash('sha256', env('TELEGRAM_BOT_TOKEN'), true);
        $hash = hash_hmac('sha256', $data_check_string, $secret_key);

        if (strcmp($hash, $check_hash) !== 0) {
            Alert::error('Error', 'Telegram authentication failed.');
            return redirect()->route('login');
        }

        // Find or create user
        $user = User::updateOrCreate(
            ['provider_id' => $data['id'], 'provider_name' => 'telegram'],
            [
                'name' => $data['first_name'] . (isset($data['last_name']) ? ' ' . $data['last_name'] : ''),
                'email' => $data['username'] . '@telegram.local',
                'password' => Hash::make(Str::random(24)),
            ]
        );

        Auth::login($user);
        Alert::success('Success', 'Logged in successfully via Telegram.');
        return redirect()->route('dashboard');
    }
}
