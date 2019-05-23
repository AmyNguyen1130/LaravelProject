<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Electric;

class ManagerController extends Controller
{

    public function getTableElectrics()
    {
        return view('manager.tables.electrics');
    }

    public function loadDataTableElectrics()
    {
        $electrics = Electric::all();
        $data = "";
        foreach ($electrics as $electric) {
            $data .= "
            <tr>
                <td>" . $electric->id . "</td>
                <td>" . $electric->full_name . "</td>
                <td>" . $electric->email . "</td>
                <td>" . $electric->role . "</td>
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
