<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Ecology Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Educavo</title>
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
	<!-- Goole Font -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/assets/bootstrap.min.css')}}">
	<!-- Font awsome CSS -->
	<link rel="stylesheet" href="{{asset('css/assets/font-awesome.min.css')}}">    
	<link rel="stylesheet" href="{{asset('css/assets/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/magnific-popup.css')}}">    
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('css/assets/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/owl.theme.css')}}">     
	<link rel="stylesheet" href="{{asset('css/assets/animate.css')}}"> 
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{{asset('css/assets/slick.css')}}">  
  
	<!-- Mean Menu-->
	<link rel="stylesheet" href="{{asset('css/assets/meanmenu.css')}}">
	<!-- main style-->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header class="header_3">
<!-- Preloader -->
<div id="preloader"></div> 
	<div class="header_top">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-12">
					<div class="info_wrapper">
						<div class="contact_info">                   
							<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+02-01010-75270</li>
        						<li><i class="flaticon-mail-black-envelope-symbol"></i>Info@Educavo.com</li>
        					</ul>                
						</div>
						<div class="login_info">
                            @if (Route::has('login'))
                            @auth
  <a id="navbarDropdown" class="sign_up sign-in" href="/profile" >
                                    {{ Auth::user()->name }}
    </a>&nbsp;
    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            @else
                        <a href="/register" title="" class="sign_up sign-in">Sign Up</a>
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endauth
                    @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
use App\Models\Category;
$categories= Category::all();
?>
	<div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">

                      

                        <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
                        
                        <li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
                        
						{{-- <li class="nav-item"><a href="/course" class="nav-link">Categories</a>
                             
                        </li> --}}
                        <li class="nav-item"><a href="/team" class="nav-link">Categories</a>
                              <ul class="navbar-nav nav mx-auto">


                                
                                @foreach ($categories as $item)
                                <li class="nav-item"><a href="{{Route("categorycourses.show",$item['id'])}}" value="{{$item['id']}}" class="nav-link">{{$item['name']}}</a></li>

                                @endforeach
								
                            </ul>
                        </li>
                        <li class="nav-item"><a href="/team" class="nav-link">Instractors</a></li>
                        <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                        <!-- <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Courses</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="/course" class="nav-link">Courses</a></li>
                                        <li class="nav-item"><a href="/course-details" class="nav-link">Courses Details</a></li>
                                    </ul>    
                                </li>                                 
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Events</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="/event" class="nav-link">Event</a></li>
                                        <li class="nav-item"><a href="/event-details" class="nav-link">Event Details</a></li>
                                    </ul>    
                                </li>                                
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Blog</a>
                                    <!-- <ul class="navbar-nav nav mx-auto">
                                        
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid One</a></li> 
                                        
                                    </ul>     -->
                                <!-- </li> 
                                <li class="nav-item"><a href="/become-a-teacher" class="nav-link">Become A Teacher</a></li>

                                <li class="nav-item"><a href="/forgot-password" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>      --> 

                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto d-flex">
                        <!-- <li class="nav-item search_icon"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item cart_icon"><i class="flaticon-shopping-bag"><p>2</p></i> 
                    	 	<div class="cart_list">
                                <div class="single_cart d-flex justify-content-between">
                                    <div class="cart_banner">
                                        <a href="#"><img alt="" src="images/courses/courses_1.jpg" class="img-fluid"></a>
                                    </div>
                                    <div class="cart_info">
                                        <h4><a href="#">Make Better Decisions</a></h4>
                                        <span class="price">$135.00 <span>x 1</span></span>
                                    </div>
                                    <div class="del-icon">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="single_cart d-flex justify-content-between">
                                    <div class="cart_banner">
                                        <a href="#"><img alt="" src="images/courses/courses_2.jpg" class="img-fluid"></a>
                                    </div>
                                    <div class="cart_info">
                                        <h4><a href="#">How To Be A Speaker</a></h4>
                                        <span class="price">$165.00 <span>x 1</span></span>
                                    </div>
                                    <div class="del-icon">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart_calculate_wrapper">
                                    <div class="calculate_price"><span>Sub-Total :</span><span>$300.00</span></div>
                                    <div class="calculate_price"><span>Eco Tax (-2.00) :</span><span>$5.00</span></div>                                    
                                    <div class="calculate_price"><span>VAT (20%) :</span><span>$25.00</span></div>                                    
                                    <div class="calculate_price"><span>Total </span><span class="total_price">$330.00</span></div>
                                </div>
                                <div class="purchase_btn d-flex justify-content-between">
                                    <a class="cart_button" href="#">view cart</a>
                                    <a class="checkout" href="#">checkout</a>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

	<div class="intro_wrapper">
		<div class="container">  
			<div class="row">        
				 <div class="col-sm-12 col-md-8 col-lg-8">
					<div class="intro_text">
						<h1>Make the most of your online learning experience.</h1>
						<p>Our Online Learning Resource Center has tips, tricks and inspiring <br>stories to help you learn while staying home.
