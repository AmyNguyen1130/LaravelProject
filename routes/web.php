<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

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

Route::get('hash/{password}', [
	'as' => 'hash',
	function ($hash) {
		return Hash::make($hash);
	}
]);

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
});

// ADMIN
Route::group(['prefix' => 'admin/', 'middleware' => 'is_admin'], function () {

	Route::get('', [
		'as' => 'admin.pages.index',
		function () {
			if (Auth::check()) {
				if (Auth::user()->role == "admin") {
					return view('admin.pages.index');
				}
			}
			return redirect()->back();
		}
	]);

	Route::group(['prefix' => 'tables/'], function () {

		Route::group(['prefix' => 'users/'], function () {
			Route::get('', [
				'as' => 'admin.tables.users',
				'uses' => 'AdminController@getTableUsers'
			]);

			Route::get('load', [
				'as' => 'admin.tables.users.load',
				'uses' => 'AdminController@loadDataTableUsers'
			]);

			Route::post('CRUD', [
				'as' => 'admin.tables.users.CRUD',
				'uses' => 'AdminController@CRUDTableUsers'
			]);

			Route::post('role', [
				'as' => 'admin.tables.users.role',
				'uses' => 'AdminController@getDataTableUsersByRole'
			]);
		});
	});
});

// MANAGER
Route::group(['prefix' => 'manager/', 'middleware' => 'is_manager'], function () {

	Route::get('', [
		'as' => 'manager.pages.index',
		function () {
			if (Auth::check()) {
				if (Auth::user()->role == "manager") {
					return view('manager.pages.index');
				}
			}
			return redirect()->back();
		}
	]);

	Route::group(['prefix' => 'tables/'], function () {

		Route::group(['prefix' => 'electrics/'], function () {
			Route::get('', [
				'as' => 'manager.tables.electrics',
				'uses' => 'ManagerController@getTableElectrics'
			]);

			Route::get('load', [
				'as' => 'manager.tables.electrics.load',
				'uses' => 'ManagerController@loadDataTableElectrics'
			]);

			Route::post('CRUD', [
				'as' => 'manager.tables.electrics.CRUD',
				'uses' => 'ManagerController@CRUDTableElectrics'
			]);

			// Upload excel file and insert to DB
			Route::post('import', [
				'as' => 'manager.tables.electrics.import',
				'uses' => 'ExcelController@importElectrics'
			]);
		});
	});
});

//STUDENT

Route::group(['prefix' => 'student/', 'middleware' => 'is_student'], function () {

	// Home page

	Route::get('', [
		'as' => 'student.pages.index',
		'uses' => 'StudentController@getIndex'
	]);

	Route::get('issue', [
		'as' => 'student.pages.issue',
		'uses' => 'StudentController@getIssue'
	]);

	Route::post('sendReport', [
		'as' => 'student.pages.sendReport',
		'uses' => 'StudentController@sendReport'
	]);

	// 

	// Water, electric page

	Route::get('bill', [
		'as' => 'student.pages.bill',
		'uses' => 'StudentController@getBill'
	]);

	Route::post('getWaterByMonth', [
		'as' => 'student.pages.getWaterByMonth',
		'uses' => 'StudentController@getWaterByMonth'
	]);

	Route::post('getElectricByMonth', [
		'as' => 'student.pages.getElectricByMonth',
		'uses' => 'StudentController@getElectricByMonth'
	]);

	// 

	// Kitchen Page

	Route::get('getKitchenExpenses', [
		'as' => 'student.pages.getKitchenExpenses',
		'uses' => 'StudentController@getKitchenExpenses'
	]);

	Route::post('getKitchenExpensesByMonth', [
		'as' => 'student.pages.getKitchenExpensesByMonth',
		'uses' => 'StudentController@getKitchenExpensesByMonth'
	]);

	// 

	// Misconduct page

	Route::get('getMisconduct', [
		'as' => 'student.pages.getMisconduct',
		'uses' => 'StudentController@getMisconduct'
	]);

	Route::post('getMisconductByMonth', [
		'as' => 'student.pages.getMisconductByMonth',
		'uses' => 'StudentController@getMisconductByMonth'
	]);
});


// TEST
Route::get('testlogin', [
	'as' => 'testlogin',
	function () {
		return view('test');
	}
]);

Route::post('testlogin', [
	'as' => 'testlogin',
	'uses' => 'LoginController@testLogin'
]);
