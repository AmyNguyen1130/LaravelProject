<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Issue;
use App\Water;
use App\Electric;
use App\Student;

class StudentController extends Controller
{
    function getIssue()
    {
        $issues = Issue::select('issues.id', 'students.name as student_name', 'rooms.name as room_name', 'content')->join('students', 'students.id', '=', 'issues.student_id')->join('rooms', 'rooms.id', '=', 'issues.room_id')->where('issues.room_id', 7)->get();
        return view('student.pages.issues', compact('issues'));
    }

    function getIndex()
    {
        return view('student.pages.index');
    }

    function getBill()
    {
        $today = Carbon::now();
        $today->month; // retrieve the month
        $today->year;
        $time =$today->year."-".$today->month;
        $stt = 1;
        $room_current = Student::select('room_id')->where('email','tai.tran@student.passerellesnumeriques.org')->first();
        $months1 = Water::select('time')->distinct('time')->get();
        $water = Water::select('waters.id', 'rooms.name as room_name','rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $time)->get();
        $electric = Electric::select('electrics.id', 'rooms.name as room_name','rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $time)->get();
        return view('student.pages.bill', compact('water', 'time', 'stt', 'electric', 'room_current', 'months1'));
    }
}
