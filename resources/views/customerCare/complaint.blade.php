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
	<h3>{{__('customerCare/master.customer_care')}}/  {{__('customerCare/complaint.complaint')}}</h3>
	
	<img src="{{asset('img/complaints.png')}}" alt="" srcset="">
	<br>
	<br>
	<br>
	<h1>  {{__('customerCare/complaint.complaint')}}</h1>
	<p>
		{{__('customerCare/complaint.complaint')}}	</p>
</div>
</section>

<section>

	<div >
		@if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
				{{ Session::get('message') }}
			</p>
		@endif
		<form class="cf" action="{{url('/send-complaint')}}" method="post">
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
			<input type="text" id="input-email" name="email" placeholder=" {{__('customerCare/master.email')}}">
			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}
			@error('aboutcomplaints')
			<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<select name="aboutcomplaints" id=""  >
				<option >   {{__('customerCare/complaint.sendAbut')}}</option>
				<option value="{{__('customerCare/complaint.medicalServiceProvider')}}">{{__('customerCare/complaint.medicalServiceProvider')}}</option>
				<option value="{{__('customerCare/complaint.medicalTeam')}}">{{__('customerCare/complaint.medicalTeam')}}</option>
				<option value="{{__('customerCare/complaint.medicateTeam')}}">{{__('customerCare/complaint.medicateTeam')}}</option>
				<option value="{{__('customerCare/complaint.other')}}">{{__('customerCare/complaint.other')}}</option>
			</select>
			@error('img')
			<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="file" name="img" id="">
			<label for="">{{__('customerCare/master.uplade')}}</label>
		</div>
		
		<div class="half right cf">
			@error('message')
			<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<textarea name="message" type="text" id="input-message" placeholder="{{__('customerCare/complaint.message')}}"></textarea>
		</div>  
		<input id="submit" type="submit" value="{{__('customerCare/complaint.send')}}" id="input-submit">
	</form>
	</div>
</section>

</div>
@endsection