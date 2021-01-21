<?php

namespace App\Http\Controllers;

use App\Models\Course;
 use App\Models\User;
 use App\Models\CourseVideo;
 use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use session;

class CourseController extends Controller
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
        
        $cat=new  Category;
        $cats=$cat->all();
        $courses= Course::paginate(5);
       
        return view('admin.all_courses',["courses"=>$courses,"cats"=>$cats]);
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //  dd($request->all());
     
        $request->validate([
            "name"=>"required", 
            "description"=>"required",
            "duration"=>"required",
            "content"=>"required",
            "image"=> "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
           
            
        ]);

   
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('courseimg/'), $filename);
            $filename='courseimg/'.$filename;
        }
       
    
        $course=Course::create([
        "name"=>$request["name"],
        "description"=>$request["description"],
        "duration"=>$request["duration"],
        "content"=>$request["content"],
        "instructor_id"=>$request["instructor"],
        "image"=>$filename
       ]);


    //    $files = $request->file('video_url');
    //    if($files){
    //    foreach ($files as $file){
    //     $video=new CourseVideo();
    //        $videoname = rand().'.'.$file->getClientOriginalExtension();
    //        $file->move(public_path('coursevideo/'), $videoname);
    //        $video->video_url=$videoname;
    //        $course->video()->save($video);
    //    }
     //  }
       $course->Category()->attach($request["category"]);
        //     $video=new CourseVideo();
        //    $video->video_url=$request['video_url'];
        //    $course->video()->save($video);

       return redirect(route("courses.index"))->with('Success', 'Course Inserted Successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view("admin.viewcourse",["course"=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("admin.edit_course",["course"=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

      
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename =rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('courseimg/'), $filename);
            $filename='courseimg/'.$filename;
        }
      
        $course->update([
            "name"=>$request["name"],
            "description"=>$request["description"],
            "duration"=>$request["duration"],
            "content"=>$request["content"],
           
            "image"=>$filename
           
        ]);

        if($request["category"])
        {
            $course->Category()->detach();
        
            $course->Category()->attach($request["category"]);
        }
        
        return redirect(route("courses.index",["course"=>$course]));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route("courses.index"));
    }
}
