<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ResetPasswordController extends Controller
{
    public function rendVerifyCode()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin = mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)] . mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)];

        $code = str_shuffle($pin);

        return response()->json($code);
    }

    public function sendVerifyCode(Request $request)
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
            if ($user = User::where([['email', $request->email], ['password', $request->password]])) {
                // Mail::to($user->email)->send(new SendMail($data));
                return response()->json([
                    $request->all()
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
}
