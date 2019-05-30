<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Issue;
use App\Water;
use App\Electric;
use App\Room;
use App\Student;
use App\KitchenExpense;
use App\Misconduct;
use App\Http\Requests\IssueRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Student as StudentResource;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new StudentResource(Student::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getIssue()
    {
        $student = Student::select('room_id')->where('email', Auth::user()->email)->first();
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
        $today = Carbon::now();
        $last_month = $today->year . '-' . ((($today->month - 1) > 9) ? ($today->month - 1) : ("0" . ($today->month - 1)));
        $stt = 1;
        $room_current = Student::select('room_id')->where('email', Auth::user()->email)->first();
        $water = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $last_month)->get();
        $electric = Electric::select('electrics.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $last_month)->get();
        return view('student.pages.bill', compact('water', 'stt', 'electric', 'room_current'));
    }

    function getWaterByMonth(Request $req)
    {
        $time = $req->year_water . '-' . $req->month_water;
        $waters = Water::select('waters.id', 'rooms.name as room_name', 'rooms.id as room_id', 'waters.time', 'waters.old_number', 'waters.new_number', 'waters.price', 'waters.status')->join('rooms', 'rooms.id', '=', 'waters.room_id')->where('waters.time', $time)->get();
        $room_current = Student::select('room_id')->where('email', Auth::user()->email)->first();
        return response()->json([
            'waters' => $waters,
            'room_current' => $room_current
        ], 200);
    }

    function getElectricByMonth(Request $req)
    {
        $time = $req->year_electric . '-' . $req->month_electric;
        $electric = Electric::select('electrics.id', 'rooms.name as room_name', 'rooms.id as room_id', 'time', 'old_number', 'new_number', 'price', 'status')->join('rooms', 'rooms.id', '=', 'electrics.room_id')->where('electrics.time', $time)->get();
        $room_current = Student::select('room_id')->where('email', Auth::user()->email)->first();
        return response()->json([
            'electric' => $electric,
            'room_current' => $room_current
        ], 200);
    }

    function sendReport(IssueRequest $req)
    {
        $issue = new Issue();
        $student = Student::where('email', Auth::user()->email)->first();
        $issue->content = $req->content;
        $issue->room_id = $req->room;
        $issue->student_id = $student->id;
        $issue->save();
        return redirect()->route('student.pages.issue')->with('success', 'Gửi báo cáo hư hỏng thành công');
    }

    function getKitchenExpenses()
    {
        $today = Carbon::now();
        $last_month = $today->year . '-' . ((($today->month - 1) > 9) ? ($today->month - 1) : ("0" . ($today->month - 1)));
        $sum = 0;
        $months = KitchenExpense::select('time')->distinct('time')->get();
        $kitchenExpenses = KitchenExpense::select('id', 'time', 'item', 'quantity', 'price')->where('time', 'like', '%' . $last_month . '%')->get();
        foreach ($kitchenExpenses as $value) {
            $sum += $value->price;
        }
        return view('student.pages.kitchenExpense', compact('kitchenExpenses', 'months', 'sum'));
    }

    function getKitchenExpensesByMonth(Request $req)
    {
        $time = $req->year_kitchen . '-' . $req->month_kitchen;
        $sum = 0;
        $kitchenExpenses = KitchenExpense::select('id', 'time', 'item', 'quantity', 'price')->where('time', 'like', '%' . $time . '%')->get();
        foreach ($kitchenExpenses as $value) {
            $sum += $value->price;
        }
        return response()->json([
            'kitchenExpenses' => $kitchenExpenses,
            'sum' => $sum
        ], 200);
    }

    function getMisconduct()
    {
        $today = Carbon::now();
        $last_month = $today->year . '-' . ((($today->month - 1) > 9) ? ($today->month - 1) : ("0" . ($today->month - 1)));
        $months = Misconduct::select('time')->distinct('time')->get();
        $misconducts = Misconduct::select('id', 'student_id', 'content', 'time', 'minus')->where('time', 'like', '%' . $last_month . '%')->where('student_id', Auth::user()->id)->get();
        $sum = 0;
        foreach ($misconducts as $value) {
            $sum += $value->minus;
        }
        return view('student.pages.misconduct', compact('misconducts', 'months', 'sum'));
    }

    function getMisconductByMonth(Request $req)
    {
        $time = $req->year_misconduct . '-' . $req->month_misconduct;
        $misconducts = Misconduct::select('id', 'student_id', 'content', 'time', 'minus')->where('time', 'like',  $time . '%')->get();
        $sum = 0;
        foreach ($misconducts as $value) {
            $sum += $value->minus;
        }
        return response()->json([
            'misconducts' => $misconducts,
            'sum' => $sum,
        ], 200);
    }
}
