<?php

namespace App\Providers;

use App\Servises\FibonacciCalculator;
use Illuminate\Support\ServiceProvider;

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
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('fibonacci', function ($app) {
            return new FibonacciCalculator();
        });
    }
}
