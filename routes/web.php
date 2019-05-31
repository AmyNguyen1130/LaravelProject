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

	// QUÊN MẬT KHẨU

	Route::get('email-code', function () {
		return view('verifycode');
	});

	Route::get('getCode', [
		'as' => 'getCode',
		'uses' => 'ResetPasswordController@renderVerifyCode'
	]);

	//

	Route::get('forgot-password', function () {
		Cookie::queue(
			Cookie::forget('verifyCode')
		);
		return view('forgot-password');
	});

	Route::post('send-verify-code', [
		'as' => 'send-verify-code',
		'uses' => 'ResetPasswordController@sendVerifyCode'
	]);

	Route::post('reset-password', [
		'as' => 'reset-password',
		'uses' => 'ResetPasswordController@resetPassword'
	]);

	Route::post('verify-code', [
		'as' => 'verify-code',
		'uses' => 'ResetPasswordController@verifyCode'
	]);
	// END QUÊN MẬT KHẨU
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
			return view('manager.pages.index');
		}
	]);

	Route::get('sendbill', [
		'as' => 'manager.pages.sendbill',
		function () {
			return view('manager.pages.sendbill');
		}
	]);

	Route::post('sendbill/send', 'ManagerController@sendBill');

	Route::get('sendbill/loadData', [
		'as' => 'manager.pages.sendbill.loadData',
		'uses' => 'ManagerController@loadDataToSendBill'
	]);

	Route::post('filterBeforeSend', [
		'as' => 'manager.pages.filterBeforeSend',
		'uses' => 'ManagerController@loadDataFilterToSendBill'
	]);

	Route::group(['prefix' => 'tables/'], function () {

		// BILL ELECTRIC

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

			// INSERT NEW RECORD
			Route::post('insert', [
				'as' => 'manager.tables.electrics.insert',
				'uses' => 'ElectricController@insertNewRocord'
			]);

			Route::post('getOldNumber', [
				'as' => 'manager.tables.electrics.getOldNumber',
				'uses' => 'ElectricController@getOldNumber'
			]);

			Route::post('filterYear', [
				'as' => 'manager.tables.electrics.filterYear',
				'uses' => 'ElectricController@filterByYear'
			]);

			Route::post('filterMonth', [
				'as' => 'manager.tables.electrics.filterMonth',
				'uses' => 'ElectricController@filterByMonth'
			]);

			Route::post('filterRoom', [
				'as' => 'manager.tables.electrics.filterRoom',
				'uses' => 'ElectricController@filterByRoom'
			]);

			Route::post('filterStatus', [
				'as' => 'manager.tables.electrics.filterStatus',
				'uses' => 'ElectricController@filterByStatus'
			]);
		});

		// BILL WATER

		Route::group(['prefix' => 'waters/'], function () {
			Route::get('', [
				'as' => 'manager.tables.waters',
				'uses' => 'ManagerController@getTableWaters'
			]);

			Route::get('load', [
				'as' => 'manager.tables.waters.load',
				'uses' => 'ManagerController@loadDataTableWaters'
			]);

			Route::post('CRUD', [
				'as' => 'manager.tables.waters.CRUD',
				'uses' => 'ManagerController@CRUDTableWaters'
			]);

			// Upload excel file and insert to DB
			Route::post('import', [
				'as' => 'manager.tables.waters.import',
				'uses' => 'ExcelController@importWaters'
			]);

			// INSERT NEW RECORD
			Route::post('insert', [
				'as' => 'manager.tables.waters.insert',
				'uses' => 'WaterController@insertNewRocord'
			]);

			Route::post('getOldNumber', [
				'as' => 'manager.tables.waters.getOldNumber',
				'uses' => 'WaterController@getOldNumber'
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

	Route::get('waterElectricBill', [
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

	Route::get('kitchenExpenses', [
		'as' => 'student.pages.getKitchenExpenses',
		'uses' => 'StudentController@getKitchenExpenses'
	]);

	Route::post('getKitchenExpensesByMonth', [
		'as' => 'student.pages.getKitchenExpensesByMonth',
		'uses' => 'StudentController@getKitchenExpensesByMonth'
	]);

	// 

	// Misconduct page

	Route::get('misconduct', [
		'as' => 'student.pages.getMisconduct',
		'uses' => 'StudentController@getMisconduct'
	]);

	Route::post('getMisconductByMonth', [
		'as' => 'student.pages.getMisconductByMonth',
		'uses' => 'StudentController@getMisconductByMonth'
	]);
});


// EDUCATOR
Route::group(['prefix' => 'educator/', 'middleware' => 'is_educator'], function () {

	Route::get('', [
		'as' => 'educator.pages.index',
		function () {
			return view('educator.pages.index');
		}
	]);

	Route::group(['prefix' => 'tables/'], function () {

		Route::group(['prefix' => 'rooms/'], function () {
			Route::get('', [
				'as' => 'educator.tables.rooms',
				function() {
					return view('educator.tables.rooms');
				}
			]);

			Route::get('load', [
				'as' => 'educator.tables.users.load',
				'uses' => 'EducatorController@loadDataInfoOfRooms'
			]);

			Route::post('CRUD', [
				'as' => 'admin.tables.users.CRUD',
				'uses' => 'AdminController@CRUDTableUsers'
			]);

		});

		Route::group(['prefix' => 'misconducts/'], function () {
			Route::get('', [
				'as' => 'educator.tables.misconducts',
				function() {
					return view('educator.tables.misconducts');
				}
			]);

			Route::get('load', [
				'as' => 'educator.tables.misconducts.load',
				'uses' => 'EducatorController@loadDataTableMisconducts'
			]);

			Route::post('CRUD', [
				'as' => 'educator.tables.misconducts.CRUD',
				'uses' => 'EducatorController@CRUDTableMisconducts'
			]);

		});

		Route::group(['prefix' => 'students/'], function () {
			Route::get('', [
				'as' => 'educator.tables.students',
				function() {
					return view('educator.tables.students');
				}
			]);

			Route::get('load', [
				'as' => 'educator.tables.students.load',
				'uses' => 'EducatorController@loadDataTableStudents'
			]);

			Route::post('CRUD', [
				'as' => 'educator.tables.students.CRUD',
				'uses' => 'EducatorController@CRUDTableStudents'
			]);

			Route::post('import', [
				'as' => 'educator.tables.students.import',
				'uses' => 'ExcelController@importStudents'
			]);

		});

		Route::group(['prefix' => 'issues/'], function () {
			Route::get('', [
				'as' => 'educator.tables.issues',
				function() {
					return view('educator.tables.issues');
				}
			]);

			Route::get('load', [
				'as' => 'educator.tables.issues.load',
				'uses' => 'EducatorController@loadDataTableIssues'
			]);

			Route::post('CRUD', [
				'as' => 'educator.tables.issues.CRUD',
				'uses' => 'EducatorController@CRUDTableIssues'
			]);

		});
	});
});
