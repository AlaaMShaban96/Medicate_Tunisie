@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')
@section('head')
<link rel="stylesheet" href="{{asset('css/pages/schoolCard.css')}}">
<style>

	#servicee{
		margin-top: 8%;
	}
</style>
@endsection
@section('content')
<div id="servicee">

<img style="width: 100%" src="{{asset('img/pages/service/schoolcardbanner.png')}}" alt="" srcset="">
<h1>welcome</h1>

</div>




@endsection
@section('script')
<script src="{{asset('js/pages/schoolCard.js')}}"></script>
@endsection