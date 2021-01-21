<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
class UpdateStudentController extends Controller

{
    function edit($id){
        $user=new User;
        $users=$user->find($id);
    
         return view('courses.update_student',["data"=>$user]); 
    }
   
    function update(Request $request , $id, User $user){
        $request->validate([
            "name"=>"required|min:3", 
            
            "email"=>"required",
            "password"=>"min:6|required|confirmed",
            "password_confirmation"=>"required",
            ]);
            if($request->hasFile('profile_photo_path')) {
                $image = $request->file('profile_photo_path');
                $filename =rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('userimg/'), $filename);
                $filename='userimg/'.$filename;
               
            }
    $user=new User;
    // $users=$user->find($id);
    // $users->name=request("name");
    // $users->password=request("password");

    // $users->email=request("email");
    // $users->phone=request("phone");
    // $users->address=request("address");
    // $users->gender=request("gender");
    // $users->dob=request("dob");
    // $users->profile_photo_path=request("profile_photo_path")=>$filename;
   
    
    $users=$user->find($id);
    $users->update([
        "name"=>$request["name"],
        "email"=>$request["email"],
        "password"=>Hash::make ($request["password"]),
        "gender"=>$request["gender"],
        "address"=>$request["address"],
        "phone"=>$request["phone"],
        "password_confirmation"=>$request["password_confirmation"],
        "profile_photo_path"=>$filename,
        
        "dob"=>$request["dob"],
       
             ]);  
     $users->save(); 
    return redirect("/profile"); 
}
}

