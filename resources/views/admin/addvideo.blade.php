@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add video</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    use App\Models\Course;
    $courses=Course::all();
    // $courses=$course::all();
    

    use App\Models\CourseVideo;
    
    ?>


<div style="padding-top:10px; padding-left:250px ;" class="container-fluid">

  <div class="col-xs-12">
    <button class="btn btn-success" onclick="appendElement()"><span class="fa fa-plus"></span> New Field</button>              
  </div>
  <div class="row w-100">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 w-100">
          <div class="row">

            
            <form class="w-100" method="POST" action="{{route('videos.store')}}" id="addvideo" enctype="multipart/form-data">
              @csrf

              <div class="form-group  p-1">
                <label for="role">Courses</label>
                
               
                <select class="form-control" name="course">
                
                    <option disabled selected>Please Select course</option>
                    @foreach($courses as $course)
                    
                    <option value="{{$course['id']}}">{{$course["name"]}}</option>
                    
                    @endforeach
                </select>
                <label class="text-danger" for="course">{{$errors->first("course")}}</label>
                
               
              </div>
              
              <div id="inputfield" >

                <div class=' p-3 my-2' style='border: 2px solid gray'>
                <div class='form-group'>
                  <label for='name'>Video Name</label>
                  <input type='text' class='form-control'  name='video_name[]' >
                  
                </div>
                <div class='form-group'>
                    <label for='note'>Video URL</label>
                    <input type='text' class='form-control'  name='video_url[]' >
                    
                </div>
               
              </div>


             </div>

                  <button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
                  <br><br><br><br>
                  
              </form>
          </div>
      </div>

  </div>
</div>





    
   


    @endsection('content')