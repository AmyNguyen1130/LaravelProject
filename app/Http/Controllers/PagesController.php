<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function getIndex()
    {
        if (Auth::check()) {
            return redirect(Auth::user()->role);
        }
        return view('index');
    }
}
