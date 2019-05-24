<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Educator;

class AdminController extends Controller
{
    // TABLE users
    public function getTableUsers()
    {
        return view('admin.tables.users');
    }

    public function loadDataTableUsers()
    {
        $users = User::select('users.id', 'name', 'users.email', 'gender', 'phone', 'role')->join('educators', 'users.email', 'educators.email')->where('role', 'educator')->get();
        $data = "";
        foreach ($users as $user) {
            $data .= "
            <tr>
                <td class='hidden'>" . $user->id . "</td>
                <td>" . $user->name . "</td>
                <td>" . $user->email . "</td>
                <td>" . $user->gender . "</td>
                <td>" . $user->phone . "</td>
                <td>" . $user->role . "</td>
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
            $user->email = $input['email'];
            $user->role = $input['role'];

            if ($user->role === 'educator') {
                $educator = Educator::where('email', $input['email'])->first();
                $educator->name = $input['name'];
                $educator->gender = $input['gender'];
                $educator->phone = $input['phone'];
                if ($user->save()) {
                    $educator->save();
                }
            }
        } else if ($input['action'] == 'delete') {
            $user = User::where('id', $input['id'])->first();
            $user->deleted = 1;
            $user->save();
        }
        echo json_encode($input);
    }
}
