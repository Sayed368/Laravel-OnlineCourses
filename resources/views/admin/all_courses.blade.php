@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Courses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    use App\Models\User;
   
    use App\Models\CourseVideo;
    
    ?>

    <div style="padding-top:10px; padding-left:40px ;" class="container-fluid">
        <div class="row">
        
            <div class="col-xs-12 sub">
                <div class="row">
                    <div class="col-xs-12">
                        <h3><span class="fa fa-graduation-cap"></span> Courses <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span><a style="text-decoration: none ; color: white;" href="/courses/create">Add course</a></button></h3>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="form-group p-t-20">
                            <select class="form-control">
                                <option selected disabled>Amount</option>
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        
                    </div>
                   

                   <div class="col-xs-12 ">
            <table class="table table-bordered table-striped bg-dark" style="color:white; border:none">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Categery</th>
                                    <th>Instructor</th>
                                    <th>Image</th>
                                    <th>Video</th>
                                    
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody style="color:black; font:blod; background:#ffff">
                            @foreach($courses as $course)
                            
                            
                                <tr>
                                    <td>{{$course["id"]}}</td>
                                    <td><a href="#"><b>{{$course["name"]}}</b></a></td>
                                    <td>{{$course["description"]}}</td>
                                    <td>{{$course["duration"]}}</td>
                                    <td>
                                      @foreach ($course["Category"] as $item)
                                      {{$item["name"].','}}
                                      @endforeach
                                    </td>
                                    <td>{{$course["instructor"]["name"]}}</td>
                                    <td>
                                    
                                    <img src="{{ $course['image'] }}" class="rounded-circle" width="60" height="50" /></td>
                                    </td>
                                    <td>
                                  <a href="{{route('corsevideos', $course['id'])}}"><b> Videos link </b></a>
                                 
                                    </td>
                                    <td>
                                        <a href="{{route('courses.edit',$course)}}"><span class="fa fa-edit"></span></a>
                                        <a class="text-success m-l-5" href="{{route('courses.show',$course)}}"><span class="fa fa-eye xx" ></span></a>
                                   
                                        <form action="{{route('courses.destroy',$course)}}" method="Post" style="display:inline-block;">
                      @csrf
                      @method("delete")
                     
                      <button type="submit"  value="Delete"
                      class="fa fa-trash"
                              > </button>
<<<<<<< HEAD
                
                      

                
=======
       
>>>>>>> 74b719defac4ae6b593cadbfed77847bcfcc1fb6
                             
                       </form>
                
                                   
                                    </td>
                                </tr>
                                
                              
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>            
        </div>
    </div>

@endsection('content')