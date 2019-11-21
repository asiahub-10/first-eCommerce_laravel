<?php

namespace App\Providers;

use App\Category;
use App\ProductBrand;
use View;
use Illuminate\Support\ServiceProvider;
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
        //**********for all views**********

//        View::share('key', 'value');
//        View::share('name', 'Shorna');
//        view::composer('*', function ($view) {
//            $view->with('name', 'shorna');
//        });


        //**********for specific view**********

//        view::composer('front-end.home.home', function ($view) {
//            $view->with('name', 'shorna');
//        });


        View::composer('front-end.includes.header', function ($view) {
            $view->with('categories', Category::where('publication_status', 1)->get());
        });

        View::composer('front-end.includes.footer', function ($view) {
            $view->with('productBrands', ProductBrand::where('publication_status', 1)->get());
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');
    }
}
