@extends('layouts.pages_layout')

@section('intro_text')
<h1>Courses Page</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="" class="active">Course Page</a>
</div>
    
@endsection


@section('main')

<?php
    use App\Models\Course;
    $course=new Course;
    $courses=$course->paginate(6);
?>


<!--Start Courses Area Section-->
<section class="popular_courses" id="popular_courses_page">
    <div class="container"> 
        <div class="row">

            @foreach ($courses as $item)
                
            
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="course-details.html"><img src="{{$item['image']}}" alt="" class="img-fluid"></a></div>
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
                                <li><i class="fas fa-user"></i>30 Students</li>
                            </ul>
                            <a href="{{route("Viewcourses.show",$item['id'])}}" class="cart_btn">View Details</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            @endforeach



            
            <div style="display: flex;
 
 justify-content: center;
width: 100%;">
     
                {{ $courses->links() }} 
               
            </div>                                       
        </div>

    </div>
</section><!-- ./ End Courses Area section -->


    
@endsection