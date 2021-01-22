<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
class UpdateStudentController extends Controller

{
    public function __construct(){
           
        $this->middleware("auth");
    }
    function edit($id){
        $user=new User;
        $users=$user->find($id);
    
         return view('courses.update_student',["data"=>$user]); 
    }
   
    function update(Request $request , $id, User $user){
        $request->validate([
            "name"=>"|min:3", 
            // "profile_photo_path"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"

           
           
            ]);
            // if($request->hasFile('profile_photo_path')) {
            //     $image = $request->file('profile_photo_path');
            //     $filename =rand() . '.' . $image->getClientOriginalExtension();
            //     $image->move(public_path('userimg/'), $filename);
            //     $filename='userimg/'.$filename;
               
            // }
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
        
        "address"=>$request["address"],
        "phone"=>$request["phone"],
       
        // "profile_photo_path"=>$filename,
        
        "dob"=>$request["dob"],
       
             ]);  
     $users->save(); 
    return redirect("/profile"); 
}
}

