<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

	public function checkLogin(Request $request)
	{

		$rules = [
			'email' => 'required|email',
			'password' => 'required|min:8'
		];

		$messages = [
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		} else {
			$email = $request->email;
			$password = $request->password;

			if (Auth::attempt(['email' => $email, 'password' => $password])) {
				if (isset($request->remember)) {
					Cookie::queue('remember', 'true', 43200); // 30days
					Cookie::queue('remember_email', $email, 43200); // 30days
					Cookie::queue('remember_password', $password, 43200); // 30days
				}
				return response()->json([
					'error' => false,
					'user' => Auth::user(),
					'role' => Auth::user()->role,
				], 200);
			} else {
				$message = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không chính xác']);
				return response()->json([
					'error' => true,
					'message' => $message
				], 200);
			}
		}
	}

	public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
			if (!Auth::check()) {
				return redirect()->route('index');
			}
		}
	}
}
