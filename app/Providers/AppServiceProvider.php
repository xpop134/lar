<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
         * Bootstrap any application services.
         */
    public function boot(): void
    {
        // Force HTTPS if the app is in production
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
