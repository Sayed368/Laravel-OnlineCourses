@extends('layouts.pages_layout')

@section('intro_text')
<h1>Contact Page</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="" class="active">Contact Details</a>
</div>
@endsection

@section('main')



<section class="contact_info_wrapper">
    <div class="container">  
       <div class="row">  
           <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="contact_info">
                   <h3 class="title">Contact Details</h3>
                   <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as nessing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                   <div class="event_location_info">                  
                       <ul class="list-unstyled">
                           <li>
                               <h4 class="info_title">Address : </h4>
                               <ul class="list-unstyled">
                                   <li>945 Somerset Street </li>
                                   <li>Spartanburg, SC 29301</li>
                               </ul>
                           </li>
                           <li>
                               <h4 class="info_title">Phone Numbers :</h4>
                               <ul class="list-unstyled">
                                   <li>+000 251 215 1235</li>
                                   <li>+000 320 542 6532</li>
                               </ul>
                           </li>
                           <li>
                               <h4 class="info_title">Our E-mails :</h4>
                               <ul class="list-unstyled">
                                   <li>support@eduwais.com</li>                                    
                               </ul>
                           </li>                      
                       </ul>
                       <img src="images/banner/map_shape.png" alt="" class="contact__info_shpae">
                   </div>
               </div>
           </div>
  
           <div class="col-12 col-sm-12 col-md-12 col-lg-6">
               <div class="contact_form_wrapper">
                   <h3 class="title">Put your Feedback</h3>
                   @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                   <div class="leave_comment">
                       <div class="contact_form">
                           <form method="post" action="">
                           {{ csrf_field() }}
                               <div class="row">
                                   <div class="col-12 col-sm-12 col-md-6 form-group">
                                      <input type="text" class="form-control" id="name" name="name"  placeholder="Your Name">
                                   </div>
                                   <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input type="email" class="form-control" id="email" name="email"  placeholder="Your E-mail">
                                   </div>                                    
                                   <div class="col-12 col-sm-12 col-md-12 form-group">
                                       <input type="text" class="form-control" id="subject" name="subject"  placeholder="Pick Your Subject">
                                   </div>
                                   <div class="col-12 col-sm-12 col-md-12 form-group">
                                       <textarea class="form-control" id="comment" name="comments" placeholder="Your Comment Wite Here ..."></textarea>
                                   </div>
                                    <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                       <button type="submit" class="text-center">Send Massage</button>
                                   </div>
                               </div>
                           </form>   
                       </div>
                   </div> 
               </div>
          </div>
       </div>
   </div>
</section> <!-- Contact Info Wrappper-->



<section class="contact_map">
   <div class="container-fluid">  
       <div class="row">                  
           <div class="col-12 col-sm-12 col-md-12 col-lg-12 mr-auto p-0">
               <h2 class="disabled">Google Map</h2>
               <div class="google_map">
                   <div class="gmap">
                       <div id="map"></div>
                   </div><!-- Ends: .gmap -->                    
               </div>
          </div>
       </div>
   </div>
</section> <!-- Ends: Google Map Area -->  

    
@endsection
