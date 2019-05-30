<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Educator;
use App\Student;

class ResetPasswordController extends Controller
{
    public function renderVerifyCode()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin = mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)] . mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)];

        $code = str_shuffle($pin);

        // THIẾU THÊM VÀO COOKIE NHA

        return $code;
    }

    public function sendVerifyCode(Request $request)
    {
        $rules = [
            'email' => 'required|email'
        ];

        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {

            if ($user = User::where('email', $request->email)->first()) {

                $verifyCode = $this->renderVerifyCode();

                if ($user->role == "educator") {
                    $educator = Educator::where('email', $user->email)->first();
                    $data = array(
                        'name'       => $educator->name,
                        'verifycode'      =>  $verifyCode
                    );
                } elseif ($user->role == "student") {
                    $student = Student::where('email', $user->email)->first();
                    $data = array(
                        'name'       => $student->name,
                        'verifycode'      =>  $verifyCode
                    );
                }

                Mail::to($user->email)->send(new SendMail($data, '[RESET PASSWORD] [VERIFY CODE]', 'verifycode'));
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
