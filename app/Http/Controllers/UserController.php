<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function __construct(){
           
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(5);

        return view("admin.all_users",["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.add_user");
         //dump($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return view("admin.all_users");
         //dd($request);
         $request->validate([
            "name"=>"required|min:3", 
            
            "email"=>"required",
            "password"=>"min:6|required|confirmed",
            "role"=>"required",
            "gender"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "university"=>"required",
            "password_confirmation"=>"required",
             "profile_photo_path"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"



            ]);
            if($request->hasFile('profile_photo_path')) {
                $image = $request->file('profile_photo_path');
                $filename =rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('userimg/'), $filename);
                $filename='userimg/'.$filename;
               
            }
         User::create([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "password"=>Hash::make ($request["password"]),
            "role"=>$request["role"],
            "gender"=>$request["gender"],
            "address"=>$request["address"],
            "phone"=>$request["phone"],
            "profile_photo_path"=>$filename,
            "specialist"=>$request["specialist"],
            "dob"=>$request["dob"],
            "university"=>$request["university"],
            "description"=>$request["description"],
        ]);
        // if ($request->hasFile('profile_photo_path')){
        //     $file=$request->file('profile_photo_path');
        //     $extension=$file->getClientOriginalExtension();
        //     $filename= time() . '.' . $extension;
        //     //->storeAs('avatars',$user.'/'.$profile_photo_path);
        //     //$user->update(['profile_photo_path'=>$profile_photo_path]);
        //     $file->move('usersimg', $filename);

        // } 
        

        return redirect(route("users.index")); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("admin.viewuser",["user"=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("admin.edit_user",["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            "name"=>"required|min:3", 
            
            "email"=>"required",
            "password"=>"min:6|required|confirmed",
            "role"=>"required",
            "gender"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "university"=>"required",
            "password_confirmation"=>"required",
             "profile_photo_path"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"



            ]);
        if($request->hasFile('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('userimg/'), $filename);
            $filename='userimg/'.$filename;
           
        }
        $user->update([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "password"=>Hash::make ($request["password"]),
            "role"=>$request["role"],
            "gender"=>$request["gender"],
            "address"=>$request["address"],
            "phone"=>$request["phone"],
            "university"=>$request["university"],
            "password_confirmation"=>$request["password_confirmation"],
            "profile_photo_path"=>$filename,
            "specialist"=>$request["specialist"],
            "dob"=>$request["dob"],
            "university"=>$request["university"],
            "description"=>$request["description"],            ]);
            return redirect(route("users.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect(route("users.index"));
    }
}
