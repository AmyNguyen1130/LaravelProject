<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\MessageBag;
use App\Student;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    public function validateStep1(Request $request)
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
            if (User::where('email', $email)->first()) {
                $error = new MessageBag(['errorSignup' => 'Địa chỉ email đã tồn tại']);
                return response()->json([
                    'error' => true,
                    'message' => $error,
                ], 200);
            } elseif (!str_contains($email, "student.passerellesnumeriques.org")) {
                $error = new MessageBag(['errorSignup' => 'Vui lòng sử dụng email được cung cấp bởi Passerelles Numeriques']);
                return response()->json([
                    'error' => true,
                    'message' => $error,
                ], 200);
            } else {
                $student = Student::where('email', $email)->first();
                return response()->json([
                    'error' => false,
                    'student' => $student,
                ], 200);
            }
        }
    }

    public function postSignup(Request $request)
    {

        $rules = [
            'name' => 'required|min:3|regex:/^[a-zA-Z ]*$/',
            'phone' => 'required|numeric|min:10',
            'birthday' => 'before:today',
        ];

        $messages = [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Tên phải lớn hơn 3 kí tự',
            'name.regex' => 'Tên không được chứa kí tự đặc biệt hoặc số',
            'phone.required' => 'Số điện thoại là trường bắt buộc',
            'phone.numeric' => 'Số điện thoại phải là số từ 0 đến 9',
            'phone.min' => 'Số điện thoại phải chứa ít nhất 10 số',
            'birthday.before' => 'Ngày sinh không hợp lệ',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {
            $name = $request->name;
            $gender = $request->gender;
            $birthday = $request->birthday;
            $phone = $request->phone;

            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = "student";

            $student = Student::where('email', $request->email)->first();
            $student->name = $name;
            $student->gender = $gender;
            $student->birthday = $birthday;
            $student->phone = $phone;
            if ($user->save()) {
                $student->save();
                Session::put('user', $user);
                return response()->json([
                    'error' => false,
                    'user' => $user
                ], 200);
            }
        }
    }
}
