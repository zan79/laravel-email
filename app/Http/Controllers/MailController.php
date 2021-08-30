<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showEmailForm(){
        return view('email-form');
    }
    public function sendMail(Request $request){
        $request->validate([
            'email' => 'email|required',
            'subject' => 'string|required',
            'content' => 'string|required'
        ]);

        Mail::send('mail', ['content'=>$request->content], function($mail) use ($request) {
            $mail->to($request->email);
            $mail->subject($request->subject);
            $mail->from('dummyqwerty34@gmail.com');
        });

        return "<h3>Email Sent.</h3>";
    }
}
