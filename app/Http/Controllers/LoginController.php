<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\MessageBag;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

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
			if ($user = User::where('email', $email)->first()) {
				if (Hash::check($password, $user->password)) {
					if (isset($request->remember)) {
						Cookie::queue('remember', 'true', 43200); // 30days
						Cookie::queue('remember_email', $user->email, 43200); // 30days
						Cookie::queue('remember_password', $request->password, 43200); // 30days
					}
					Session::put('user', $user);
					return response()->json([
						'error' => false,
						'message' => "Đăng nhập thành công"
					], 200);
				} else {
					$message = new MessageBag(['errorlogin' => 'Địa chỉ email hoặc mật khẩu không chính xác']);
					return response()->json([
						'error' => true,
						'message' => $message
					], 200);
				}
			} else {
				$errors = new MessageBag(['errorlogin' => 'Địa chỉ email chưa tồn tại']);
				return response()->json([
					'error' => true,
					'message' => $errors
				], 200);
			}
		}
	}

	public function logout()
	{
		if (Session::has('user')) {
			Session::forget('user');
			Session::save();
			if (!Session::has('user')) {
				return redirect()->route('index');
			}
		}
	}
}
