<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon\Carbon;
use App\Issue;
use App\Water;
use App\Electric;
use App\Room;
use App\Student;
use App\KitchenExpense;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Requests\IssueRequest;

class StudentController extends Controller
{
    function getIssue()
    {
        $student = Student::select('room_id')->where('email', Session('user')->email)->first();
        $room_id = $student->room_id;
        $issues = Issue::select('issues.id', 'students.name as student_name', 'rooms.name as room_name', 'content', 'issues.created_at')->join('students', 'students.id', '=', 'issues.student_id')->join('rooms', 'rooms.id', '=', 'issues.room_id')->where('issues.room_id', $room_id)->get();
        $rooms = Room::where('id', $room_id)->orWhere('name', 'Bếp')->get();
        return view('student.pages.issues', compact('issues', 'rooms'));
    }

    function getIndex()
    {
        return view('student.pages.index');
    }

    function getBill()
    {
        $today = Carbon::now()->format('Y-m');
        $stt = 1;
        $room_current = Student::select('room_id')->where('email', Session('user')->email)->first();
        $months1 = Water::select('time')->distinct('time')->get();
        $water = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $today)->get();
        $electric = Electric::select('electrics.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $today)->get();
        return view('student.pages.bill', compact('water', 'time', 'stt', 'electric', 'room_current', 'months1'));
    }

    function getWaterByMonth(Request $req)
    {
        $waters = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'waters.time', 'waters.old_number', 'waters.new_number', 'waters.price', 'waters.status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $req->month_water)->get();
        $room_current = Student::select('room_id')->where('email', Session('user')->email)->first();
        return response()->json([
            'waters' => $waters,
            'room_current' => $room_current
        ], 200);
    }

    function getElectricByMonth(Request $req)
    {
        $electric = Electric::select('electrics.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $req->month_electric)->get();
        $room_current = Student::select('room_id')->where('email', Session('user')->email)->first();
        return response()->json([
            'electric' => $electric,
            'room_current' => $room_current
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

    function getKitchenExpenses(){
        $today = Carbon::now()->format('Y-m');
        $months = KitchenExpense::select('time')->distinct('time')->get();
        $kitchenExpenses = KitchenExpense::select('id', 'time', 'item', 'quantity', 'price')->where('time','like', '%'.$today.'%')->get();
        return view('student.pages.kitchenExpense', compact('kitchenExpenses', 'months'));
    }

    function getKitchenExpensesByMonth(Request $req){
        $kitchenExpenses = KitchenExpense::select('id', 'time', 'item', 'quantity', 'price')->where('time','like', '%'.$req->month_kitchen.'%')->get();
        return response()->json([
            'kitchenExpenses' => $kitchenExpenses
        ], 200);
    }
}
