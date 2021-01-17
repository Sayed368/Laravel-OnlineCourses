<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
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




// test routs

Route::get('/', function () {
    return view('index');
});


Route::get('/course', function () {
    return view('courses.course');
});


Route::get('/course-details', function () {
    return view('courses.course-details');
});

// Route::get('/courses', function () {
//     return view('courses.about');
// });

Route::get('/blog', function () {
    return view('courses.blog');
});
Route::get('/contact', function () {
    return view('courses.contact');
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


Route::get('/teacher-profile', function () {
    return view('courses.teacher-profile');
});

Route::get('/team', function () {
    return view('courses.team');
});


Route::get('/become-a-teacher', function () {
    return view('courses.become-a-teacher');
});



Route::get('/player', function () {
    return view('courses.video_player');
});

// end test routs
Route::resource("courses",CourseController::class);


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

// // resource routes

//         // Route::resource('user', Usercontroller::class);

//         // Route::resource('user', CourseController::class);

//         // Route::resource('user', CategoryController::class);

         Route::resource('users', Usercontroller::class);












// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
