@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')
@section('head')
<link rel="stylesheet" href="{{asset('css/pages/internationalCard.css')}}">
<style>

	#servicee{
		margin-top: 20%;
	}
</style>
@endsection
@section('content')
<div id="servicee">

<h1>internationalCard</h1>
</div>


@endsection
@section('script')
<script src="{{asset('js/pages/internationalCard.js')}}"></script>

@endsection