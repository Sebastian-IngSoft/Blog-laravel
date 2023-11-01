<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//vinculando para el boot
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //configuracion para corregir la longitud
        Schema::defaultStringLength(191);
    }
}
