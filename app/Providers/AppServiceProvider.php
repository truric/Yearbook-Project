<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
//        Blade::(if)



        Blade::if('admin', function () {
            return auth()->check();
        });

        Blade::if('areaCoordinator', function () {
            return auth()->check() && auth()->user()->role <= 2;
        });
        Blade::if('groupCoordinator', function () {
            return auth()->check() && auth()->user()->role <= 3;
        });
        Blade::if('professor', function () {
            return auth()->check() && auth()->user()->role <= 4;
        });

        Blade::if('classDelegate', function () {
            return auth()->check() && auth()->user()->role <= 5;
        });

        Blade::if('student', function () {
            return auth()->check() && auth()->user()->role <= 6 && auth()->user()->role >= 5;
        });


//        Blade::if('manageGroup', function () {
//            return auth()->check() && auth()->user()->role == 1 || auth()->user()->role == 2 || auth()->user()->role == 3;
//        });
    }
}
