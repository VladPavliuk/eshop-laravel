<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Mail\Markdown;

Route::get('/test', function() {
    $markdown = new Markdown(view(), config('mail.markdown'));

    return $markdown->render('email.test');
});

Route::namespace('Shop')
    ->prefix('/')
    ->group(function () {
        Route::get('', ['uses' => 'HomeController', 'as' => 'home-page']);

        Route::get('about', ['uses' => 'AboutController', 'as' => 'about-page']);

        Route::get('cart', ['uses' => 'ShoppingCartController', 'as' => 'shopping-cart-page']);

        Route::resources([
            'products' => 'ProductsController',
            'categories' => 'CategoriesController',
            'discounts' => 'DiscountsController',
            'orders' => 'OrdersController'
        ]);
    });

Route::namespace('API')
    ->prefix('api')
    ->group(function () {
        Route::resources([
            'orders' => 'OrdersController',
            'categories' => 'CategoriesController',
            'category-tags' => 'CategoryTagsController',
            'discounts' => 'DiscountsController',
            'payments-formats' => 'PaymentsFormatsController',
            'transportation-options' => 'TransportationOptionsController'
        ]);

        Route::get('products/in-category/{category_id}', 'ProductsController@indexInCategory');
        Route::resource('shopping-cart', 'ShoppingCart');
        Route::get('get-products-images/{id}', 'ProductsController@getProductsImages');
        Route::delete('shopping-cart/clear', 'ShoppingCart@clear');
        Route::get('get-total-amount', ['as' => 'get-total-amount', 'uses' => 'ShoppingCart@getTotalAmount']);
        Route::get('get-total-price', ['as' => 'get-total-price', 'uses' => 'ShoppingCart@getTotalPrice']);
        Route::get('get-total-price-without-discount', ['as' => 'get-total-price-without-discount', 'uses' => 'ShoppingCart@getTotalPriceWithoutDiscounts']);
        Route::get('get-active-discounts/{totalPrice}', ['as' => 'get-active-discounts', 'uses' => 'DiscountsController@getActiveDiscounts']);
        Route::get('get-in-active-discounts', ['as' => 'get-in-active-discounts', 'uses' => 'DiscountsController@getInActiveDiscounts']);
        Route::get('get-all-shopping-cart-info', ['as' => 'get-all-shopping-cart-info', 'uses' => 'ShoppingCart@getAllShoppingCartInfo']);
    });

//Route::get('/discounts', [
//    'uses' => 'Shop\DiscountsController@index',
//    'as' => 'discounts-list'
//]);

//Route::get('/category/{id}', [
//    'uses' => 'Shop\ShopController@viewCategoryPage',
//    'as' => 'view-category-page'
//]);
//
//Route::get('/product/{id}', [
//    'uses' => 'Shop\ShopController@viewProductPage',
//    'as' => 'view-product-page'
//]);


//Route::get('/shopping-card', [
//    'uses' => 'Shop\ShopController@viewShoppingCardPage',
//    'as' => 'view-shopping-card-page'
//]);
//
//Route::get('/order', [
//    'uses' => 'Shop\ShopController@viewOrderPage',
//    'as' => 'view-order-page'
//]);
//
//Route::post('/order', [
//    'uses' => 'Shop\OrdersController@order',
//    'as' => 'do-order'
//]);


Route::prefix('admin')->group(function () {
    Route::get('/login', [
        'uses' => 'Auth\AdminLoginController@showLoginForm',
        'as' => 'admin-login-page'
    ]);
    Route::post('/login', [
        'uses' => 'Auth\AdminLoginController@login',
        'as' => 'admin-login'
    ]);

    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [
            'uses' => 'Auth\AdminLoginController@logout',
            'as' => 'admin.logout'
        ]);
        Route::get('/dashboard', [
            'uses' => 'Admin\HomeController@viewDashboard',
            'as' => 'admin.dashboard'
        ]);

//        Route::resource('/products', 'Admin\ProductsController');
        Route::resource('/categories', 'Admin\CategoriesController')->names([
            'index' => 'admin.categories.index',
            'create' => 'admin.categories.create',
            'store' => 'admin.categories.store',
            'show' => 'admin.categories.show',
            'edit' => 'admin.categories.edit',
            'update' => 'admin.categories.update',
            'destroy' => 'admin.categories.destroy'
        ]);
    });
});

Route::prefix('user')->group(function () {
    Route::get('/login', [
        'uses' => 'User\Auth\LoginController@showLoginForm',
        'as' => 'user-login-page'
    ]);
    Route::post('/login', [
        'uses' => 'User\Auth\LoginController@login',
        'as' => 'user-login'
    ]);
    Route::delete('/logout', [
        'uses' => 'User\Auth\LoginController@logout',
        'as' => 'user.logout'
    ]);
    Route::get('/dashboard', [
        'uses' => 'User\HomeController@dashboard',
        'as' => 'user.dashboard'
    ]);
});

//Route::resource('discounts', 'Shop\DiscountsController');
//Route::delete('shopping-cart/clear', 'Api\ShoppingCart@clear');
//Route::resource('shopping-cart', 'Api\ShoppingCart');
//Route::get('get-total-amount', ['as' => 'get-total-amount', 'uses' => 'Api\ShoppingCart@getTotalAmount']);
//Route::get('get-total-price', ['as' => 'get-total-price', 'uses' => 'Api\ShoppingCart@getTotalPrice']);
//Route::get('get-total-price-without-discount', ['as' => 'get-total-price-without-discount', 'uses' => 'Api\ShoppingCart@getTotalPriceWithoutDiscounts']);
//Route::get('get-active-discounts', ['as' => 'get-active-discounts', 'uses' => 'Api\DiscountsController@getActiveDiscounts']);
//Route::get('get-in-active-discounts', ['as' => 'get-in-active-discounts', 'uses' => 'Api\DiscountsController@getInActiveDiscounts']);
//require(base_path('routes/shop/shopping-cart.php'));