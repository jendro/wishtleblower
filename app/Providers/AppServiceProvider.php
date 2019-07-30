<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

    public function boot()
    {
        Blade::if('admin', function ($condition = true) {
            return auth()->user()->isAdmin() && $condition;
        });
        Blade::if('user', function ($condition = true) {
            return !auth()->user()->isAdmin() && $condition;
        });
    }

    
}
