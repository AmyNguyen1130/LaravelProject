<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Educator;
use App\Student;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    public function renderVerifyCode()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin = mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)] . mt_rand(10, 99) . $characters[rand(0, strlen($characters) - 1)];

        $code = str_shuffle($pin);

        // THÊM VÀO COOKIE
        Cookie::queue('verifyCode', $code, 5); // 5 minutes

        return $code;
    }

    public function sendVerifyCode(Request $request)
    {
        $rules = [
            'email' => 'required|email'
        ];

        $messages = [
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Địa chỉ email không đúng định dạng'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'is_valid' => false,
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {

            if ($user = User::where('email', $request->email)->first()) {

                $verifyCode = $this->renderVerifyCode();

                if ($user->role == "educator") {
                    if ($educator = Educator::where('email', $user->email)->first()) {
                        $data = array(
                            'name'       => $educator->name,
                            'verifycode'      =>  $verifyCode
                        );
                    } else {
                        $data = array(
                            'name'       => 'bạn',
                            'verifycode'      =>  $verifyCode
                        );
                    }
                } elseif ($user->role == "student") {
                    if ($student = Student::where('email', $user->email)->first()) {
                        $data = array(
                            'name'       => $student->name,
                            'verifycode'      =>  $verifyCode
                        );
                    } else {
                        $data = array(
                            'name'       => 'bạn',
                            'verifycode'      =>  $verifyCode
                        );
                    }
                }

                Mail::to($user->email)->send(new SendMail($data, '[RESET PASSWORD] [VERIFY CODE]', 'verifycode'));
                return response()->json([
                    'is_valid' => true,
                    'error' => false,
                    'message' => 'Chúng tôi đã gửi đến địa chỉ email của bận một mã xác minh, vui lòng kiểm tra địa chỉ email của bạn và dùng mã đó cho phần bên dưới'
                ], 200);
            } else {
                return response()->json([
                    'is_valid' => true,
                    'error' => true,
                    'message' => 'Rất tiếc, chúng tôi không tìm thấy địa chỉ email của bạn'
                ], 200);
            }
        }
    }

    public function verifyCode(Request $request)
    {
        if ($request->code == Cookie::get('verifyCode')) {
            Cookie::queue('verifyCode', 'verified', 5); // 5 minutes
            return response()->json([
                'error' => false,
                'message' => 'Xác nhận thành công'
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Mã xác nhận không chính xác, vui lòng phân biệt chữ hoa và chữ thường'
            ], 200);
        }
    }

    public function resetPassword(Request $request)
    {
        if ($user = User::where('email', $request->email)->first()) {
            $user->password = Hash::make($request->password);
            if ($user->save()) {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    return response()->json([
                        'error' => false,
                        'message' => 'Thay đổi mật khẩu thành công.'
                    ]);
                }
            }
        }
        return response()->json([
            'error' => true,
            'message' => 'Có lỗi xảy ra, vui lòng thử lại sau'
        ]);
    }
}
