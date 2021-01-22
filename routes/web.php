<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;
use App\Models\feedback;
use App\Models\Category;
use App\Models\Course;
use App\Models\CategoryCourse;
use App\Models\CourseVideo;
use App\Models\StudentCourse;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\UpdateStudentController;
use App\Http\Controllers\MailController;
use App\Mail\SendEmail;

use App\Http\Middleware;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.index');
})->middleware("auth")->middleware("is_admin");

           
// test routs
Route::post('about-create',[AboutController::class,'create']);

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/course', function () {
    return view('courses.course');
});

    Route::get('/profile', function () {
        return view('courses.student_profile');
    })->middleware('auth');
    


Route::get('/search', function () {
        $serchtxt=$_GET['query'];
        $courses=Course::where('name','LIKE','%'. $serchtxt.'%')->get();
        return view('courses.search',["data"=>$courses]);
       
    });
 
Route::get('/blog', function () {
    return view('courses.blog');
});


Route::get('/contact', function () {
    return view('courses.contact');
});




Route::post('/contact', function () {
    $feedback=new feedback;
    $feedback->name=request("name");
    $feedback->email=request("email");
    $feedback->subject=request("subject");
    $feedback->comments=request("comments");
    $feedback->save();
    return redirect()->back()->with('message', 'Thanks for your Feedback!');
});
 

Route::any('course/{id}/enroll', function ($course) {
    $enrolled = new StudentCourse;
    $enrolled=$enrolled->all();
    $user_id=Auth::id();
    $enrolled = $enrolled->where('student_id', '=', $user_id)->where('course_id','=',$course);
    // dd(!sizeof($enrolled));

    if(!sizeof($enrolled))
    {
        $stud_cour=new StudentCourse;
         $stud_cour->student_id=$user_id;
         $stud_cour->course_id=$course;
         $stud_cour->save();

    }
    
    return redirect(route('viewcourse', $course));
})->name('enroll')->middleware("auth");









Route::get('/admin/feedback', function () {
    return view('admin.feedbacks');
})->name('feedback.index')->middleware("auth")->middleware("is_admin");


Route::get('/event', function () {
    return view('courses.event');
});


Route::get('/event-details', function () {
    return view('courses.event-details');
});



Route::get('/forgot-password', function () {
    return view('courses.forgot-password');
});


Route::get('/teacher-profile/{id}', function ($id) {
    $post=new user;
    $fpost=$post->find($id);
    return view('courses.teacher-profile',["data"=>$fpost]);
});


Route::get('/category/{id}/courses', function ($id) {

    $category=new Category;
    $category=$category->findorfail($id);
    
    $courses=$category->course;
    // dd($courses);
    
    return view('courses.related-courses',["courses"=>$courses]);
})->name("categorycourses.show");


 

Route::get('/team', function () {
    return view('courses.team');
});
Route::get('/about', function () {
    return view('courses.about');
});

Route::get('/become-a-teacher', function () {
    return view('courses.become-a-teacher');
});

Route::resource("admin/courses",CourseController::class);
Route::resource("admin/videos" , App\Http\Controllers\VideoController::class);
Route::resource("Viewcourses",ViewCourseController::class);
 

Route::resource("admin/categories",CategoryController::class);



Route::resource('admin/users', Usercontroller::class);


Route::get('/send-email/{id}', [MailController::class,'SendEmail'])->name("sendemail");

Route::post('/edituser/{id}',"App\Http\Controllers\UpdateStudentController@update");

Route::get('/edituser/{id}',"App\Http\Controllers\UpdateStudentController@edit");

Route::post('/editpassword/{id}',"App\Http\Controllers\UpdatePasswordController@update");
Route::post('/editpicture/{id}',"App\Http\Controllers\UpdateProfilePictureController@update");

Route::get('/editpassword/{id}',"App\Http\Controllers\UpdatePasswordController@editpass");

Route::get('/admin/member_request', function () {
    return view('admin.view_member_request');
})->name("membersRequest")->middleware('auth');


Route::get('/admin/course/{id}/videos', function ($id) {
    
    $course=new Course;
    $course=$course->findorfail($id);
  //  $videos=$course->video;
    // dd($course);
    return view('admin.viewVideos',["course"=>$course]);
})->name("corsevideos")->middleware("auth");


Route::get('/course/{id}/videos', function ($id) {
    

    $course=new Course;
    $course=$course->findorfail($id);

    

    if(sizeof($course['video']))
    {
        
        $next = CourseVideo::where('id', '>', $course['video'][0]['id'])->where('course_id','=',$course['id'])->orderBy('id','asc')->first();
        $previous = CourseVideo::where('id', '<', $course['video'][0]['id'])->where('course_id','=',$course['id'])->orderBy('id','desc')->first();
    
        $video=$course['video'][0]['video_url'];
        $video_id=$course['video'][0]['id'];
        // dd($video);
    }
    else{
        
        $video=0;
        $next=0;
        $previous =0;
        $video_id=0;
        // dd($next);
    }



    
    return view('courses.video_player',["course"=>$course,'video'=>$video,'next'=>$next,'previous'=>$previous]);
})->name("viewcourse")->middleware("auth");



Route::get('/course/{course}/video/{id}', function ($course_id,$id) {

    
    $video=new CourseVideo;
    $course=new Course;
    $video=$video->findorfail($id);
    $course=$course->findorfail($video['course_id']);
    
    $next = CourseVideo::where('id', '>', $id)->where('course_id','=',$course['id'])->orderBy('id','asc')->first();
    $previous = CourseVideo::where('id', '<', $id)->where('course_id','=',$course['id'])->orderBy('id','desc')->first();
    $video=$video['video_url'];
    // dd($next);
    



    return view('courses.video_player',["course"=>$course,'video'=>$video,'next'=>$next,'previous'=>$previous]);
})->name("changevideo")->middleware("auth");





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


