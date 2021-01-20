@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div style="padding-top:10px; padding-left:208px;" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-3">
                <div style="width: 200px;" class="row">
                <form method="POST" action="{{route('users.update',$user)}}" enctype="multipart/form-data">
                @csrf
                     @method("put")                        <div style="width: 600px;" class="form-group">
                            <label for="first_name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required
                            value="{{$user['name']}}">
                            <label class="text-danger"> {{$errors->first("name")}}</label>

                            
                        </div>

                     

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email" required
                            value="{{$user['email']}}"
                            >
                            <label class="text-danger"> {{$errors->first("email")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" 
                            
                          required
                         
                          >
                          <label class="text-danger"> {{$errors->first("password")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="password_confirm">Password Confirmation</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Password Confirmation" required>
                            <label class="text-danger"> {{$errors->first("password_confirmation")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="role">User Role</label>
                            <select class="form-control" id="role"  name="role" required >
                                <option value="admin">admin</option>
                                <option value="instructor">instructor</option>
                                <option value="student">student</option>
                            </select>
                            <label class="text-danger"> {{$errors->first("role")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="User Address ..." required
                            value="{{$user['address']}}"
                            >
                            <label class="text-danger"> {{$errors->first("address")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="User Phone Number ..." require
                            value="{{$user['phone']}}" 
                            >
                            <label class="text-danger"> {{$errors->first("phone")}}</label>

                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <label class="radio-inline m-l-15"><input type="radio" name="gender" value="male" checked>Male</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                        
                        </div>
                        <div class="form-group">
                        <label for="university">university</label>
                            <input type="text" class="form-control" id="university" name="university" placeholder="user university ..."
                            value="{{$user['university']}}" >
                            <label class="text-danger"> {{$errors->first("university")}}</label>

                        </div>

                        <div class="form-group">
                            <label for="note">image</label>
                            <input type="file" class="form-control" id="dob" name="profile_photo_path" required>
                        </div>
                        <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" class="form-control" id="dob" name="dob" required
                                value="{{$user['dob']}}">
                                <label class="text-danger"> {{$errors->first("dob")}}</label>
                            </div>
                            <div class="form-group">
                                <label for="note">specialist</label>
                                <input class="form-control" rows="3" name="specialist" placeholder="Enter specialst ..."
                                value="{{$user['specialist']}}">
                                <label class="text-danger"> {{$errors->first("specialist")}}</label>
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <textarea class="form-control" rows="4" name="description"  placeholder="User description ..."
                                value="{{$user['description']}}"></textarea>
                                <label class="text-danger"> {{$errors->first("description")}}</label>
                            </div>

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
     
        </div>
    </div>


    @endsection('content')