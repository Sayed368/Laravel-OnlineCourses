<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\MemberRequest;

class MailController extends Controller
{

    
   public function sendEmail()
   {
        // $member=new MemberRequest;
        // $member=MemberRequest::all();
        // $member=$member->findorfail($id);

        $email="sayed.abdallah1998@gmail.com";

        $details=[
            'title'=>"Hello ITI Online Courses",
            'body'=>"this is test mail"
        ];
        Mail::to($email)->send( new SendEmail($details));

        return "email sent";
    }
}
