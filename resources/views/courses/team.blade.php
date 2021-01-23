@extends('layouts.pages_layout')

@section('intro_text')
<h1>Our Professors</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="" class="active">professors Page</a>
</div>
@endsection

@section('main')


<?php
use App\Models\user;
$user=new user ;
$users=$user->all();
?>



<!--========={ Our Instructiors }========-->
<section class="our_instructors" id="instructors_page">
    <div class="container">
        <div class="row">
        @foreach ($users as $user)
@if($user['role']=='instructor')
            <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{$user['profile_photo_path']}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="teacher-profile/{{$user['id']}}" title="">{{$user['name']}}</a></h4>
                                <span>{{$user['specialist']}}</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
@endif
            @endforeach
           
        </div>
    </div>
</section><!-- ./ End Our Instructiors -->


    
@endsection
