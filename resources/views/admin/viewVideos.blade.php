@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Videos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Videos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 

    <div style="padding-top:20px; padding-left:50px ;" class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">
                <div class="col-xs-12">
              
                        <h3><span class="fa fa-graduation-cap"></span> Videos <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span><a style="text-decoration: none ; color: white;" href="#">Add video</a></button></h3>
                        
                    </div>
                
                    <br>
            <table class="table table-bordered table-striped bg-dark" style="color:white; border:none">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-center" >Course Name</th>
                                    <th class="text-center" >Video</th>
                                    <th class="text-center" >Options</th>
                                </tr>
                            </thead>
                            <tbody style="color:black; font:blod; background:#ffff">
                           
                        
                              
                            @foreach ($videos as $item) 
                             
                                <tr>
                                
                                    <td><b>{{$item['course']['name']}}</b></td>
                                   <td>
                                  <a href="#"><b>{{$item['video_url']}}</b></a>
                                    
                                    </td>
                                    <td>
                                    <span class="fa fa-plus"></span><a style="text-decoration: none ; color: black;" href="{{route('videos.create', $item['course_id'])}}">Add video</a>
                                    <a href=""><span class="fa fa-edit"></span></a>
                                      
                                        <form action="#" method="Post" style="display:inline-block;">
                                          @csrf
                                          @method("delete")
                                        
                                          <button type="submit"  value="Delete"
                                          class="fa fa-trash"
                                                  > </button>
                                                
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