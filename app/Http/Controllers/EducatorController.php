<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Misconduct;
use App\Student;
use App\Issue;

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

    public function loadDataTableStudents()
    {
        $students = Student::all();
        $data = "";
        foreach ($students as $student) {

            // HỖ TRỢ HIỂN THỊ HTML
            $deleted = ($student->deleted == 0) ? "false" : "true";
            $isDeleted = ($student->deleted == 1) ? "background: #f44242; color: #FFFFFF;" : "";
            //
            $data .= "
            <tr style='" . $isDeleted . "'>
                <td class='hidden'>" . $student->id . "</td>
                <td>" . $student->name . "</td>
                <td>" . $student->email . "</td>
                <td>" . $student->birthday . "</td>
                <td>" . $student->gender . "</td>
                <td>" . $student->phone . "</td>
                <td>" . $deleted . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function CRUDTableStudents()
    {
        header('Content-Type: application/json');

        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $student = Student::find($input['id']);

            $student->name = $input['name'];
            $student->email = $input['email'];
            $student->birthday = $input['birthday'];
            $student->gender = $input['gender'];
            $student->phone = $input['phone'];
            $student->deleted = $input['deleted'];

            $student->save();
        } else if ($input['action'] == 'delete') {
            $student = Student::find($input['id']);
            $student->deleted = 1;
            $student->save();
        }
        echo json_encode($input);
    }

    public function loadDataTableIssues()
    {
        $issues = Issue::all();
        $data = "";
        foreach ($issues as $issue) {
            $data .= "
            <tr>
                <td class='hidden'>" . $issue->id . "</td>
                <td>" . $issue->content . "</td>
                <td>" . $issue->room_id . "</td>
                <td>" . $issue->student_id . "</td>
                <td>" . $issue->created_at . "</td>
            </tr>
            ";
        }
        return response()->json($data);
    }

    public function CRUDTableIssues()
    {
        header('Content-Type: application/json');

        $input = filter_input_array(INPUT_POST);

        if ($input['action'] == 'edit') {
            $student = Student::find($input['id']);

            $student->name = $input['name'];
            $student->email = $input['email'];
            $student->birthday = $input['birthday'];
            $student->gender = $input['gender'];
            $student->phone = $input['phone'];
            $student->deleted = $input['deleted'];

            $student->save();
        } else if ($input['action'] == 'delete') {
            $student = Student::find($input['id']);
            $student->deleted = 1;
            $student->save();
        }
        echo json_encode($input);
    }
}
