<?php

namespace App\Providers;

use App\Models\Check;
use App\Observers\CheckObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Check::observe(CheckObserver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Check::observe(CheckObserver::class);
    }
}
