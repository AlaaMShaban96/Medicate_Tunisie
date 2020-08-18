@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
     
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">
<link rel="stylesheet" href="{{asset('css/pages/customerCare.css')}}">

<style>

</style>
<title>Medicate Tunis : News </title>
@endsection

@section('content')
<div id="complaint">
<section  id="cover" >
<div id="bg-text">
	<h3>{{__('customerCare/master.customer_care')}}/{{__('customerCare/suggestion.suggestion')}} </h3>
	<img src="{{asset('img/unnamed.png')}}" alt="" srcset="">
	<br>
	<br> 
	<br>
	<h1>{{__('customerCare/suggestion.suggestion')}}</h1>
	<p>
		{{__('customerCare/suggestion.descrption')}}
	</p>
</div>
</section>

<section>

	<div >
		@if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
				{{ Session::get('message') }}
			</p>
		@endif

		<form class="cf" action="{{url('/send-suggestion')}}" method="post">
			@csrf
		<div class="half left cf">
			@error('name')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="text" id="input-name" name="name" placeholder="{{__('customerCare/master.name')}}">

			@error('cardnumber')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-cardnumber" name="cardnumber"  placeholder="{{__('customerCare/master.cardNumber')}}">

			@error('mobileNo')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-mobileNo" name="mobileNo" placeholder="{{__('customerCare/master.mobileNumber')}}">

			@error('email')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="email" id="input-email" name="email" placeholder="{{__('customerCare/master.email')}}">
			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}
			@error('drone')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<p>{{__('customerCare/suggestion.sendAbut')}}</p>

			
			<div class="radio">
			
			<input type="radio" id="huey" name="drone" value="{{__('customerCare/master.department')}}"
					checked>
			<label for="huey">{{__('customerCare/master.department')}}</label>
			</div>

			<div class="radio">
			<input type="radio" id="dewey" name="drone" value="{{__('customerCare/master.another')}}">
			<label for="dewey">{{__('customerCare/master.another')}}</label>
			</div>

			@error('file')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<input type="file" name="file" id="">
			<label for="">{{__('customerCare/master.uplade')}}</label>
		</div>
		<div class="half right cf">
			@error('message')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<textarea name="message" type="text" id="input-message" placeholder="{{__('customerCare/master.message')}}"></textarea>
		</div>  
		<input id="submit" type="submit" value="{{__('customerCare/suggestion.send')}}" id="input-submit">
		</form>
	</div>
</section>

</div>
@endsection