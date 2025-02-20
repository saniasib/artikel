<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        //
        $host = request()->getHost();

        if (!app()->environment('local') || str_contains($host, 'ngrok-free.app')) {
            URL::forceScheme('https');
        }
    }
}