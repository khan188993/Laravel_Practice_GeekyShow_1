<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;
//eita use na kore link('pagination::bootstrap-4') use krte pari,
// use Illuminate\Pagination\Paginator;

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
        // Paginator::useBootstrap();
    }
}
