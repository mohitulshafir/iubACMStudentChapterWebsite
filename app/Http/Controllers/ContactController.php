<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

use App\Models\Member;

use Notification;

use App\Notifications\SendEmailNotification;

class ContactController extends Controller
{
    public function contact()
    {
        return view('welcome');
    }
    
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        
        Mail::to('iubacmstudentchapter@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }

    
}
