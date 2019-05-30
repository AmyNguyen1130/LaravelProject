<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Misconduct;

class EducatorController extends Controller
{
    public function loadDataTableMisconducts()
    {
        $lists = Misconduct::select('misconducts.id', 'students.name as student_name', 'content', 'time', 'minus', 'misconducts.deleted')->join('students', 'misconducts.student_id', 'students.id')->get();
        $data = "";
        foreach ($lists as $misconduct) {


            // HỖ TRỢ HIỂN THỊ HTML
            $deleted = ($misconduct->deleted == 0) ? "false" : "true";
            $isDeleted = ($misconduct->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isDeleted . "'>
                <td class='hidden'>" . $misconduct->id . "</td>
                <td>" . $misconduct->student_name . "</td>
                <td>" . $misconduct->content . "</td>
                <td>" . $misconduct->time . "</td>
                <td>" . $misconduct->minus . "</td>
                <td>" . $deleted . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function CRUDTableMisconducts()
    {
        header('Content-Type: application/json');

        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $misconduct = Misconduct::find($input['id']);

            $misconduct->content = $input['content'];
            $misconduct->time = $input['time'];
            $misconduct->minus = $input['minus'];
            $misconduct->deleted = $input['deleted'];

            $misconduct->save();
        } else if ($input['action'] == 'delete') {
            $misconduct = Misconduct::find($input['id']);
            $misconduct->deleted = 1;
            $misconduct->save();
        }
        echo json_encode($input);
    }
}
