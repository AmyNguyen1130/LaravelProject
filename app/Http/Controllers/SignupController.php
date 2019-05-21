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

        // Điều kiện cho các input trong form
        $rules = [
            'name' => 'required|min:3|regex:/^[a-zA-Z ]*$/',
            'phone' => 'required|numeric|min:10',
            'birthday' => 'before:today',
            'address' => 'required',
        ];

        // Những lỗi sẽ xuất ra
        $messages = [
            'name.required' => 'Tên là trường bắt buộc',
            'name.min' => 'Tên phải lớn hơn 3 kí tự',
            'name.regex' => 'Tên không được chứa kí tự đặc biệt hoặc số',
            'phone.required' => 'Số điện thoại là trường bắt buộc',
            'phone.numeric' => 'Số điện thoại phải là số từ 0 đến 9',
            'phone.min' => 'Số điện thoại phải chứa ít nhất 10 số',
            'birthday.before' => 'Ngày sinh không hợp lệ',
            'address.required' => 'Địa chỉ là trường bắt buộc',
        ];
        // Kiểm tra các trường hợp input không hợp lệ
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Nếu có lỗi thì trả về lỗi
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        } else {
            // Không có lỗi
            // Lưu thông tin từ form gửi sang
            $name = $request->name;
            $class = $request->class;
            $gender = $request->gender;
            $birthday = $request->birthday;
            $room = $request->room;
            $address = $request->address;
            $phone = $request->phone;

            // Tạo mới user để lưu thông tin
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = "student";
            // Role = student vì chỉ student mới đăng ký ở trang này

            if (Student::where('email', $request->email)->first()) {
                // Trường hợp sinh viên đã có/được cập nhật thông tin từ trước
                $student = Student::where('email', $request->email)->first();
            } else {
                // Trường hợp sinh viên chưa có/được cập nhật thông tin từ trước
                $student = new Student();
                $student->email = $request->email;
            }

            $student->name = $name;
            $student->class_id = $class;
            $student->gender = $gender;
            $student->birthday = $birthday;
            $student->room_id = $room;
            $student->address = $address;
            $student->phone = $phone;

            if ($user->save()) {
                $student->save();
                // Saved thì đặt cho nó ra Session để cho tình trạng là đã đăng nhập luôn rồi
                Session::put('user', $user);
                return response()->json([
                    'error' => false,
                    'user' => $user
                ], 200);
            }
        }
    }

}
