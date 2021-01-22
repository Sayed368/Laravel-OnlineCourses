@extends('layouts.pages_layout')

@section('intro_text')
<h1>Courses Details</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="">Course</a>
    <a href="#" title="" class="active">Course Details</a>
</div>
    
@endsection

@section('main')




<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <h2>{{$course['name']}}</h2>
                        <div class="review-option">
                            <div class="teacher-info single_items single_items_shape">
                                <img src="{{asset($course['instructor']['profile_photo_path'])}}" alt="" class="img-fluid">
                                <div class="teacher-name">
                                    <span>Teacher</span>
                                    <span>{{$course['instructor']['name']}}</span>
                                </div>
                            </div>
                            <div class="review-rank single_items single_items_shape">
                                <span>Reviews</span>
                                <div class="rank-icons">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><span>(8 Reviews)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacher_fee single_items ">
                                <span>Price</span>
                                <span class="courses_price">Free</span>
                            </div>
                            <div class="buy_btn single_items">
                            @if (Route::has('login'))
                            @auth
                            <form method="post" action="/enroll">
                           {{ csrf_field() }}
                           <input type="hidden"  name="student_id" value="{{Auth::id()}}">
                           <input type="hidden" name="course_id" value="{{$course['id']}}">
                           <button class="btn btn-primary" type="submit">Start Now</button>
                           </form>
                           <div class="buy_btn single_items">
                                <!-- <a href="{{route('viewcourse', $course['id'])}}" title="">Start Now</a> -->
                            </div>
                            @else
                            <a href="{{ route('login') }}" title="">login to Enroll this course</a>
                           @endauth
                    @endif
                            </div>
                        </div>
                        <div class="details-img-bxo">
                            <img style="width:700px; height:300px;" src="{{asset($course['image'])}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li> --}}
                                <li class="nav-item"><a class="nav-link" href="#instructor" role="tab" data-toggle="tab">Instructor</a></li> 
                                {{-- <li class="nav-item"><a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a></li> --}}
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <p>" {{$course['description']}} "</p>
                                 <h3>What Will I Learn? <span>:</span></h3>
                                <p>" {{$course['content']}} "</p>
                                <ul class="step_point">
                                    <li>Create static HTML and CSS portfolio sites and landing pages.</li>
                                    <li>Think like a developer. Become an expert at Googling code questions!</li>
                                    <li>Write complex web apps with multiple models and data associations.</li>
                                    <li>Create a blog application from scratch using Express, MongoDB, and Semantic UI.</li>
                                    <li>Use Express and MongoDB to create full-stack JS applications.</li>
                                </ul>                              
                                <h3>Learning Outcomes <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <ul class="step_point">
                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                    <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                    <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                    <li>Course content designed by considering current software testing technology and the job market.</li>
                                    <li>Practical assignments at the end of every session.</li>
                                    <li>Practical learning experience with live project work and examples.</li>
                                </ul>
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="instructor">
                                <div class="courses_teacher">
                                    <div class="tutor_signle">
                                        <div class="tutor_pro">
                                            <a href="#" title=""><img src="{{asset($course['instructor']['profile_photo_path'])}}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="teachers_name">
                                            <h5><a href="../teacher-profile/{{$course['instructor']['id']}}" title="">{{$course['instructor']['name']}}</a></h5>
                                            <span>{{$course['instructor']['specialist']}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses Features</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><a href="#" title=""><i class="flaticon-page"></i> Lessons </a><span>69</span></li>
                                <li><a href="#" title=""><i class="flaticon-eye-open"></i> Viewers</a><span>56</span></li>
                                <li><a href="#" title=""><i class="flaticon-clock-circular-outline"></i> Duration</a><span>5H</span></li>
                                <li><a href="#" title=""><i class="flaticon-padlock"></i> Prequisite</a><span>No</span></li>
                                <li><a href="#" title=""><i class="flaticon-diploma"></i> Certificate</a><span>Yes</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-language"></i> Language</a><span>Eng</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-thumbs-up-hand-symbol"></i> Skills</a><span>Any</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-edit"></i> Assessments</a><span>Yes</span></li>
                            </ul>
                        </div>
                        <img src="{{asset('images/shapes/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  


                    

                    <div class="archives widget_single">
                        <div class="items-title">
                            
                            <h3 class="title">All Categories</h3>

                        </div>

<?php
    use App\Models\Category;
    $categories= Category::all();
?>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                @foreach ($categories as $item)
                                <li><a href="{{Route('categorycourses.show',$item['id'])}}" title="">{{$item['name']}} </a></li>
                                @endforeach
                                {{-- <li><a href="#" title="">Art & Design </a></li>
                                <li><a href="#" title="">Busness</a></li>
                                <li><a href="#" title="">IT & Software</a></li>
                                <li><a href="#" title="">Languages</a></li>
                                <li><a href="#" title="">Programming</a></li>                                
                                <li><a href="#" title="">Technology</a></li> --}}
                            </ul>
                        </div>
                    </div>  
                </div>
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->

<?php

// use App\Models\course;
// dd($course);
// $category=$course->category
//     // $category=$category->findorfail($id);
//     $courses=$category->course;
// // $cat=
//     // $categories= Category::all();

?>

<!--Start Courses Area Section-->
<section class="popular_courses" id="related_courses_wrapper">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title">
                    <h2>Related Courses</h2>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="related_courses" class="owlCarousel">


                    @foreach ($courses as $item)
                        
                   
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset($item['image'])}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">{{$item['name']}}</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">{{$item['instructor']['name']}}</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-calendar-alt"></i>{{$item['duration']}} Hours</li>
                                    <li><i class="fas fa-calendar-alt"></i>30 Students</li>
                                </ul>
                                <a href="{{route("Viewcourses.show",$item['id'])}}" class="cart_btn">View Details</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->
                    @endforeach


{{-- 
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset('images/courses/courses_2.jpg')}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">How To Be A Speaker</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Denise Wood</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 180 Days</li>
                                    <li><i class="fa fa-comment"></i>50 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->

                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset('images/courses/courses_3.jpg')}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset('images/courses/courses_3.jpg')}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset('images/courses/courses_3.jpg')}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>                     
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="{{asset('images/courses/courses_3.jpg')}}" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="#" title="">Preston Marshall</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-user"></i> 140 Days</li>
                                    <li><i class="fa fa-comment"></i>60 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>     --}}
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->                                       
        </div>

    </div>
</section><!-- ./ End Courses Area section -->










    
@endsection