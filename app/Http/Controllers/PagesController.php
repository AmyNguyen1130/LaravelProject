<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // PAGES
    public function getIndex()
    {
        return view('index');
    }
}
