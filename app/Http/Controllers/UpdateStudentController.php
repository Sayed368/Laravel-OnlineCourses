<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UpdateStudentController extends Controller

{
    function edit($id){
        $user=new User;
        $users=$user->find($id);
    
         return view('courses.update_student',["data"=>$user]); 
    }
   
    function update($id){
        // request->validate([
        //     "name"=>"required|min:3", 
            
        //     "email"=>"required",
        //     "password"=>"min:6|required|confirmed",
        //     "password_confirmation"=>"required",
        //     ]);
    $user=new User;
    $users=$user->find($id);
    $users->name=request("name");
    $users->password=request("password");

    $users->email=request("email");
    $users->phone=request("phone");
    $users->address=request("address");
    $users->dob=request("dob");
    
   
    $users->save();
    return redirect("/profile"); 
}
}

