@extends('layouts.admin_layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add course</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    use App\Models\User;
    $users=new User;
    $userss=$users->all();

    use App\Models\Category;
    $cat=new  Category;
    $cats=$cat->all();
    ?>
             
    <div style="padding-top:10px; padding-left:250px ;" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="row">
                    <form method="POST" action="{{route('courses.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div style="width: 600px;" class="form-group">
                            <label for="course_name">Course Name</label>
                            <input type="text" maxlength="100" class="form-control" id="course_name" name="name" placeholder="Enter Course Name" required="true">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description" id="description" placeholder="Course Description ..." required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="total_hours">Total Hours</label>
                            <input type="number" class="form-control" id="total_hours" name="duration" placeholder="Enter Total Course Hours ..." max="100">
                        </div>
                        <div class="form-group">
                            <label for="role">Category Name</label>
                            
                           
                            <select class="form-control" name="category[]" multiple>
                                <option disabled selected>Please Select Category</option>
                                @foreach($cats as $cat)
                                <option value="{{$cat['id']}}">{{$cat["name"]}}</option>
                                @endforeach
                            </select>
                            
                           
                        </div>

                        <div class="form-group">
                            <label for="role">Instructor</label>
                            
                           
                            <select class="form-control" name="instructor">
                            
                                <option disabled selected>Please Select Instructor</option>
                                @foreach($userss as $user)
                                @if($user['role']=='instructor')
                                <option value="{{$user['id']}}">{{$user["name"]}}</option>
                                @endif
                                @endforeach
                            </select>
                            
                           
                        </div>
                        

                        <div class="form-group">
                            <label for="note">Content</label>
                            <textarea class="form-control" rows="3" name="content" id="note" placeholder="Note About Course ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="note">Image</label>
                            <input type="file" class="form-control"  name="image">
                        </div>
                        {{-- <div class="form-group">
                            <label for="note">Video</label>
                            <input type="text" class="form-control"  name="video_url" >
                        </div> --}}

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>
     
        </div>
    </div>


    @endsection('content')