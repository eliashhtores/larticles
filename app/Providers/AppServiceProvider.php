<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Use if you want to get rid of data wrapping
// use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Use if you want to get rid of data wrapping
        // Resource::withOutWrapping();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
