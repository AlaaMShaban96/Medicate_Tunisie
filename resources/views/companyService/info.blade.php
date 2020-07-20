@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
{{-- <link rel="stylesheet" href="{{asset('css/pages/service.css')}}"> --}}

<title>Medicate Tunis : Info </title>
   <style>

.x{
    margin-top:20%;
    padding: 14px;
}


   </style>
 
@endsection

@section('content')

<div class="x">
    <h1>{{$service->titel_ar }}</h1>
    <p>{{$service->descrption_ar}}</p>
    <p>{{$service->details_ar }}</p>
</div>



@endsection

@section('script')
   <script src="{{asset('js/pages/service.js')}}"></script>
@endsection