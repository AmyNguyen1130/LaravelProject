<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        $listEmail = array(
            'tai.tran@student.passerellesnumeriques.org',
            'ly.doan@student.passerellesnumeriques.org',
            'ngoctai.dev@student.passerellesnumeriques.org'
        );

        foreach ($listEmail as $email) {
            // echo $email;
            Mail::to($email)->send(new SendMail($data));
        }

        return back()->with('success', 'Thanks for contacting us!');
    }
}
