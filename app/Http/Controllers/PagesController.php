<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Room;
use App\KitchenExpense;
use App\Electric;
use App\Misconduct;
use App\Water;
use App\Educator;
use App\Classes;
use App\User;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    // PAGES
    public function getIndex()
    {
        return view('index');
    }
    // ADMIN PAGES

    // TABLE users
    public function getTableUsers()
    {
        $users = User::all();
        return view('admin.tables.users', compact('users'));
    }

    public function getEducatorPage()
    {
        $rooms = Room::all();
        $classes = Classes::all();
        $students = Student::all();
        return view('educator.layout.educator_homepage', compact('rooms', 'students', 'classes'));
    }

    public function getKitchenPage()
    {
        $kitchen_expenses = KitchenExpense::all();
        return view('educator.layout.kitchen', compact('kitchen_expenses'));
    }

    public function getWaterElectrics(){
        $rooms = Room::all();
        $electrics = Electric::all();
        $waters = Water::all();
        return view('educator.layout.water_electrics', compact('rooms', 'electrics', 'waters'));
    }

    public function getMisconduct(){
        $misconducts = Misconduct::all();
        $classes = Classes::all();
        $students = Student::all();
        return view('educator.layout.misconduct', compact('misconducts', 'students', 'classes'));
    }
}
