@extends('layouts.admin_layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Member Requests</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Member Requests</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    use App\Models\MemberRequest;

        $members=new MemberRequest;
        $members=MemberRequest::paginate(5);
        
    
    ?>

    <div style="padding-top:10px; padding-left:40px ;" class="container-fluid">
        <div class="row">
        
            <div class="col-xs-12 sub">
                <div class="row">
                    
                   

                    <div class="col-xs-12">
                        <table class="table table-responsive table-hover table-condensed">
                            <thead>
                                <tr>
                                    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Skills</th>
                                    
                                    
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                            
                            
                                <tr>
                                    
                                    <td><a href="#"><b>{{$member["name"]}}</b></a></td>
                                    <td>{{$member["email"]}}</td>
                                    <td>{{$member["phone"]}}</td>
                                    
                                    <td>{{$member["skills"]}}</td>
                                    
                                    
                                    <td>
                                      
                                        <a href="{{route('sendemail',$member['id'])}}" class="btn btn-success">Accept</a>
                                       
                                   
                                        {{-- <form action="{{route('courses.destroy',$course)}}" method="Post" style="display:inline-block;">
                                            @csrf
                                            @method("delete")
                                            
                                            <input type="submit"  value="Delete" 
                                            
                                            class="btn btn-danger"
                                                    style="width:70px ;height:40px;border-radius:40%">
                                                    
                                        </form> --}}
                
                                   
                                    </td>
                                </tr>
                                
                              
                            @endforeach
                            </tbody>
                        </table>

                        <div class="container">  
                        {{ $members->links() }} 
                        </div> 
                    </div>
                </div>
            </div>            
        </div>
    </div>

   

@endsection('content')