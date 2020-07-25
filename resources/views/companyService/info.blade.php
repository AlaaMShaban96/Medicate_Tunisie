@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
{{-- <link rel="stylesheet" href="{{asset('css/pages/service.css')}}"> --}}

<title>Medicate Tunis : Info </title>
<style>

   
   #content{
      width: 100%;
      height: auto;
      display: flex;
      margin-top:10%;
      padding: 14px;
   }
   #img ,#text {
      width: 50%;
      height: auto;
   }
   #text {
   padding-top: 4%;
   }
</style>
 
@endsection

@section('content')
{{-- 
<div class="x">
    
</div> --}}
@switch(Session::get('applocale'))
   @case('ar')
         <div id="content">
         
            <div id="text">
               <h1>{{$service->titel_ar }}</h1>
               @php
               echo($service->descrption_ar )
            @endphp
            <br>
            @php
            echo($service->details_ar )
            @endphp
               {{-- <p>{{$service->details_ar }}</p> --}}
            </div>
            <div id="img">
               <img style="width: 65%;" src="{{asset("$service->img_path")}}" alt="" srcset="">
            </div>
         </div>
      @break
   @case('en')
          <div id="content">
   
            <div id="text">
               <h1>{{$service->titel_en }}</h1>
               @php
               echo($service->descrption_en )
            @endphp
            <br>
            @php
            echo($service->details_en )
            @endphp
               {{-- <p>{{$service->details_ar }}</p> --}}
            </div>
            <div id="img">
               <img style="width: 65%;" src="{{asset("$service->img_path")}}" alt="" srcset="">
            </div>
         </div>
      @break
   @case('fr')
         <div id="content">
         
            <div id="text">
               <h1>{{$service->titel_fr }}</h1>
               @php
               echo($service->descrption_fr )
            @endphp
            <br>
            @php
            echo($service->details_fr )
            @endphp
               {{-- <p>{{$service->details_ar }}</p> --}}
            </div>
            <div id="img">
               <img style="width: 65%;" src="{{asset("$service->img_path")}}" alt="" srcset="">
            </div>
         </div>
      @break
@endswitch



@endsection

@section('script')
   <script src="{{asset('js/pages/service.js')}}"></script>
@endsection