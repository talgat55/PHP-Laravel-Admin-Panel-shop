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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    //Dashboard Route
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    });

    //  Shop Data Entry Routes
    Route::resource('brands', 'ShopDataEntry/BrandsController');
    Route::resource('categories', 'ShopDataEntry/categoriesController');
    Route::resource('products', 'ShopDataEntry/ProductsController');

    // Shop Transactions Routes
    Route::resource('customers', 'Transactions/CustomersController');
    Route::resource('orders', 'ShopTransactions/OrdersController');
    Route::resource('product-sales', 'ShopTransactions/ProductSalesController');

    //Frontend Data Entry Routes
    Route::resource('blog-posts', 'FrontendDataEntry/BlogPostsController');
    Route::resource('pages', 'FrontendDataEntry/PagesController');

    //System
    Route::resource('system-users', 'System/UsersController');

    Route::resource('database-backup', 'System/SystemController@dbbackup');
    Route::resource('csv-export', 'System/SystemController@csvexport');
    Route::resource('csv-import', 'System/SystemController@csvimport');
});




