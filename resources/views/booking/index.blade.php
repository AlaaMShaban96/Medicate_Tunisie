@extends('layouts.master')

@section('head')




<link type="text/css" rel="stylesheet" href="{{asset('booking/css/style.css')}}" />


<title>Medicate Tunis : Booking </title>
@endsection

@section('content')
	
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container container-search">
				<div style="height: 93px; display: flex;">

					<div class="extra-info" style="border-bottom-style: solid;border-color: #d2d0d0;">
						<h1>خدمة العملاء</h1>
					</div>
					<div class="extra-info" style="border-bottom-style: solid;border-color: blue;">
						<h1>كشف طبي</h1>
					</div>
									</div>
				<div class="row rowsearch">
					

					<form action="{{url('/bookingg/search')}}" method="post">
						@csrf
							<div id="search">
								<div id="content">
									
								<div class="item"id="{{Session::get('applocale') === "ar" ? "style_arbic" :"style_english"}}" >
										
									<button type="submit" id="submit-button" >
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
										

								
									</div>
									<div class="item">
								
								
										<div id="dd1" class="wrapper-dropdown-2">المشفائ
											<p id="clinic-select">اختار </p>
											<input type="hidden" name="clinic_id" id="clinic_id">
											<ul class="dropdown">
												@foreach ($clinics as $clinic)
											<li onclick="clinic('{{$clinic->name}}', '{{$clinic->id}}')">{{$clinic->name}}</li>
											@endforeach
											
											</ul>
										</div>
								
									</div>
								
								
									<div class="item" >
									
										<div id="dd2" class="wrapper-dropdown-2">التخصص
											<p id="service-select">اختار </p>
											<input type="hidden" name="service_id" id="service_id">

											<ul class="dropdown">
												@foreach ($services as $service)
												<li onclick="service('{{$service->name}}', '{{$service->id}}')">{{$service->name}}</li>
												@endforeach							
												</ul>
										</div>
								
									
									
									</div>
									{{-- <div class="item" >
									
										<div id="dd3" class="wrapper-dropdown-2">Sign in with
											<ul class="dropdown">
											<li><a href="#"><i class="icon-twitter icon-large"></i>Twitter</a></li>
											<li><a href="#"><i class="icon-github icon-large"></i>Github</a></li>
											<li><a href="#"><i class="icon-facebook icon-large"></i>Facebook</a></li>
											</ul>
										</div>
									</div>--}}
									<div class="item" style="	border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
									
										<input type="text" name="doctor_name" id="" value="" placeholder="Doctor Name">
									
									</div>
								</div>
							</div>
					

					</form>

				</div>
			</div>
		</div>
	</div>

	
	 

	  @if (!empty ( $appointmentAvailables ))

	<div id="sss">  
	  <div class="box">
		<div class="container">
			 <div class=" row">
				@foreach ($appointmentAvailables as $appointmentAvailable)
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				  
						<div class="box-part text-center">
							<div >
											<div class="doctor-img-box">
												<img class="doctor-img" src="data:image/jpeg;base64,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" alt="" >
											</div>
							{{-- <i class="fa fa-instagram fa-3x" aria-hidden="true"></i> --}}
							<div >
						<div class="doctor-descrption ">
							<div class="title ">
								<h4>{{$appointmentAvailable->doctor->name}}</h4>
								<p>استشاريين زراعة وتقويم الاسنان-جامعة عين شمس عضو الجمعية الامريكية لزراعة الاسنان-نيو جيرسي</p>
							</div>
							
							<div class="text">
								
							<div>
								<span><b>المكان :</b></span>
								<span>{{$appointmentAvailable->clinic->name}}</span>
							</div>
							<div>
								<span><b>التخصص :</b></span>
								<span>{{$appointmentAvailable->service->name}}</span>
							</div>
							<div>
								<span><b>سعر الكشف :</b></span>
								<span>2000</span>
							</div>
							<div>
								<span><b>من :</b></span>
								<span>{{\Carbon\Carbon::createFromFormat('H:i:s',$appointmentAvailable->time_from)->format('h:i')}}</span>
								<span><b>الي :</b></span>
								<span>{{\Carbon\Carbon::createFromFormat('H:i:s',$appointmentAvailable->time_to)->format('h:i')}}</span>
							</div>
							
							</div>
							</div>
						</div>
							
							
								{{-- <div class="appointment-booking-btn" style="display: flex;"> --}}


							{{-- @foreach ($appointmentAvailable->days as $day)
								
									<div class="appointment-time">
										<div class="appointment-time-header"> {{$day->name}}</div>
										<div class="appointment-time-body"></div>
										<div class="appointment-time-footer"> احجز</div>
									</div>
									
							@endforeach --}}
							{{-- @for ($i = 0; $i <6; $i++)

								<div class="appointment-time">
									<div class="appointment-time-header"> {{$days[$i]['name']}}</div>
									<div class="appointment-time-body"></div>
									<div class="appointment-time-footer"> {{$days[$i]['id']}}</div>
								</div>

							@endfor --}}
							
{{-- 

								<div class="appointment-time">
									<div class="appointment-time-header"></div>
									<div class="appointment-time-body"></div>
									<div class="appointment-time-footer"></div>
								</div>
								<div class="appointment-time">
									<div class="appointment-time-header"></div>
									<div class="appointment-time-body"></div>
									<div class="appointment-time-footer"></div>
								</div>
								<div class="appointment-time">
									<div class="appointment-time-header"></div>
									<div class="appointment-time-body"></div>
									<div class="appointment-time-footer"></div>
								</div>
								<div class="appointment-time">
									<div class="appointment-time-header"></div>
									<div class="appointment-time-body"></div>
									<div class="appointment-time-footer"></div>
								</div>
								 --}}
								

								<a href="{{url('/booking/appointment/'.$appointmentAvailable->id)}}">حجز موعد</a>
								</div>

						


						 </div>

					

					
						{{-- </div>	  --}}
					</div>	 
				@endforeach
			
			</div>		
		</div>
	</div>
	</div>
	@endif	

	

<!-- Modal -->
<!-- Button trigger modal -->





@endsection

@section('script')
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
<script src="{{asset('js/pages/booking.js')}}"></script>
	<script>


	</script>
@endsection
	  