.</p>
						{{-- <div class="intro_button">
							<a href="#" class="nav-link">Start my free month</a>
						</div> --}}
					</div>
				</div>				
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="search_wrapper">
						<div class="search-option" >
							<form action="{{url('/search')}}" type="get">
								<div class="dropdown dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="all-categories "><span>Categories</span> <i class="cat_icon flaticon-down-arrow"></i></div>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($categories as $item)
                                        <li class="dropdown-item" ><a href="" value="{{$item['id']}}" >{{$item['name']}}</a></li>
                                        @endforeach
                                        
                                        {{-- <li class="dropdown-item" >Action</li>
										<li class="dropdown-item" >Another action</li>
										<li class="dropdown-item" >Action</li>
										<li class="dropdown-item" >Another action</li>
										<li class="dropdown-item" >Action</li>
										<li class="dropdown-item" >Another action</li> --}}
									</ul>
								</div>
								<div class="form-group d-flex">
									<input placeholder="What do you want to learn today ?" type="text" name="query" required="">
								</div>
								<div class="submit-btn">
									<button type="submit" class="text-center">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div> 
	</div>  
</header> <!-- End header -->




<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->



@yield('main')


<br><br>
<!-- Footer -->  
<footer class="footer_3">
	<div class="container">
		<!-- <div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<div class="become_instractor">  
					<div class="sub_title">
						<h2>Become A Instractor</h2>
						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
					</div>ends: .section-header -->
					<!-- <div class="envent_all_view">
						<a href="#" title="">Start my free month</a>
					</div>
				</div> 
			</div>
		</div>   --> 
		<div class="footer_top">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="footer_single_col footer_intro">
						<img src="images/logo2.png" alt="" class="f_logo">
						<p>Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.</p>
					</div>
				</div>
				
				<div class="col-12 col-md-6 col-lg-2">
					<div class="footer_single_col information">
						<h3>information</h3>
						<ul class="quick_inf0">
							<li><a href="http://127.0.0.1:8000/">HOME</a></li>
							<li><a href="/course">COUSRSES</a></li>
							<li><a href="/team">INSTRACTORS</a></li>
							<li><a href="/blog">BLOG</a></li>
							<li><a href="/about">ABOUT US</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="footer_single_col contact">
						<h3>Contact Us</h3>
						<p>Ante amet vitae vulputate odio nulla vel pretium aenean.</p>
						<div class="contact_info">
							<span>+02-01010-752703</span> 
							<span class="email">Info@Educavo.com</span>
						</div>
						<ul class="social_items d-flex list-unstyled">
							<li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
						</ul>
					</div>
				</div>
				 <div class="col-12 col-md-12 col-lg-12">
					<div class="copyright">
						
					</div>
				 </div>
			</div>
		</div>
	</div>
	<div class="shapes_bg">
		<img src="images/shapes/waves.png" alt="" class="shape_3">        
	</div>    
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>


	<!-- JavaScript -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>     
	<script src="js/owl.carousel.min.js"></script>   
	<script src="js/slick.min.js"></script>   
	<script src="js/jquery.meanmenu.min.js"></script>      
	<script src="js/wow.min.js"></script> 
	<!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
	<script src="js/custom.js"></script>  
    
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="/index"><img src="images/logo.png" alt="logo"></a>
                
                
            </div>
            <div class="demos">
                <div><a href="index-2.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img class="main-image img-fluid" src="demo/index_3.png" alt=""/></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img class="main-image img-fluid" src="demo/index_2.png" alt=""/></a></div>
                <div><a href="index-4.html" data-toggle="tooltip" data-placement="top" title="Home Style Three"><img class="main-image img-fluid" src="demo/index_1.png" alt=""/></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img src="demo/about.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img src="demo/blog.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top" title="Blog Details Page"><img src="demo/blog_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img src="demo/event.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top" title="Event Deiails"><img src="demo/event_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top" title="Teacher Profile"><img src="demo/teacher_pro.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img src="demo/course.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top" title="Courses Details"><img src="demo/course_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img src="demo/team.png" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img src="demo/contact.png" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>
