<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Information;

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
        Schema::defaultStringLength(191);

        $langs = array_keys ( config('langs') );
        $default = $langs[0];
        $locale = request()->segment(1);
        if (in_array($locale, $langs)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale($default);
        }

        $infos = Information::all();
        View::share([
            'infos'=>$infos
        ]);
    }
}
