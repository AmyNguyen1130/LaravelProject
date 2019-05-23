<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Issue;
use App\Water;
use App\Electric;
use App\room;
use App\Student;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Requests\IssueRequest;

class StudentController extends Controller
{
    function getIssue()
    {
        $student = Student::select('room_id')->where('email', Session('user')->email)->first();
        $room_id = $student->room_id;
        $issues = Issue::select('issues.id', 'students.name as student_name', 'rooms.name as room_name', 'content')->join('students', 'students.id', '=', 'issues.student_id')->join('rooms', 'rooms.id', '=', 'issues.room_id')->where('issues.room_id', $room_id)->get();
        $rooms = Room::select('id', 'name')->get();
        return view('student.pages.issues', compact('issues', 'rooms'));
    }

    function getIndex()
    {
        return view('student.pages.index');
    }

    function getBill()
    {
        $time = Carbon::now()->format('Y-m');
        $stt = 1;
        $room_current = Student::select('room_id')->where('email', Session('user')->email)->first();
        $months1 = Water::select('time')->distinct('time')->get();
        $water = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $time)->get();
        $electric = Electric::select('electrics.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $time)->get();
        return view('student.pages.bill', compact('water', 'time', 'stt', 'electric', 'room_current', 'months1'));
    }

    function getWaterByMonth(Request $req)
    {
        $waters = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'waters.time', 'waters.old_number', 'waters.new_number', 'waters.price', 'waters.status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $req->month_water)->get();
        // $electric = Electric::select('electrics.id', 'rooms.name as room_name','rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', '2019-5')->get();
        // $months1 = Water::select('time')->distinct('time')->get();$room_current = Student::select('room_id')->where('email',Session('user')->email)->first();
        $room_current = Student::select('room_id')->where('email', Session('user')->email)->first();
        $stt = 1;
        // $status = 1;
        // $months1 = Water::select('time')->distinct('time')->get();
        // return view('student.pages.bill', compact('water', 'stt', 'electric', 'room_current', 'months1', 'status'));
        $data = "";
        foreach ($waters as $water) {
            $data += "
            
            // <tr style='background:" . ($room_current->room_id == $water->room_id) ? "#ffff00" : "" . "'>
            //     <td>" . $stt++ . "</td>
            //     <td>" . $water->room_name . "</td>
            //     <td>" . $water->time . "</td>
            //     <td>" . $water->old_number . "</td>
            //     <td>" . $water->new_number . "</td>
            //     <td>" . number_format($water->price) . "</td>
            //     <td>" . ($water->status == 1) ? "Đã Nộp" : "Chưa Nộp" . "</td>
            // </tr>

            ";
        }
        //return view('student/getWaterByMonth', compact('data'));
        return response()->json([
            $data
        ], 200);
    }

    function sendReport(IssueRequest $req)
    {
        $issue = new Issue();
        $student = Student::where('email', Session('user')->email)->first();
        $issue->content = $req->content;
        $issue->room_id = $req->room;
        $issue->student_id = $student->id;
        $issue->save();
        return redirect()->route('student.pages.issue')->with('success', 'Gửi báo cáo hư hỏng thành công');
    }
}
