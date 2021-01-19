@extends('layouts.pages_layout')

@section('intro_text')
<h1>{{ Auth::user()->name }} Profile</h1>
@endsection

@section('main')


<?php  
use App\Models\Course;
$course=new Course ;
$courses=$course->all();
?>


<section class="teachers_profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 teacher-detail-left">
                <div class="teacher_info_wrapper">
                    <div class="teacger-image">
                        <img src="{{asset('userimg/user.png')}}" alt="" class="img-fluid">
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
                            <ul class="list-unstyled">
                            <li style="padding-left:270px">
                            <button type="button" class="btn btn-info">update Info</button>
                                </li>
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
                    <h2>Courses</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            @foreach ($courses->slice(2,5) as $course)
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
                            <h3><a href="#">{{$course['name']}}</a></h3>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> {{$course['duration']}} Days</li>
                                <li><i class="fa fa-comment"></i>60 Students</li>
                            </ul>
                            <a href="../Viewcourses/{{$course['id']}}" class="cart_btn">View details</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->       
            @endforeach                                        
        </div>

    </div>
</section> <!-- ./ End Courses Area section -->




    
@endsection
