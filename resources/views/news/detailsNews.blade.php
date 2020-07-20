@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
     
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">

<style>
#content{
	display:flex;
	
}
.content-item{
	/* width: 50%;
	height: 500px; */
	/* text-align: center; */
	padding: 9px;
}
</style>
<title>Medicate Tunis : News </title>
@endsection

@section('content')


<div style="margin-top: 156px;">
	
	<div id="content">
		<div class="content-item" style="width: 50%">

			<h5>{{$news->titel_ar}}</h5><br>
			<p class="card-text">
				{{$news->description_ar}}
			  </p>
		</div>
		<div class="content-item" >
		    <img src="{{asset("$news->img_path")}}" width="100%" height="229px" alt="" srcset="">

		</div>
	</div>


</div>


@endsection

@section('script')

@endsection