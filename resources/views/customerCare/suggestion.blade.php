@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
     
<link rel="stylesheet" href="{{asset('css/pages/news/index.css')}}">

<style>
#complaint{
	margin-top: 10%;
	text-align: center;
}



form {
	max-width: 600px;
	text-align: center;
	margin: 20px auto;
	border-width: 1px;
	border-style: solid;
	padding: 10px;
	border-color: #18a8aa63;
	border-radius: 18px;
  

  }
  input, textarea , select {
	/* border:0; */
	outline:0;
	padding: 1em;
	
	display: block;
	width: 100%;
	margin-top: 1em;
	font-family: 'Merriweather', sans-serif;
	resize: none;
	border-radius: 9px;
	border-width: 1px;
	border-style: solid;
    
   
  }
  select:focus ,textarea:focus,input:focus{
	  /* background-color: red; */
	  border-color: #18a8aa;
  }
  
#submit:hover{
background-color: #18a8aa;
color: white;
}
  
  textarea {
      height: 439px;
  }



.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right { width: 50%; }

.left {
     margin-right: 2%; 
}


@media (max-width: 480px) {
  .half {
     width: 100%; 
     float: none;
     margin-bottom: 0; 
  }
}


/* Clearfix */
.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}
#cover{
	/* background-image: url('https://www.hlb.com.my/content/dam/hlb/hk/images/contact-us/contact-us-banner.jpeg'); */
	/* background-attachment: fixed; */
	background-repeat: no-repeat;
	background-size: cover;
	/* backdrop-filter: blur(5px); */
	/* -webkit-filter: blur(8px);x`x` */
}
#bg-text{
	
}
.radio{
	text-align: start;
	
}
</style>
<title>Medicate Tunis : News </title>
@endsection

@section('content')
<div id="complaint">
<section  id="cover" >
<div id="bg-text">
	<h3>العناية بالعملاء/تقديم إقتراح</h3>
	<img src="{{asset('img/unnamed.png')}}" alt="" srcset="">
	<br>
	<br>
	<br>	<h1>تقديم إقتراح</h1>
	<p>إذا كنت ترى أن هناك خدمة يمكننا تطويرها أو تريد أن تقترح علينا منتج جديد نرجو أن تتواصل معنا. فنحن نحرص دوماً على توفير أفضل عناية لعملائنا. </p>
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
			<input type="text" id="input-name" name="name" placeholder="الاسم">

			@error('cardnumber')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-cardnumber" name="cardnumber"  placeholder="رقم العضوية (للأعضاء الحاليين فقط)">

			@error('mobileNo')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-mobileNo" name="mobileNo" placeholder="الجوال">

			@error('email')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="email" id="input-email" name="email" placeholder="البريد اﻹلكتروني">
			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}
			@error('drone')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<p>أريد أن أرسل رأيي عن</p>

			
			<div class="radio">
			
			<input type="radio" id="huey" name="drone" value="القسم"
					checked>
			<label for="huey">القسم</label>
			</div>

			<div class="radio">
			<input type="radio" id="dewey" name="drone" value="المنتج / الخدمة">
			<label for="dewey">المنتج / الخدمة</label>
			</div>

			@error('file')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<input type="file" name="file" id="">
			<label for="">إضافة ملف</label>
		</div>
		<div class="half right cf">
			@error('message')
			<label class=" alert-danger">{{ $message }}</label>
		   @enderror
			<textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
		</div>  
		<input id="submit" type="submit" value="تقديم اقتراح" id="input-submit">
		</form>
	</div>
</section>

</div>
@endsection