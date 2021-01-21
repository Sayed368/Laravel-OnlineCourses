@extends('layouts.pages_layout')

@section('intro_text')
<h1>update your Profile</h1>
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
                            <li><h2>here you can update your information..</h2></li>
                            
                            <form action ="{{ action('App\Http\Controllers\UpdateStudentController@update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <li>
                                    <h3>Name :</h3>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required
                            value="{{ Auth::user()->name }}">
                            <label class="text-danger"> {{$errors->first("name")}}</label>

                            </li>
                            <li>
                            <h3>Email :</h3>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email" required
                            value="{{ Auth::user()->email }}"
                            >
                            <label class="text-danger"> {{$errors->first("email")}}</label>

                                   
                                </li>
                                <li>
                                    <h3>Phone :</h3>
                                   
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="User Phone Number ..." require
                            value="{{ Auth::user()->phone }}" 
                            >
    
                                </li>
                                <li>
                                    <h3>Address :</h3>
                                  
                            <input type="text" class="form-control" id="address" name="address" placeholder="User Address ..." required
                            value="{{ Auth::user()->address }}"
                            >
                                   
                                </li>
                                <li>
                                    <h3>Data of birthday :</h3>
                                    
                                <input type="date" class="form-control" id="dob" name="dob" required
                                value="{{ Auth::user()->dob }}">
                                   
                                </li>
                                <li>
                                    <h3>gender :</h3>
                                    
                            <label class="radio-inline m-l-15"><input type="radio" name="gender" value="male" >Male</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                                    
                                </li>
                                <li>
                            <label for="note">upload profile image</label>
                            <input type="file" class="form-control" id="img" name="profile_photo_path" required>
                            </li>
                            <li>
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                            <label class="text-danger"> {{$errors->first("password")}}</label>
                            </li>
                            <li>
                            <label for="password_confirm">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Password Confirmation" required>
                            <label class="text-danger"> {{$errors->first("password_confirmation")}}</label>
                            </li>
                            <li style="padding-left:321px">
                            <button type="submit" class="btn btn-primary pull-right">update</button>

                            </li>
                           
                            </form>
                        </div>
                                   
                               
                             
                            </ul>
                        </div>
                    </div>
                    

                            <!-- Tab panes -->
                           
            </div>
        </div>
    </div>
</section>





<!--Start Courses Area Section-->


   
</section> <!-- ./ End Courses Area section -->




    
@endsection
