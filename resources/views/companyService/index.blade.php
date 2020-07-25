@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="{{asset('css/pages/service.css')}}">

<title>Medicate Tunis : Service </title>
   <style>




   </style>
 
@endsection

@section('content')


<div id="servicee">
@switch(Session::get('applocale'))

	@case('ar')
		<div class="box">
			<div class="container">
				<div class="row">
				
					@foreach ($companyServices as $service)
						
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					
							<div class="box-part text-center">
							<img style="width: 32%;" src="{{asset("$service->img_path")}}" alt="">
								<div class="title">
									<h4>{{$service->titel_ar }}</h4>
								
								</div>
								
								<div class="text">
									
									@php
									echo($service->details_ar )
								@endphp
							
								
								
								</div>
							
							</div>
						</div>	
					@endforeach	 
				
					
				
				</div>		
			</div>
		</div>
	 @break
	@case('en')
		<div class="box">
			<div class="container">
				<div class="row">
				
					@foreach ($companyServices as $service)
						
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					
							<div class="box-part text-center">
							<img style="width: 32%;" src="{{asset("$service->img_path")}}" alt="">
								<div class="title">
									<h4>{{$service->titel_en }}</h4>
								
								</div>
								
								<div class="text">
									
									@php
									echo($service->details_en )
								@endphp
							
								
								
								</div>
							
							</div>
						</div>	
					@endforeach	 
				
					
				
				</div>		
			</div>
		</div>
	 @break
	@case('fr')
		<div class="box">
			<div class="container">
				<div class="row">
				
					@foreach ($companyServices as $service)
						
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					
							<div class="box-part text-center">
							<img style="width: 32%;" src="{{asset("$service->img_path")}}" alt="">
								<div class="title">
									<h4>{{$service->titel_fr }}</h4>
								
								</div>
								
								<div class="text">
									
									@php
									echo($service->details_fr )
								@endphp
							
								
								
								</div>
							
							</div>
						</div>	
					@endforeach	 
				
					
				
				</div>		
			</div>
		</div>
	@break
@endswitch
</div>


@endsection

@section('script')
   <script src="{{asset('js/pages/service.js')}}"></script>
@endsection