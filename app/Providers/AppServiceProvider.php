<?php

namespace App\Providers;
use Illuminate\Routing\UrlGenerator;

use Illuminate\Support\ServiceProvider;
use Route;

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
    public function boot(UrlGenerator $url): void
    {
        Route :: prefix('api')
        ->middleware('api')
        ->group(base_path('routes/api.php'));
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
}
