<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\MemberRequest;

class MailController extends Controller
{

    
   public function sendEmail($id)
   {
        $member=new MemberRequest;
        $member=MemberRequest::all();
        $member=$member->find($id);

        // dd($member['email']);
        $email=$member['email'];

        $details=[
            'title'=>"Hello ITI Online Courses",
            'body'=>$member['name']
        ];
        Mail::to($email)->send( new SendEmail($details));

        return redirect(route("membersRequest"));
    }
}
