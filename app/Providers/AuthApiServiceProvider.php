<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use App\AuthApiProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('authapi', function ($app, array $config) {
            // Return an instance of Illuminate\Contracts\Auth\UserProvider...
	
            return new AuthApiProvider($app->make('App\AuthApiProvider'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
