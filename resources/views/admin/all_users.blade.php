@extends('layouts.admin_layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div style="padding-top:10px; padding-left:50px ;" class="container-fluid">
            <div class="row">
            
                <div class="col-xs-12 sub">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3><span class="fa fa-users"></span> Users <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span> <a style="text-decoration: none ; color: white;" href="/users/create">Add User</a></button></h3>
                            
                        </div>
                        <!-- <div class="col-xs-12 col-sm-6 ">
                            <div class="form-group p-t-20">
                                <select class="form-control">
                                    <option selected disabled>Amount</option>
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-6">
                           
                        </div>
                        <div class="col-xs-12">
                        <table class="table table-bordered table-striped bg-dark" style="color:white; border:none">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Name</th>
                                        
                                        <th>email</th>
                                        <th>image</th>
                                        <th>role</th>
                                        <th>gender</th>
                                        <th>specialist</th>
                                        <th>dob</th>
                                        <!-- <th>Address</th> -->
                                        <th>phone number</th>
                                        <!-- <th>university</th> -->
                                        <!-- <th>description</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="color:black; font:blod; background:#ffff">
                                    <tr>
                                      @foreach($users as $user)
                                        <!-- <td>1</td> -->
                                        <td> {{$user["name"]}}</td>
                                        
                                        <td> {{$user["email"]}}</td>
                                       
                                        <td>
                                    
                    <img src="{{asset($user['profile_photo_path'] )}}" class="rounded-circle" width="60" height="50" /></td>
                    <img src="{{ asset($user['profile_photo_path']) }}" class="rounded-circle" width="60" height="50" /></td>
                                        <td>{{$user["role"]}}</td>
                                        <td>{{$user["gender"]}}</td>
                                        <td>{{$user["specialist"]}}</td>
                                        <td>{{$user["dob"]}}</td>
                                      
                                        <!-- <td>{{$user["address"]}}</td> -->
                                        <td>{{$user["phone"]}}</td>
                                        <!-- <td> {{$user["university"]}}</td> -->
                                        <!-- <td>{{$user["description"]}}</td> -->
                                        <td>
                                            <a class="text-success m-l-5" href="{{route('users.show',$user)}}"><span class="fa fa-eye"></span></a>
                                            <a href="{{route('users.edit',$user)}}"><span class="fa fa-edit"></span></a>
                                            <form action="{{route('users.destroy',$user)}}" method="Post" style="display:inline-block;">
                      @csrf
                      @method("delete")
                      <button type="submit" value="Delete"
                              class="fa fa-trash"></button> 
                              <!-- <a ><input type="submit" class="fa fa-trash-alt"><span class="fa fa-trash-alt"></span></a> -->
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