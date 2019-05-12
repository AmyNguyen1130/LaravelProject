<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use Illuminate\Support\Facades\Hash;

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
					$message = new MessageBag(['errorlogin' => 'Đăng nhập thành công']);
					return response()->json([
						'error' => false,
						'message' => $message
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
}
