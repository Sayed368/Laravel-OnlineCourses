<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfilePictureController extends Controller
{
    //
  
   
    function update(Request $request , $id, User $user){
        $request->validate([
    
            "profile_photo_path"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
   
           ]);
       
            if($request->hasFile('profile_photo_path')) {
                $image = $request->file('profile_photo_path');
                $filename =rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('userimg/'), $filename);
                $filename='userimg/'.$filename;
               
            }
    $user=new User;
   
    
    $users=$user->find($id);
    $users->update([
      
       
        "profile_photo_path"=>$filename,
     
       
             ]);  
     $users->save(); 
    return redirect("/profile"); 
}
}


