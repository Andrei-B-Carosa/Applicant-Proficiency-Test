<?php

namespace App\Providers;

use App\Services\Device\AccountabilityService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AccountabilityService::class, function ($app) {
            $request = $app['request'];
            return new AccountabilityService($request);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
