@extends('layouts.pages_layout')

@section('intro_text')
<h1>Courses View</h1>
<div class="pages_links">
    <a href="#" title="">Home</a>
    <a href="#" title="">Course</a>
    <a href="#" title="" class="active">Course View</a>
</div>
@endsection

@section('main')






<!-- video player -->
<div class="container-fluid py-5" style="background-color: #E6E6FA;">
    

   
        
    
    <div class="container-player">
        <div id="mediaPlayer">
            
            <iframe class="w-100 h-100" 
            src="https://www.youtube.com/embed/{{$video}}?rel=0&modestbranding=1" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>


        <div id="playlist">  
            <!-- <div class="row w-100 h-25 playlist-item " >
                
            </div> -->
            
            

            <table class="mdl-data-table mdl-js-data-table mdl-video-table w-100">
                <tbody>

                @foreach ($course['video'] as $item)
                        
                    
                   
                
                        <tr>
                            <td> 
                                <a href="{{route('changevideo',[$item['course_id'], $item])}}">
                                <i class="fas fa-video fa-5x" style="padding-top: 5px;"></i>
                                </a>
                            </td>
                            <td >
                                <a href="{{route('changevideo',[$item['course_id'], $item])}}" class="mdl-navigation__link"> {{$item['name']}}</a>
                            </td>
                    
                        
                        </tr>
                @endforeach

                </tbody>
              </table>
            
            
        </div>

        
    </div>
     

    <div class="container">
    <div class="row  justify-content-around">
        <div class="col-5  text-center">
            @if($previous)
            <a href="{{route('changevideo',[$course['id'], $previous])}}" class="btn previous"><i class="fas fa-angle-left "></i> Previous</a>

            @endif
        </div>
        <div class="col-5  text-center">
            @if($next)
            <a href="{{route('changevideo',[$course['id'], $next])}}" class="btn next">Next <i class="fas fa-angle-right "></i></a>
            @endif
        </div>
    </div>
    </div>

</div>
<!-- End video player -->









    
@endsection
