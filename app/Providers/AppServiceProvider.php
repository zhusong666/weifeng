<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use App\Model\Home\ArticleCate;
use Illuminate\Support\Facades\View;
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
        $rs = ArticleCate::with('articles')->get();
        View::share('rs',$rs);
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
