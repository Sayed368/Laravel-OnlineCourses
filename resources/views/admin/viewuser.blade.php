@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3><span class="fa fa-users"></span>View user</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          
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
                        
                      
                        </div>
                        <div class="col-xs-12 col-sm-6 ">
                            <div class="form-group p-t-20">
                              
                            </div>
                        </div>
         
                         
                        <table class="table">
                        <tbody>
                      
                            <tr>
                            <th>Name</th>
                            <td>{{$user["name"]}}</td>
                            </tr>
                          
                             <tr>
                             <th>email</th>
                             <td>{{$user["email"]}}</td>
                            </tr>
                            <tr>
                            <th>role</th>
                             <td>{{$user["role"]}}</td>
                            </tr>
                            <tr>
                            <th>gender</th>
                             <td>{{$user["gender"]}}</td>
                            </tr>
                            <tr>
                            <th>dob</th>
                             <td>{{$user["dob"]}}</td>
                            </tr>
                            <tr>
                            <th>specialist</th>
                             <td>{{$user["specialist"]}}</td>
                            </tr>
                            <tr>
                            <th>Address</th>
                             <td>{{$user["address"]}}</td>
                            </tr>
                            <th>university</th>
                             <td>{{$user["university"]}}</td>
                            </tr>
                            <th>description</th>
                             <td>{{$user["description"]}}</td>
                            </tr> 
                            <tr>
                            <th>image</th>
                            <td><img src="../{{ $user['profile_photo_path'] }}" class="rounded-circle" width="60" height="50" /></td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <div class="col-xs-12">
                           
                        </div>
                    </div>
                </div>            
            </div>
        </div>

        @endsection('content')