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
						
							
								{{-- <ul>
									<li>{{__('service.healthcare_identity_details_part_1')}}</li>
									<li> {{__('service.healthcare_identity_details_part_2')}}</li>
									<li> {{__('service.healthcare_identity_details_part_3')}}</li>
								</ul> --}}
							</div>
						
						 </div>
					</div>	
				@endforeach	 
				{{-- ////
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
                        <i class="fa fa-heartbeat fa-5x icon-color" aria-hidden="true"></i>
							<div class="title">
								<h4>{{__('service.school_health')}}</h4>
							</div>
							
							<div class="text">
                {{__('service.school_health_details')}}
              </div>
							
					
							
						 </div>
					</div>	 
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
                        <i class="fa fa-percent fa-5x icon-color" aria-hidden="true"></i>
							<div class="title">
								<h4>{{__('service.discounts_on_services')}}</h4>
							</div>
							
							<div class="text">
               <ul>
                 <li>{{__('service.discounts_on_services_details_part_1')}}</li>
                 <li>{{__('service.discounts_on_services_details_part_2')}}</li>
                 <li>{{__('service.discounts_on_services_details_part_3')}}</li>
               </ul>          
							</div>
							
					
							
						 </div>
					</div>	 
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
                        <i class="fa fa-globe fa-5x icon-color"></i>
							<div class="title">
								<h4>{{__('service.health_education')}}</h4>
							</div>
							
							<div class="text">
               <p>{{__('service.health_education_details')}}</p>
               <ul>
                 <li>{{__('service.health_education_details_part_1')}}</li>
                 <li>{{__('service.health_education_details_part_2')}}</li>
               </ul>
							</div>
							
					
							
						 </div>
					</div>	 
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
                        <i class="fa fa-cloud fa-5x icon-color"></i>
							<div class="title">
								<h4>{{__('service.eHR_services')}}</h4>
							</div>
							
							<div class="text">
                <p>{{__('service.eHR_services_details')}}</p>       
							</div>
							
					
							
						 </div>
					</div>	 
				
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				   
						<div class="box-part text-center">
                        <i class="fa fa-wifi fa-5x icon-color"></i>
							<div class="title">
								<h4>{{__('service.network_ecosystem')}}</h4>
							</div>
							
							<div class="text">
                      <p>{{__('service.network_ecosystem_details')}}</p> 
                      <ul>
                        <li>{{__('service.network_ecosystem_details_part_1')}}</li>
                        <li>{{__('service.network_ecosystem_details_part_2')}}</li>
                        <li>{{__('service.network_ecosystem_details_part_3')}}</li>
                      </ul>
							</div>
							
					
							
						 </div>
					</div>	  --}}
				
			
			</div>		
		</div>
	</div>
</div>


@endsection

@section('script')
   <script src="{{asset('js/pages/service.js')}}"></script>
@endsection