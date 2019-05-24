<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

}
