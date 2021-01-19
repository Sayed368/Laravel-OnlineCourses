<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All courses</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0-rc/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0-rc/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="{{asset('AdminLTE-3.1.0-rc/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.1.0-rc/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/allusers')}}" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                all users
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/allcategeries')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All categeries
                
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{url('admin/allcourses')}}" class="nav-link  active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 All courses
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/adduser')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add user
                
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{url('admin/addcategery')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 Add categery
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/courses/create" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 Add course
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/feedback')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 Feedbacks
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
   
       
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

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
                                  <a href="{{route('videos.index'),$course['id']}}"><b> Videos link </b></a>
                                 
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

</body>
</html>