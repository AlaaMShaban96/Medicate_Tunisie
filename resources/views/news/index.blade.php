@extends('layouts.master')

@section('head')

<title>Medicate Tunis : News </title>
@endsection

@section('content')

<img id="cover" src="{{asset('img/pages/news.jpg')}}" style="width: 100%;margin-top: 156px;" alt="" >

<div class="carousel-inner">
    <div class="item active" >

      <h1 class="h-bold text-center " >Our News Today</h1>
      {{-- @for ($i = 0; $i < 4; $i++) --}}
      @foreach ($news as $oneNews)
          
 
    <a href="{{url('/news/'.$oneNews->id)}}">
        <div class="col-md-4 col-sm-6" >
            <div class="block-text rel zmin" >
            {{-- <a title="" href="#">Emergency Contraception</a> --}}
            <div >
                {{$oneNews->created_at}}
            <br>
            <span >
            
            {{$oneNews->titel_ar}}
            </span>
            </div>
            <p> {{$oneNews->description_ar}}</p>
            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
      
         </div>    
        </a>
        @endforeach
      {{-- @endfor --}}
    </div> 
                

@endsection

@section('script')
 
@endsection