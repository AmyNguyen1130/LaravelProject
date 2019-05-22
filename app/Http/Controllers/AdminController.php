<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function loadData()
    {
        $users = User::all();
        $data = "";
        foreach ($users as $user) {
            $data .= "
            <tr>
                <td>" . $user->id . "</td>
                <td>" . $user->full_name . "</td>
                <td>" . $user->email . "</td>
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
            $user->save();
        } else if ($input['action'] == 'delete') {
            User::where('id', $input['id'])->delete();
        }
    }
}
