<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
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
        Response::macro('success', function ($message) {
            return Response::make([
                'errors' => false,
                'data' => $message
            ], 200);
        });

        Response::macro('error', function ($message, $error_code = 400) {
            return Response::make([
                'errors' => true,
                'data' => $message,
            ], $error_code);
        });
    }
}
