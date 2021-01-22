@extends('layouts.pages_layout')

@section('intro_text')
<h1>{{ Auth::user()->name }} Profile</h1>
@endsection

@section('main')


<?php  
use App\Models\StudentCourse;
use App\Models\Course;
$course=new Course ;
$courses=$course->all(); 
$stud= new StudentCourse;
$studs=$stud->all();
?>






<section class="teachers_profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 teacher-detail-left">
                <div class="teacher_info_wrapper">
                    <div class="teacger-image">
                        
                    <img src="{{ Auth::user()->profile_photo_path }}" alt="" class="img-fluid">
                    @if(Auth::user()->profile_photo_path==null)
                    <img src="{{asset('userimg/user.png')}} " alt="" class="img-fluid">
                    <form action ="{{ action('App\Http\Controllers\UpdateProfilePictureController@update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                   
                            <input type="hidden" class="form-control" name="name"  
                            value="{{ Auth::user()->name }}" >       
                <input type="file" class="form-control" id="img" name="profile_photo_path" >
                <div style="padding-left:348px; padding-top:25px">
                <button type="submit" class="btn btn-primary pull-right" >add a picture</button>
                </div>
                </from>
                @endif
                    </div>
                    <div class="social_wraper">
                        <ul class="social-items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div> 
                    
                </div>
            </div><!-- Ends: .teacher-detail-left -->
            <div class="col-sm-7 teacher-detail-right">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="teacher-info">
                        <button type="submit" class="btn btn-info" href = "/edituser/{{Auth::user()->id}}"><a style="text-decoration: none ; color: white;"href = "/edituser/{{Auth::user()->id}}">update Info<a></button>
                        <button type="submit" class="btn btn-warning" href = "/editpassword/{{Auth::user()->id}}"><a style="text-decoration: none ; color: white;"href = "/editpassword/{{Auth::user()->id}}">update password<a></button>
<br><br>
                            <ul class="list-unstyled">
                           
                            <li>
                                    <h3>Name :</h3>
                                    <span> {{ Auth::user()->name }}</span>
                                </li>
                                <li>
                                    <h3>Email :</h3>
                                    <span> {{ Auth::user()->email }}</span>
                                </li>
                                <li>
                                    <h3>Phone :</h3>
                                    <span> {{ Auth::user()->phone }}</span>
                                </li>
                                <li>
                                    <h3>Address :</h3>
                                    <span>{{ Auth::user()->address }}</span>
                                </li>
                                <li>
                                    <h3>Data of birthday :</h3>
                                    <span>{{ Auth::user()->dob }}</span>
                                </li>
                                <li>
                                    <h3>gender :</h3>
                                    <span>{{ Auth::user()->gender }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="courses_tab_wrapper">  
                            <div class="courses_details_nav_tabs">     
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab"><i class="flaticon-info-sign"></i>About Student</a></li>
                        
                                </ul>
                            </div>   

                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                    <p>{{ Auth::user()->description }}</p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-right -->
        </div>
    </div>
</section><!-- Ends: .teacher-details-wrapper -->






<!--Start Courses Area Section-->
<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>My Courses</h2>
                  
                </div><!-- ends: .section-header -->
            </div>
            @foreach ($courses as $course)
            @foreach ($studs as $stud)
            @if(Auth::user()->id == $stud['student_id'] && $stud['course_id']==$course['id'])
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{asset($course['image'])}}" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">Free</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="{{route('Viewcourses.show',$course['id'])}}">{{$course['name']}}</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">{{$course['instructor']['name']}}</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> {{$course['duration']}} Days</li>
                                <li><i class="fa fa-comment"></i>60 Students</li>
                            </ul>
                            <a href="{{route('Viewcourses.show',$course['id'])}}" class="cart_btn">View Details</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->   
            @endif 
            @endforeach   
            @endforeach                                        
        </div>

    </div>
</section> <!-- ./ End Courses Area section -->




    
@endsection
