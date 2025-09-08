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

        if ($user) {

            if ($user->two_factor_enabled && !session('2fa_verified')) {

                session(['url.intended' => url()->current()]);

                Alert::warning('2FA Verification', 'Please complete two-factor authentication to proceed.');
                return redirect()->route('2fa.index');
            }
        }

        return $next($request);
    }
}
