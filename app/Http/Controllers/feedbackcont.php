<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackcont extends Controller
{
    function crep(){
        $feedback=new feedback;
        $feedback->name=request("name");
        $feedback->name=request("email");
        $feedback->name=request("subject");
        $feedback->name=request("comments");
        $feedback->save();
        return redirect("courses.contact");  
    }
}
