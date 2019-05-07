<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;

class StudentController extends Controller
{
    function getIndex(){
        $issues = Issue::select('issues.id','students.name','issues.room_id', 'content')->join('students', 'students.id', '=', 'issues.student_id')->where('issues.room_id', 7)->get();
        return view('student.pages.index', compact('issues'));
    }
}
