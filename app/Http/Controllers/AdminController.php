<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Educator;
use App\Student;

class AdminController extends Controller
{
    // TABLE users
    public function getTableUsers()
    {
        return view('admin.tables.users');
    }

    public function loadDataTableUsers()
    {
        $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role', 'users.deleted')->join('educators', 'users.email', 'educators.email')->where('role', 'educator')->get();
        $data = "";
        foreach ($users as $user) {


            // HỖ TRỢ HIỂN THỊ HTML
            $role = ($user->role == "educator") ? "Educator" : "";
            $role = ($user->role == "student") ? "Student" : $role;
            $role = ($user->role == "admin") ? "Admin" : $role;
            $role = ($user->role == "manager") ? "Manager" : $role;

            $deleted = ($user->deleted == 0) ? "Alive" : "Died";
            $isDeleted = ($user->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isDeleted . "'>
                <td class='hidden'>" . $user->id . "</td>
                <td>" . $user->name . "</td>
                <td>" . $user->email . "</td>
                <td>" . $user->gender . "</td>
                <td>" . $user->phone . "</td>
                <td>" . $role . "</td>
                <td>" . $deleted . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function CRUDTableUsers()
    {
        header('Content-Type: application/json');

        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $user = User::where('id', $input['id'])->first();
            // LẤY EMAIL CŨ ĐỂ CẬP NHẬT VÔ BẢNG STUDENTS HOẶC EDUCATORS
            $old_email = $user->email;

            $user->email = $input['email'];
            $user->deleted = $input['deleted'];

            if ($user->role === 'educator') {
                $educator = Educator::where('email', $old_email)->first();
                $educator->name = $input['full_name'];
                $educator->email = $input['email'];
                $educator->gender = $input['gender'];
                $educator->phone = $input['phone'];
                if ($user->save()) {
                    $educator->save();
                }
            } else if ($user->role === 'student') {
                $student = Student::where('email', $old_email)->first();
                $student->name = $input['full_name'];
                $student->email = $input['email'];
                $student->gender = $input['gender'];
                $student->phone = $input['phone'];
                if ($user->save()) {
                    $student->save();
                }
            }

            // CÒN THIẾU CÁC ROLE KHÁC Ở ĐÂY

        } else if ($input['action'] == 'delete') {
            $user = User::where('id', $input['id'])->first();
            $user->deleted = 1;
            $user->save();
        } else if ($input['action'] == 'restore') {
            $user = User::where('id', $input['id'])->first();
            $user->deleted = 0;
            $user->save();
        }
        echo json_encode($input);
    }

    public function getDataTableUsersByRole(Request $request)
    {
        $role = $request->role;
        if ($role == 'educator') {
            $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role', 'users.deleted')->join('educators', 'users.email', 'educators.email')->where('role', 'educator')->get();
        } else if ($role == 'student') {
            $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role', 'users.deleted')->join('students', 'users.email', 'students.email')->where('role', 'student')->get();
        } else if ($role == 'admin') {
            $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role', 'users.deleted')->where('role', 'admin')->get();
        } else if ($role == 'manager') {
            $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role', 'users.deleted')->where('role', 'manager')->get();
        }

        $data = "";
        foreach ($users as $user) {


            // HỖ TRỢ HIỂN THỊ HTML
            $role = ($user->role == "educator") ? "Educator" : "";
            $role = ($user->role == "student") ? "Student" : $role;
            $role = ($user->role == "admin") ? "Admin" : $role;
            $role = ($user->role == "manager") ? "Manager" : $role;

            $deleted = ($user->deleted == 0) ? "Alive" : "Died";
            $isDeleted = ($user->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isDeleted . "'>
                <td class='hidden'>" . $user->id . "</td>
                <td>" . $user->name . "</td>
                <td>" . $user->email . "</td>
                <td>" . $user->gender . "</td>
                <td>" . $user->phone . "</td>
                <td>" . $role . "</td>
                <td>" . $deleted . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }
}
