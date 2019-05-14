<?php
use Illuminate\Support\Facades\Route;

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

        Route::group(['prefix' => 'users/'], function () {

            Route::get('', [
                'as' => 'admin.tables.users',
                'uses' => 'PagesController@getTableUsers'
            ]);

            Route::get('add', [
                'as' => 'users.getAdd',
                'uses' => 'UsersController@getAddUser'
            ]);

            Route::post('add', [
                'as' => 'users.postAdd',
                'uses' => 'UsersController@addUser'
            ]);

            Route::get('delete/{id}', [
                'as' => 'delete.user',
                'uses' => 'UsersController@deleteUser'
            ]);
        });

        Route::group(['prefix' => 'categories/'], function () {

            Route::get('', [
                'as' => 'admin.tables.categories',
                'uses' => 'PagesController@getTableCategories'
            ]);

            Route::get('delete/{id}', [
                'as' => 'delete.type',
                'uses' => 'PagesController@deleteTypeProduct'
            ]);
        });

        Route::group(['prefix' => 'products/'], function () {

            Route::get('', [
                'as' => 'admin.tables.products',
                'uses' => 'PagesController@getTableProducts'
            ]);

            Route::get('delete/{id}', [
                'as' => 'delete.product',
                'uses' => 'PagesController@deleteProduct'
            ]);
        });

        // Route::get('orders', [
        //     'as' => 'admin.tables.orders',
        //     'uses' => 'PagesController@getTableOrders'
        // ]);

        Route::group(['prefix' => 'bills/'], function () {

            Route::get('', [
                'as' => 'admin.tables.bills',
                'uses' => 'PagesController@getTableBills'
            ]);

            Route::get('delete/{id}', [
                'as' => 'delete.bill',
                'uses' => 'PagesController@deleteBill'
            ]);
        });
    });
});
