<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UpdatePasswordController extends Controller
{
    //
    function editpass($id){
        $user=new User;
        $users=$user->find($id);
    
         return view('courses.update_password',["data"=>$user]); 
    }
   
    function update(Request $request , $id, User $user){
        $request->validate([
         
           
            "password"=>"min:6|required|confirmed",
            "password_confirmation"=>"required",
            ]);
           
    $user=new User;
    $users=$user->find($id);
    $users->update([
        
        "password"=>Hash::make ($request["password"]),

             ]);  
     $users->save(); 
    return redirect("/profile"); 
}
}
