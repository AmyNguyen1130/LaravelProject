<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{

    public function getAddUser()
    {
        return view('admin.tables.users.add');
    }

    public function addUser(Request $request)
    {
        $user = new User();

        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->fullname;
        $user->phone = $request->fullname;

        if ($user->save()) {
            return redirect()->back()->with('success', 'Thêm tài khoản thành công');
        } else {
            return redirect()->back()->with('failed', 'Thêm tài khoản không thành công!');
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return redirect()->back()->with('success', 'Xóa tài khoản thành công!');
        } else {
            return redirect()->back()->with('failed', 'Xóa tài khoản không thành công!');
        }
    }
}
