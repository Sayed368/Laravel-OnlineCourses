<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Http\Controllers\Redirect;

use App\Models\CourseVideo;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class VideoController extends Controller
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
       
        return view("admin.viewVideos");
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(  )
    {
    //   dd($course);
        return view('admin.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        $request->validate([
            "video_name"=>"required", 
            "course"=>"required",
            "video_url"=>"required"
           
            
        ]);
        
       
        
        

        if(isset($request["course"])&&isset($request["video_url"])&&isset($request["video_name"]))
        {
            
            $url=$request["video_url"];
            for ($i = 0; $i < sizeof($url) ; $i++) {
                $CourseVideo=CourseVideo::create([
                    "course_id"=>$request["course"],
                    "video_url"=>$request["video_url"][$i],
                    "name"=>$request["video_name"][$i],
                    
                ]);
                
            }
            // dd($CourseVideo);

            
        }

        

        // $course=new Course;
        // $course=$course->findorfail($id);
    //     $files = $request->file('video_url');
        
    //     if($files){
    //     foreach ($files as $file){
    //      $video=new CourseVideo();
    //         $videoname = rand().'.'.$file->getClientOriginalExtension();
    //         $file->move(public_path('coursevideo/'), $videoname);
    //         $videourl=$videoname;
    //       $video->video_url=$videourl;
    //      //   $videocourse->course()->save($videourl);
    //     }
    //     }
    //  // dd($videourl);
    //    $videocourse=CourseVideo::create([
    //        "video_url"=>$videourl,
    //        "course_id"=>54
    //    ]);
    //  //dd($videocourse);
      
     return view('admin.addVideo');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function show(CourseVideo $courseVideo)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $video=new CourseVideo;
        $video=$video->findorfail($id);
        // dd($item);
        return view("admin.editvideo",["video"=>$video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseVideo $video)
    {
       // dd($video);
       $request->validate([
        "video_name"=>"required", 
        "video_url"=>"required"
       
        
    ]);
    $video->update([
        "name"=>$request["video_name"],
        "video_url"=>$request["video_url"],
    ]);
   
   return redirect(route("courses.index"));
  
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=new CourseVideo;
        $video=$video->findorfail($id);
        $video->delete();
     return redirect(route("courses.index"));
    
    
    }
}
