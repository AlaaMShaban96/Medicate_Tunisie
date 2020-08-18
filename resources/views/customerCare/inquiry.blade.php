@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
     
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">

<link rel="stylesheet" href="{{asset('css/pages/customerCare.css')}}">
<title>Medicate Tunis : News </title>
@endsection
 
@section('content')
<div id="complaint">
<section  id="cover" >
<div id="bg-text">
	<h3>{{__('customerCare/master.customer_care')}}/  {{__('customerCare/inquiry.inquiry')}}</h3>

	<img src="{{asset('img/comp.png')}}" alt="" srcset="">
	<br>
	<br>
	<br>
	<h1>{{__('customerCare/inquiry.inquiry')}}</h1>
	<p> {{__('customerCare/inquiry.descrption')}}</p>
</div>
</section>

<section>

	<div >
		@if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
				{{ Session::get('message') }}
			</p>
		@endif
		<form class="cf" action="{{url('/send-inquiry')}}" method="post">
			@csrf
		<div class="half left cf">
			@error('name')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			<input type="text" id="input-name" name="name" placeholder="{{__('customerCare/master.name')}}">

			@error('cardnumber')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			<input type="number" id="input-cardnumber" name="cardnumber" placeholder="{{__('customerCare/master.cardNumber')}}">
			@error('mobileNo')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			<input type="number" id="input-mobileNo" name="mobileNo" placeholder="{{__('customerCare/master.mobileNumber')}}">

			@error('email')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			<input type="email" id="input-email" name="email" placeholder="{{__('customerCare/master.email')}}">

			@error('aboutinquiry')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}

			<select name="aboutinquiry" id="" >
				<option >{{__('customerCare/inquiry.sendAbut')}}</option>
				<option value="{{__('customerCare/inquiry.claims')}}">{{__('customerCare/inquiry.claims')}}</option>
				<option value="{{__('customerCare/inquiry.insurance')}}"> {{__('customerCare/inquiry.insurance')}}</option>
				<option value="{{__('customerCare/inquiry.other')}}">{{__('customerCare/inquiry.other')}}</option>
			</select>
			<input type="file" name="" id="">
			<label for="">{{__('customerCare/master.uplade')}}</label>
		</div>
		<div class="half right cf">
			@error('message')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror

			<textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
		</div>  
		<input id="submit" type="submit" value="{{__('customerCare/inquiry.send')}}" id="input-submit">
		</form>
	</div>
</section>

</div>
@endsection