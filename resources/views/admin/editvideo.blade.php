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

 
  <div class="row w-100">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 w-100">
          <div class="row">

            
            <form class="w-100" method="POST" action="{{route('videos.update',$video)}}" id="addvideo" enctype="multipart/form-data">
              @csrf
              @method("put")
            
              <div id="inputfield" >

                <div class=' p-3 my-2' style='border: 2px solid gray'>
                <div class='form-group'>
                  <label for='name'>Video Name</label>
                  <input type='text' class='form-control' value='{{$video["name"]}}' name='video_name' >
                  <label class="text-danger"> {{$errors->first("video_name")}}</label>
                </div>
                <div class='form-group'>
                    <label for='note'>Video URL</label>
                    <input type='text' class='form-control' value='{{$video["video_url"]}}' name='video_url' >
                    <label class="text-danger"> {{$errors->first("video_url")}}</label>
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