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
<?php  
use App\Models\User;
$user=new Course ;
$user->all();
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
                            <li><h2>here you can update your password...</h2></li>
                            
                            <form action ="{{ action('App\Http\Controllers\UpdatePasswordController@update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <li>
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                            <label class="text-danger" > {{$errors->first("password")}}</label>
                            </li>
                            <li>
                            <label for="password_confirm">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Password Confirmation" >
                            
                            </li>
                            <li style="padding-left:200px">
                            <button type="submit" class="btn btn-primary pull-right">update password</button>

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
