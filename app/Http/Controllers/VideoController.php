<?php

namespace App\Http\Controllers;
use App\Models\Course;

use App\Models\CourseVideo;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class VideoController extends Controller
{
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
      
    //  return view('admin.addVideo');
       
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
    public function edit(CourseVideo $courseVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseVideo $courseVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseVideo $courseVideo)
    {
        //
    }
}
