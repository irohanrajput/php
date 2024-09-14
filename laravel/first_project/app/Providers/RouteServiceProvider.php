<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
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
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        // Load the API routes from api.php
        Route::middleware('api')
             ->prefix('api')
             ->group(base_path('routes/api.php'));

        // Load web routes if any
        Route::middleware('web')
             ->group(base_path('routes/web.php'));
    }

    /**
     * Configure the rate limits for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        //
    }
}
