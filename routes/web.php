<?php
use Illuminate\Support\Facades\Hash;

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

    Route::post('login', [
        'as' => 'login',
        'uses' => 'PagesController@checkLogin'
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

        // Route::get('categories', [
        //     'as' => 'admin.tables.categories',
        //     'uses' => 'PagesController@getTableCategories'
        // ]);

        // Route::get('products', [
        //     'as' => 'admin.tables.products',
        //     'uses' => 'PagesController@getTableProducts'
        // ]);

        // Route::get('orders', [
        //     'as' => 'admin.tables.orders',
        //     'uses' => 'PagesController@getTableOrders'
        // ]);

        // Route::get('bills', [
        //     'as' => 'admin.tables.bills',
        //     'uses' => 'PagesController@getTableBills'
        // ]);
    });
});

//STUDENT

Route::group(['prefix' => 'student/'], function () {

    Route::get('', [
        'as' => 'student.pages.index',
        function () {
            return view('student.pages.index');
        }
    ]);

});
