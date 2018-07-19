<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\CategoryTag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GlobalViewVariablesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            View::share('categories', Category::all());
            View::share('categoriesTags', CategoryTag::with('category')->get());
            View::share('discounts', app('discountService')->getDiscountsList());
        });


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
