<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Room;
use App\Classes;
use Illuminate\Support\Facades\View;

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
        $rooms = Room::all();
        $classes = Classes::all();
        View::share(['rooms' => $rooms, 'classes' => $classes]);
    }
}
