<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;
use Spatie\Activitylog\Models\Activity;
use Stevebauman\Location\Facades\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('telegram', \SocialiteProviders\Telegram\Provider::class);
        });

        Activity::saving(function (Activity $activity) {
            $agent = app(Agent::class);

            // Context
            $activity->context = json_encode([
                'ip'               => request()->ip(),
                'user_agent'       => request()->userAgent(),
                'device'           => $agent->device(),
                'platform'         => $agent->platform(),
                'platform_version' => $agent->version($agent->platform()),
                'browser'          => $agent->browser(),
                'browser_version'  => $agent->version($agent->browser()),
                'timestamp'        => now()->format('Y-m-d H:i:s'),
            ]);

            // Location
            $location = Location::get(request()->ip());
            $activity->location = json_encode([
                'ip'           => $location?->ip ?? request()->ip(),
                'country'      => $location?->countryName ?? null,
                'country_code' => $location?->countryCode ?? null,
                'city'         => $location?->cityName ?? null,
                'region'       => $location?->regionName ?? null,
            ]);
        });

    }
}
