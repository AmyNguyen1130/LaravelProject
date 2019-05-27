<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Room;
use App\Classes;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(255);
        if (Schema::hasTable('rooms') && Schema::hasTable('classes')) {
            $rooms = Room::all();
            $classes = Classes::all();
            View::share(['rooms' => $rooms, 'classes' => $classes]);
        }
    }
}
