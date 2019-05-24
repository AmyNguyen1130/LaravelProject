<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Electric;
use Carbon\Carbon;

class ManagerController extends Controller
{

    public function getTableElectrics()
    {
        return view('manager.tables.electrics');
    }

    public function loadDataTableElectrics()
    {
        $current_time = Carbon::now()->format('Y-m');
        $electrics = Electric::select('electrics.id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status', 'rooms.name as room_name')->join('rooms', 'electrics.room_id', 'rooms.id')->where('time', $current_time)->get();
        $data = "";
        foreach ($electrics as $electric) {
            $data .= "
            <tr>
                <td class='hidden'>" . $electric->id . "</td>
                <td>" . $electric->room_name . "</td>
                <td>" . $electric->time . "</td>
                <td>" . $electric->old_number . "</td>
                <td>" . $electric->new_number . "</td>
                <td>" . $electric->price . "</td>
                <td>" . $electric->status . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function CRUDTableElectrics()
    {
        header('Content-Type: application/json');

        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $electric = Electric::where('id', $input['id'])->first();
            $electric->old_number = $input['old_number'];
            $electric->new_number = $input['new_number'];
            $electric->price = $input['price'];
            $electric->status = $input['status'];
            $electric->save();
        } else if ($input['action'] == 'delete') {
            $electric = Electric::where('id', $input['id'])->first();
            $electric->deleted = 1;
            $electric->save();
        }
        echo json_encode($input);
    }
}
