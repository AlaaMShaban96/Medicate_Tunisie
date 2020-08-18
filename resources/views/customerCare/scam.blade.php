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
	<h3>{{__('customerCare/master.customer_care')}}/{{__('customerCare/scam.reportFraud')}}</h3>

	<img src="https://www.wirtshausfreunde.de/images/mail.png" alt="" srcset="">
	<h1>{{__('customerCare/scam.reportFraud')}}</h1>
	<p>
		{{__('customerCare/scam.descrption')}}
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
		<form class="cf" action="{{url('/send-scam')}}" method="post">
			@csrf
		<div class="half left cf">
			@error('name')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="text" id="input-name" name="name" placeholder="{{__('customerCare/master.name')}}">

		
			<input type="text" id="input-name" name="companeName" placeholder="{{__('customerCare/scam.companyName')}}">

			@error('cardnumber')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-cardnumber" name="cardnumber" placeholder="{{__('customerCare/master.cardNumber')}}">

		
		
			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}
			@error('descriptionUcondition')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<select name="descriptionUcondition" id="" >
				<option >{{__('customerCare/scam.yourDescrption')}}</option>
				<option value="{{__('customerCare/scam.yourDescrption_optional_1')}}">{{__('customerCare/scam.yourDescrption_optional_1')}}</option>
				<option value="{{__('customerCare/scam.yourDescrption_optional_2')}}">{{__('customerCare/scam.yourDescrption_optional_2')}}</option>
				<option value="{{__('customerCare/scam.yourDescrption_optional_3')}}">{{__('customerCare/scam.yourDescrption_optional_3')}}</option>
				<option value="{{__('customerCare/scam.yourDescrption_optional_4')}}">{{__('customerCare/scam.yourDescrption_optional_4')}}</option>
				<option value="{{__('customerCare/scam.other')}}">{{__('customerCare/scam.other')}}</option>
			</select>

			@error('report')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<select name="report" id="" >
				<option >{{__('customerCare/scam.sendAbut')}}</option>
				<option value="{{__('customerCare/scam.sendAbut_optional_1')}}">{{__('customerCare/scam.sendAbut_optional_1')}}</option>
				<option value="{{__('customerCare/scam.sendAbut_optional_2')}}">{{__('customerCare/scam.sendAbut_optional_2')}}</option>
				<option value="{{__('customerCare/scam.sendAbut_optional_3')}}">{{__('customerCare/scam.sendAbut_optional_3')}}</option>
				<option value="{{__('customerCare/scam.sendAbut_optional_4')}}">{{__('customerCare/scam.sendAbut_optional_4')}}</option>
				<option value="{{__('customerCare/scam.sendAbut_optional_5')}}">{{__('customerCare/scam.sendAbut_optional_5')}}</option>
				<option value="{{__('customerCare/scam.other')}}">{{__('customerCare/scam.other')}}</option>
			</select>

			@error('file')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="file" name="file" id="">
			<label for=""> {{__('customerCare/master.uplade')}}</label>
		</div>
		<div class="half right cf">

			@error('message')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<textarea name="message" type="text" id="input-message" placeholder="{{__('customerCare/master.message')}}"></textarea>
		</div>  
		<input id="submit" type="submit" value="{{__('customerCare/scam.send')}}" id="input-submit">
		</form>
	</div>
</section>

</div>
@endsection