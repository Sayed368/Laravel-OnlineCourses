@extends('layouts.pages_layout')

@section('intro_text')
<h1>Courses View</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="">Course</a>
    <a href="#" title="" class="active">Course View</a>
</div>
@endsection

@section('main')






<!-- video player -->
<div class="container-fluid py-5" style="background-color: #E6E6FA;">
    

    <div class="container-player">
        <div id="mediaPlayer">
            <div class="lds-ring" id=preload><div></div><div></div><div></div><div></div></div>
            <video id='media-video' preload>
                <!-- <source  src="https://www.html5rocks.com/en/tutorials/video/basics/devstories.mp4" type='video/mp4'> -->
                <source  src="images/preview.mp4" type='video/mp4'>
                <source src='parrots.webm' type='video/webm'>
            </video>
            <div id="controls">
                <button id=play><i class="fas fa-pause"></i></button>
                <button id=audioVolume class="fas fa-volume-off"></button>
                <div id="progressBar">
                    <div id="progress"></div>
                </div>
                <div id="timer">
                    <span id="start"> 0 : 00</span>
                </div>
                <button id=expand><i class="fas fa-expand"></i></button>
            </div>
        </div>


        <div id="playlist">  
            <!-- <div class="row w-100 h-25 playlist-item " >
                
            </div> -->
            
            

            <table class="mdl-data-table mdl-js-data-table mdl-video-table w-100">
                <tbody>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 1 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 2 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 3 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 4 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 5 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 6 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 7 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 8 </a></td>
                  </tr>
                  <tr>
                    <td>
                      <i class="material-icons mdl-list__item-icon" style="padding-top: 5px;">play_circle_outline</i>
                    </td>
                    <td style="text-align: left;"><a class="mdl-navigation__link"> Video 9 </a></td>
                  </tr>
                </tbody>
              </table>
            
            
        </div>
    </div>

</div>
<!-- End video player -->

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
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_1.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">Make Better Decisions</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Jhonthan Smith</a></div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-user"></i>180 Days</li>
                                    <li><i class="fas fa-calendar-alt"></i>30 Students</li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->


                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">How To Be A Speaker</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Denise Wood</a></div>
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
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Preston Marshall</a></div>
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
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Preston Marshall</a></div>
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
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Preston Marshall</a></div>
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
                            <div class="courses_banner"><a href="course-details.html"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">Free</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="course-details.html">Network Introductions</a></h3>
                                <div class="teachers_name">Teacher - <a href="teacher-profile.html" title="">Preston Marshall</a></div>
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
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->                                       
        </div>

    </div>
</section><!-- ./ End Courses Area section -->









    
@endsection
