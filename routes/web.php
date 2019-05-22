<?php
use Illuminate\Support\Facades\Cookie;

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
		'uses' => 'LoginController@checkLogin'
	]);

	Route::group(['prefix' => 'signup/'], function () {

		Route::post('step-1', [
			'as' => 'signup-step-1',
			'uses' => 'SignupController@validateStep1'
		]);

		Route::post('step-2', [
			'as' => 'signup-step-2',
			'uses' => 'SignupController@postSignup'
		]);
	});

	Route::get('logout', [
		'as' => 'logout',
		'uses' => 'LoginController@logout'
	]);

	Route::get('testCookie', function () {
		$user =  Cookie::get('remember');
		dd($user);
	});
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

			Route::get('load', [
				'as' => 'admin.tables.users.load',
				'uses' => 'AdminController@loadData'
			]);

			Route::post('CRUD', [
				'as' => 'admin.tables.users.CRUD',
				'uses' => 'AdminController@CRUDTableUsers'
			]);
		});
	});
});

//STUDENT

Route::group(['prefix' => 'student/'], function () {

	Route::get('', [
		'as' => 'student.pages.index',
		'uses' => 'StudentController@getIndex'
	]);

	Route::get('issue', [
		'as' => 'student.pages.issue',
		'uses' => 'StudentController@getIssue'
	]);

	Route::get('bill', [
		'as' => 'student.pages.bill',
		'uses' => 'StudentController@getBill'
	]);

	Route::post('sendReport', [
		'as' => 'student.pages.sendReport',
		'uses' => 'StudentController@sendReport'
	]);

	Route::post('getWaterByMonth', [
		'as' => 'student.pages.getWaterByMonth',
		'uses' => 'StudentController@getWaterByMonth'
	]);
});


Route::get('test', [
	'as' => 'test',
	'uses' => 'StudentController@getWaterByMonth'
]);
