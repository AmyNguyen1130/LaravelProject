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

// PAGES
Route::get('/', [
    'as' => 'index',
    'uses' => 'PagesController@getIndex'
]);

Route::group(['prefix' => ''], function () {

    Route::get('products', [
        'as' => 'products',
        'uses' => 'PagesController@getProducts'
    ]);

    Route::get('product-type/{id}', [
        'as' => 'product-type',
        'uses' => 'PagesController@getProductType'
    ]);

    Route::get('product-detail/{id}', [
        'as' => 'product-detail',
        'uses' => 'PagesController@getProductDetail'
    ]);

    Route::get('contact', [
        'as' => 'contact',
        'uses' => 'PagesController@getContact'
    ]);

    Route::get('about', [
        'as' => 'about',
        'uses' => 'PagesController@getAbout'
    ]);

    // CART
    Route::get('add-to-cart/{id}', [
        'as' => 'add-to-cart',
        'uses' => 'PagesController@getAddToCart'
    ]);

    Route::get('delete-from-cart/{id}', [
        'as' => 'delete-from-cart',
        'uses' => 'PagesController@getDeleteFromCart'
    ]);

    Route::get('checkout', [
        'as' => 'checkout',
        'uses' => 'PagesController@getCheckout'
    ]);
    
});

// ADMIN
Route::group(['prefix' => 'admin/'], function () {

    Route::get('', [
        'as' => 'admin.pages.index',
        function () {
            return view('admin.pages.index');
        }
    ]);

    Route::group(['prefix' => 'tables/'], function () {

        Route::get('users', [
            'as' => 'admin.tables.users',
            'uses' => 'PagesController@getTableUsers'
        ]);

        Route::get('categories', [
            'as' => 'admin.tables.categories',
            'uses' => 'PagesController@getTableCategories'
        ]);

        Route::get('products', [
            'as' => 'admin.tables.products',
            'uses' => 'PagesController@getTableProducts'
        ]);

        Route::get('orders', [
            'as' => 'admin.tables.orders',
            'uses' => 'PagesController@getTableOrders'
        ]);

        Route::get('bills', [
            'as' => 'admin.tables.bills',
            'uses' => 'PagesController@getTableBills'
        ]);
    });
});

Route::get('educator', function(){
    return view('educator');
});