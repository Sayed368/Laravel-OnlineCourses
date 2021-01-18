@extends('layouts.home_layout')

@section('main')

<?php
use App\Models\user;
$user=new user;
$users=$user->all();

use App\Models\Category;
$categories= Category::all();


use App\Models\Course;
$courses= Course::all();


    
?>

<section class="courses_features">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-sm-12 col-md-9 col-lg-9">
				<div class="sub_title">
					<h2>We Have Tones of Course <br>for Your!!</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">

			@foreach ($categories as $item)
				
			

			<div class="col-12 col-sm-6 col-md-4 col-lg-4 single_features_wrapper">
				<div class="feature_single feature_single_3">
					<img src="images/features/courses_provide_3.jpg" alt="">
					<div class="feature_content">
						<a href="{{Route("categorycourses.show",$item['id'])}}" title=""><h3>{{$item['name']}}</h3></a>
						<p>Over 450 Courses</p>
					</div>
				</div>
			</div>

			@endforeach




		</div>
	</div>
</section>  <!-- End Courses Features -->



<section class="about_us_thinking">
	<div class="container-fluid">            
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 p-0">
				<div class="banner_learn">
					<img src="images/banner/about_thinking.jpg" alt="" class="img-fluid">
				 </div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<div class="title">
					<h2>Doing The Right Thing At The Right Time.</h2>
					<div class="step_services">
						<h3><span>01.</span>Exprerience</h3>
						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>  
					</div>                    
					<div class="step_services">
						<h3><span>02.</span>Education</h3>
						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>   
					</div>                   
					 <div class="step_services">
						<h3><span>03.</span>Certificate</h3>
						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget maecenas.</p>  
					</div>
				 </div>
			</div>
		</div>
	</div>    
</section><!-- End About Us Your Thingking -->



<section class="popular_courses">
	<div class="container"> 
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sub_title">
					<h2>Our Popular Courses</h2>
					<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
				</div><!-- ends: .section-header -->
			</div>

			@foreach ($courses as $item)

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{$item['image']}}" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">Free</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">{{$item['name']}}</a></h3>
                            <div class="teachers_name">Teacher - <a href="#" title="">{{$item['instructor']['name']}}</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>{{$item['duration']}} Hours</li>
                                <li><i class="fas fa-user"></i>30 Students</li>
                            </ul>
                            <a href="{{route("Viewcourses.show",$item['id'])}}" class="cart_btn">View Details</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->
		   
			@endforeach
		</div>

	</div>
</section><!-- Ends: Pupular Courses -->  



<!-- <section class="video_online">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sub_title">
					<h2>Watch Online Video</h2>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="video_wrapper">
				   <div class="video_banner">
					   <img src="images/banner/video_mockup.png" alt="">
						<div class="video_view_btn">
							<a href="https://www.youtube.com/watch?v=zoQ8C0r6Djw" class="video-iframe"><i class="flaticon-play-button"></i></a>
						</div>
				   </div>
				   <div class="shape_video">
				   		<img src="images/shapes/video_1.png" alt="" class="shape_1"> 
				   		<img src="images/shapes/video_2.png" alt="" class="shape_2">        
				   </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-sm-6 col-md-3 col-lg-3 counter_single_wrapper">
				<div class="section count_single">
					<div class="project-count counter">7096</div>
					<span>Active students</span>
				</div>
			</div>

			<div class="col-6 col-sm-6 col-md-3 col-lg-3 counter_single_wrapper">
				<div class="section count_single">
					<div class="project-count counter">508</div>
					<span>Online Courses</span>
				</div>  
			</div>  

			<div class="col-6 col-sm-6 col-md-3 col-lg-3 counter_single_wrapper">
				<div class="section count_single">
					<div class="project-count"><span class="counter">100</span><span class="count_icon">%</span></div>
					<span>Satisfaction</span>
				</div>
			</div>

			<div class="col-6 col-sm-6 col-md-3 col-lg-3 counter_single_wrapper">
				<div class="section count_single">
					<div class="project-count counter">70</div>
					<span>Fraduates</span>
				</div>  
			</div>  
		</div>
	</div>
	<div class="bg_shapes">
	</div>
</section>End ONline Video -->
<?php
use App\Models\feedback;
$feedback=new feedback;
$feedbacks=$feedback->all();
?>


<section class="testimonial_3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sub_title">
					<h2>Student Say About Us</h2>
					<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
				</div><!-- ends: .section-header -->
			</div>
		</div>
		<div class="row">
		@foreach ($feedbacks->slice(0,3) as $feedback)
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="testimonial_single">
					<div class="reviewer_info">
						<div class="pro_pic_teacher">
						
						</div>
						<div class="name_position">
							<span class="name">{{$feedback['name']}}</span>
							<span>{{$feedback['subject']}} student</span>
						</div>
					</div>
					<p>{{$feedback['comments']}}</p>
				</div>                                       
			</div>
            @endforeach

		</div>
	</div>
</section><!-- End Testimonial -->





<section class="meet_our_team">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="meet_team_wrapper">  
					<div class="sub_title">
						<h2>Meet Our Instractor</h2>
						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
					</div><!-- ends: .section-header -->
					<div class="envent_all_view">
						<a href="/team" title="">View All</a>
					</div>
				</div> 
			</div>
		</div>      
		<div class="row">
@foreach ($users->slice(0,6) as $user)
@if($user['role']=='instructor')
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="testimonial_single">
					<div class="reviewer_info">
						<div class="pro_pic_teacher">
							<img src="{{$user['profile_photo_path']}}" alt="2" class="img-fluid">
						</div>
						<div class="name_position">
							<span class="name"><a href="teacher-profile/{{$user['id']}}" title="">{{$user['name']}}</a></span>
							<span>{{$user['specialist']}}</span>
						</div>
					</div>
				</div>                                       
			</div>

			@endif
            @endforeach
			
		</div>
	</div>
	<div class="shape_wrapper">
		<img src="images/shapes/testimonial_2_shpe_2.png" alt="" class="shape_1">        
		<img src="images/shapes/testimonial_2_shpe_3.png" alt="" class="shape_2">        
		<img src="images/shapes/testimonial_2_shpe_1.png" alt="" class="shape_3">
	</div>
</section><!-- End Meet Our Team -->


<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In <br>CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> James Colins</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">Students work together to <br>solve a problem.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Jhon Deo</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_3.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In <br>CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Simon Stain</span>
                        </div>               
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section><!-- End Blog  -->



    
@endsection