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
</style>
<title>Medicate Tunis : News </title>
@endsection

@section('content')
<div id="complaint">
<section  id="cover" >
<div id="bg-text">
	<h3>العناية بالعملاء/إبلاغ عن إحتيال</h3>

	<img src="https://www.wirtshausfreunde.de/images/mail.png" alt="" srcset="">
	<h1>إبلاغ عن إحتيال</h1>
	<p>الإبلاغ عن الاحتيال أو الإساءة سوف يساعدنا على حماية حقوقك ومزايا التأمين الصحي الخاصة بك. كن مطمئنا فجميع البيانات التي تزودنا بها سرية وسوف تعامل على أنها من مصدر مجهول </p>
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
			<input type="text" id="input-name" name="name" placeholder=" الاسم الكامل">

		
			<input type="text" id="input-name" name="companeName" placeholder=" اسم الشركة (اختياري)">

			@error('cardnumber')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<input type="number" id="input-cardnumber" name="cardnumber" placeholder="رقم العضوية (للأعضاء الحاليين فقط)">

		
		
			{{-- <input type="text" id="input-subject" placeholder="Subject"> --}}
			@error('descriptionUcondition')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<select name="descriptionUcondition" id="" >
				<option >الوصف الاقرب الي حالتك</option>
				<option value="انا ضحيةإحتيال او إساءة">انا ضحيةإحتيال او إساءة</option>
				<option value="أنا أبلغ عن إساءة أو احتيال تعرض لها شخص آخر">أنا أبلغ عن إساءة أو احتيال تعرض لها شخص آخر</option>
				<option value="أنا أمثل شركة أو مؤسسة كانت ضحية لاحتيال أو إساءة">أنا أمثل شركة أو مؤسسة كانت ضحية لاحتيال أو إساءة</option>
				<option value="أنا شاهد على احتيال أو إساءة">أنا شاهد على احتيال أو إساءة</option>
				<option value="اخري">اخري</option>
			</select>

			@error('report')
				<label class=" alert-danger">{{ $message }}</label>
			@enderror
			<select name="report" id="" >
				<option >أود أن  أبلغ عن  (اختياري):</option>
				<option value="مقدم الخدمة الطبية">مقدم الخدمة الطبية</option>
				<option value="الطبيب">الطبيب</option>
				<option value="العضو">العضو</option>
				<option value="الشركة">الشركة</option>
				<option value="البائع">البائع</option>
				<option value="اخري">اخري</option>
			</select>

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
		<input id="submit" type="submit" value="Submit" id="input-submit">
		</form>
	</div>
</section>

</div>
@endsection