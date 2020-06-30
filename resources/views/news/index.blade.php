@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
     
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">

<style>

</style>
<title>Medicate Tunis : News </title>
@endsection

@section('content')

<img id="cover" src="{{asset('img/pages/news.jpg')}}" style="width: 100%;margin-top: 156px;" alt="" >





<div id="ss">
<div class="container-fluid gedf-wrapper">
  <div class="row">


      <div class="col-md-3">
          <div class="card">
              <div class="card-body">
                  <div class="h5">@LeeCross</div>
                  <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                  <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                      etc.
                  </div>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="h6 text-muted">Followers</div>
                      <div class="h5">5.2342</div>
                  </li>
                  <li class="list-group-item">
                      <div class="h6 text-muted">Following</div>
                      <div class="h5">6758</div>
                  </li>
                  <li class="list-group-item">Vestibulum at eros</li>
              </ul>
          </div>
      </div>

      <div class="col-md-6 gedf-main">

          <!--- \\\\\\\Post-->
@switch(Session::get('applocale'))

  @case('ar')
      
          <!-- Post /////-->
    @foreach ($news as $oneNews)
    

          <!--- \\\\\\\Post-->
          <div class="card gedf-card">
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-between align-items-center">
                        
                          <div class="ml-2">
                            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> {{$oneNews->created_at->diffForHumans()}}</div>

                          </div>
                      </div>
                      <div>
                         
                      </div>
                  </div>

              </div>
              <div class="card-body">
                  <a class="card-link" href="#">
                      <h5 class="card-title">{{$oneNews->titel_ar}}</h5>
                  </a>

                  <p class="card-text">
                    {{$oneNews->description_ar}}
                  </p>
              </div>
              <div class="card-footer">
                  {{-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> --}}
                  {{-- <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a> --}}
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
              </div>
          </div>
        
          <!-- Post /////-->
    @endforeach

@break

@case('en')
       
     <!-- Post /////-->
     @foreach ($news as $oneNews)
    

     <!--- \\\\\\\Post-->
     <div class="card gedf-card">
         <div class="card-header">
             <div class="d-flex justify-content-between align-items-center">
                 <div class="d-flex justify-content-between align-items-center">
                   
                     <div class="ml-2">
                       <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> {{$oneNews->created_at->diffForHumans()}}</div>

                     </div>
                 </div>
                 <div>
                    
                 </div>
             </div>

         </div>
         <div class="card-body">
             <a class="card-link" href="#">
                 <h5 class="card-title">{{$oneNews->titel_en}}</h5>
             </a>

             <p class="card-text">
               {{$oneNews->description_en}}
             </p>
         </div>
         <div class="card-footer">
             {{-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> --}}
             {{-- <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a> --}}
             <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
         </div>
     </div>
   
     <!-- Post /////-->
    @endforeach




@break
@default
    
@endswitch

             
      </div>
  </div>
</div>
</div>

@endsection

@section('script')

@endsection