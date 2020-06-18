@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">
{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"> --}}
{{-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/"> --}}

<title>Medicate Tunis : News </title>
@endsection

@section('content')

<img id="cover" src="{{asset('img/pages/news.jpg')}}" style="width: 100%;margin-top: 156px;" alt="" >


@switch(Session::get('applocale'))
    @case('ar')

    <div class="carousel-inner">
      <div class="item active" >
    
        <h1 class="h-bold text-center " >Our News Today</h1>
     
        @foreach ($news as $oneNews)
            
    
      
          <div class="col-md-4 col-sm-6" >
              <div id="item-news"  class="block-text rel zmin" >
           
              <div >
                    {{$oneNews->created_at->diffForHumans()}}
                <br>
                <span >
                  <i>
                    {{$oneNews->titel_ar}}
                  </i>
                </span>
               
              </div>
              <p> {{$oneNews->description_ar}}</p>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              <a href="{{url('/news/'.$oneNews->id)}}"> المزيد</a>
              </div>
             
    
           </div>    
          
          @endforeach
       
      </div> 
    </div>           
    
        @break
    @case('en')
        
    
    <div class="carousel-inner">
      <div class="item active" >
    
        <h1 class="h-bold text-center " >Our News Today</h1>
     
        @foreach ($news as $oneNews)
            
    
      
          <div class="col-md-4 col-sm-6" >
              <div id="item-news"  class="block-text rel zmin" >
           
              <div >
                    {{$oneNews->created_at->diffForHumans()}}
                <br>
                <span >
                  <i>
                    {{$oneNews->titel_en}}
                  </i>
                </span>
               
              </div>
              <p> {{$oneNews->description_en}}</p>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              <a href="{{url('/news/'.$oneNews->id)}}"> more ...</a>
              </div>
             
    
           </div>    
          
          @endforeach
       
      </div> 
    </div>           
    
        @break
    @default
        
@endswitch


@endsection

@section('script')

@endsection