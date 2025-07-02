<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;


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
        Paginator::useBootstrap();
        $info=session()->get('appinfo');

        if ($info==null) {
            session()->put('appinfo',Setting::first());
            $info=session()->get('appinfo');
        }

        view()->share('info', $info);  

    }
}
