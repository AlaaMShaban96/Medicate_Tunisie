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

<img id="cover" src="{{asset('img/pages/news.jpg')}}" style="width: 100%;margin-top: 130px;" alt="" >





<div id="ss">
<div class="container-fluid gedf-wrapper">
  <div class="row">

      <div class="col-md-3">
          <div class="card">
              <div class="card-body">

                <div class="fb-page" 
                data-href="https://www.facebook.com/MedicateTPA/?_rdc=2&_rdr"
                data-width="380" 
                data-hide-cover="false"
                data-show-facepile="false"></div>

              </div>
              <div class="card-body">

                {{-- <a class="twitter-timeline" data-lang="en" data-height="300" data-theme="light" >Tweets by TwitterDev</a>  --}}
                <a class="twitter-timeline" data-lang="en" data-height="300" data-theme="light" href="https://twitter.com/MedicateTPA">Tweets by TwitterDev</a> 
              </div>
              <div class="card-body">
                <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="ala-mohammed-abid-41172297"><a class="LI-simple-link" href='https://ly.linkedin.com/in/ala-mohammed-abid-41172297?trk=profile-badge'>Ala Mohammed Abid</a></div>
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

      <div class="col-md-6 gedf-main" id="news-content-cover" >

        
@switch(Session::get('applocale'))

  @case('ar')
      
         
    @foreach ($news as $oneNews)
    <div style="display: flex;">
    <div id="img-cover-news" style="">

    <img src="{{asset("$oneNews->img_path")}}" width="100%" height="229px" alt="" srcset="">
    </div>
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
                <a class="card-link" href="{{url('/news/'.$oneNews->id)}}">
                      <h5 class="card-title">{{$oneNews->titel_ar}}</h5>
                  </a>

                  <p class="card-text">
                    {{$oneNews->description_ar}}
                  </p>
              </div>
              <div class="card-footer">
                  {{-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> --}}
                  {{-- <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a> --}}
                  <a href="https://www.facebook.com/sharer/sharer.php?u={{url("/news")}}" class="card-link"  target="_blank"><i class="fa fa-mail-forward"></i> مشاركة علي الفيس بوك</a>
                </div>
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
         <a href="https://www.facebook.com/sharer/sharer.php?u={{url("/news")}}" class="card-link"  target="_blank"><i class="fa fa-mail-forward"></i> Share on facebook </a>
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
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '278462426856837',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v7.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
@endsection