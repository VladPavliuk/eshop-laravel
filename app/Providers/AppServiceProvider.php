<?php

namespace App\Providers;

use App\Services\ApiResponseService;
use App\Models\Category;
use App\Models\Discount;
use App\Services\CategoriesService;
use App\Services\DiscountsService;
use App\Services\OrdersService;
use App\Services\PhotoService;
use App\Services\ProductsService;
use App\Services\UsersService;
use App\Services\UsersTypeService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('apiResponse', function () {
            return new ApiResponseService();
        });
        $this->app->singleton('ordersService', function () {
            return new OrdersService();
        });
        $this->app->singleton('usersService', function () {
            return new UsersService();
        });
        $this->app->singleton('usersTypeService', function () {
            return new UsersTypeService();
        });
        $this->app->singleton('discountService', function () {
            return new DiscountsService();
        });
        $this->app->singleton('photoService', function () {
            return new PhotoService();
        });
        $this->app->singleton('productsCategoriesService', function () {
            return new CategoriesService();
        });
        $this->app->singleton('productsService', function () {
            return new ProductsService();
        });
    }
}
