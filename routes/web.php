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
    return view('admin.feedbacks');
});

           
// test routs
Route::post('about-create',[AboutController::class,'create']);

Route::get('/', function () {
    return view('index');
});


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
// Route::get('/course-details', function () {
//     return view('courses.course-details');
// });

// Route::get('/courses', function () {
//     return view('courses.about');
// });

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

Route::post('/enroll', function () {
    $stud_cour=new StudentCourse;
    $stud_cour->student_id=request("student_id");
    $stud_cour->course_id=request("course_id");
    $stud_cour->save();
    return redirect()->back();
});

Route::get('/admin/feedback', function () {
    return view('admin.feedbacks');
});


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










// Route::get('/teacher-profile', function () {
//     return view('courses.teacher-profile');
// });

Route::get('/team', function () {
    return view('courses.team');
});
Route::get('/about', function () {
    return view('courses.about');
});

Route::get('/become-a-teacher', function () {
    return view('courses.become-a-teacher');
});



// Route::get('/player', function () {
//     return view('courses.video_player');
// });




// end test routs
//Route::get('/courses/{id}', 'App\Http\Controllers\VideoController@index');

Route::resource("courses",CourseController::class);
Route::resource("videos" , App\Http\Controllers\VideoController::class);
Route::resource("Viewcourses",ViewCourseController::class);
// Route::get('/admin', function () {
//     return view('admin.all_users');
// });

// Route::get('/admin/adduser', function () {
//     return view('admin.add_user');
// });

// Route::get('/admin/allusers', function () {
//     return view('admin.all_users');
// });

// // Route::get('/admin/allcourses', function () {
// //     return view('admin.all_courses');
// // });


// // Route::get('/admin/addcourse', function () {
// //     return view('admin.add_course');
// // });

// Route::get('/admin/allcategeries', function () {
//     return view('admin.all_categeries');
// Route::get('/admin/allcourses', function () {
//     return view('admin.all_courses');
// });

// Route::get('/admin/addcourse', function () {
//     return view('admin.add_course');
// });

// Route::get('/admin/allcategeries', function () {
//     return view('admin.all_categeries');
// });

// Route::get('/admin/addcategery', function () {
//     return view('admin.add_categeries');
// });

// Route::get('/admin/addcategery', function () {
//     return view('admin.add_categeries');
// });


// Route::get('/admin/edituser', function () {
//     return view('admin.edit_user');
// });

// // Route::get('/admin/editcourse', function () {
// //     return view('admin.edit_course');
// // });
// Route::get('/admin/edituser', function () {
//     return view('admin.edit_user');
// });

// Route::get('/admin/editcourse', function () {
//     return view('admin.edit_course');
// });

// Route::get('/admin/editcategery', function () {
//     return view('admin.edit_categeries');
// });

// Route::get('/admin/editcategery', function () {
//     return view('admin.edit_categeries');
// });


// Route::get('/admin/viewuser', function () {
//     return view('admin.viewuser');
// });

// // Route::get('/admin/viewcourse', function () {
// //     return view('admin.viewcourse');
// // });

// Route::get('/admin/viewuser', function () {
//     return view('admin.viewuser');
// });

// Route::get('/admin/viewcourse', function () {
//     return view('admin.viewcourse');
// });

// Route::get('/admin/viewcateg', function () {
//     return view('admin.viewcateg');
// });


Route::resource("categories",CategoryController::class);

// Route::resource("enroll",EnrollController::class);
// // resource routes

//         // Route::resource('user', Usercontroller::class);

//         // Route::resource('user', CourseController::class);

//         // Route::resource('user', CategoryController::class);

Route::resource('users', Usercontroller::class);


Route::get('/send-email/{id}', [MailController::class,'SendEmail'])->name("sendemail");

Route::post('/edituser/{id}',"App\Http\Controllers\UpdateStudentController@update");

Route::get('/edituser/{id}',"App\Http\Controllers\UpdateStudentController@edit");

Route::get('/admin/member_request', function () {
    return view('admin.view_member_request');
})->name("membersRequest");

Route::get('/admin/course/{id}/videos', function ($id) {
    
    $course=new Course;
    $course=$course->findorfail($id);
  //  $videos=$course->video;
    // dd($course);
    return view('admin.viewVideos',["course"=>$course]);
})->name("corsevideos");


Route::get('/course/{id}/videos', function ($id) {
    
    $course=new Course;
    $course=$course->findorfail($id);
    if(isset($course['video'][0]))
    {
        $video=$course['video'][0]['video_url'];
    }
    else{
        $video=0;
    }
    return view('courses.video_player',["course"=>$course,'video'=>$video]);
})->name("viewcourse");


Route::get('/course/videos/{id}', function ($id) {
    $video=new CourseVideo;
    $course=new Course;
    $video=$video->findorfail($id);
    $course=$course->findorfail($video['course_id']);
    $video=$video['video_url'];
    // dd($course);
    return view('courses.video_player',["course"=>$course,'video'=>$video]);
})->name("changevideo");



// Route::get('/admin/videos/create/{id}', function ($id) {
//     //dd($id);
//     $course=new Course;
//     $course=$course->findorfail($id);
//   //  $videos=$course->video;
//     dd($course);
//     return view('admin.addVideo',["course"=>$course]);
// })->name("createvideo");

// Route::get("/user/{user}/posts",'App\Http\Controllers\CourseController@addVideos')->name("videoadd");


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
