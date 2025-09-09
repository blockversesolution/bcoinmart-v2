<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->two_factor_enabled) {
            // Skip 2FA routes to prevent redirect loops
            if (!$request->session()->get('2fa_verified') && !$request->is('2fa*')) {

                // Save user ID in session for verification
                $request->session()->put('2fa:user_id', $user->id);

                // Logout immediately
                Auth::logout();

                Alert::info('Two-Factor Verification Needed', 'Please login again and  verify your OTP to continue.');
                return redirect()->route('login');
            }
        }

        return $next($request);

    }
}
