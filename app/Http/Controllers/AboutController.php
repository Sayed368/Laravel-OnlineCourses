<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member_requests;
class AboutController extends Controller
{
    //
    public function create(Request $request){
        $data=$request->all();
        $aboutdata= new member_requests ;
        $aboutdata->name=$data['name']; 
        $aboutdata->email=$data['email'];
        $aboutdata->phone=$data['phone'];
        $aboutdata->skills=$data['skills'];
        $aboutdata->save();
        return redirect ('about');


         
    }
}