<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceLayerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\StudentServiceInterface', 'App\Services\StudentService');
        $this->app->bind('App\Services\UserServiceInterface', 'App\Services\UserService');
        // :end-bindings:
    }
}
