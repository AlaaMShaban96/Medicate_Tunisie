@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')

 

<link rel="stylesheet" href="{{asset('css/pages/find_us.css')}}">
<title>Medicate Tunis : Find Us</title>

@endsection

@section('content')



<img id="cover" src="{{'img/pages/find-us.png'}}" style="width: 100%;margin-top: 130px;" alt="" >
<div id="xx">
	<div class="container">

	<h1 class="text-center"> {{__('find_us.find_us')}} </h1>
		<div class="row"> 
		<!--team-4--> 
			<div class="col-lg-4">
				<div class="our-team-main">
				
					<div class="team-front">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/2000px-Flag_of_Libya.svg.png"  class="img-fluid" />
						<h3>{{__('find_us.libya_titel')}}</h3>
						{{-- <p>Web Designer</p> --}}
					</div>
					
					<div class="team-back">
						<span>
							{{__('find_us.libya_discription')}}
							<br>
							<b>Tel: +973 1 7382721</b><br>
							<b>Fax: +973 1 7382082</b><br>
							
							Email: nextcare@nextcarehealth.com
						</span>
						<br>
						<a href="">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>

					</div>
				
				</div>
			</div>
			<!--team-4-->
			<div class="col-lg-4">
				<div class="our-team-main">
	
				<div class="team-front">
					<img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" class="img-fluid" />
					<h3>Turkey</h3>
					{{-- <p>Web Designer</p> --}}
				</div>
	
				<div class="team-back">
					<span>
						<p>
							Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
						</p>
						<b>Tel: +973 1 7382721</b><br>
						<b>Fax: +973 1 7382082</b><br>
						<p>P.O.Box 18442 Manama, Kingdom of Bahrain
						Email: nextcare@nextcarehealth.com</p>
					</span>
					<br>
						<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>
				</div>
	
				</div>
			</div>
		<!--team-1-->
		

		<!--team-2-->
			<div class="col-lg-4">
				<div class="our-team-main">

					<div class="team-front">
						<img src="https://flagpedia.net/data/flags/vector/tn.svg"   class="img-fluid" />
						<h3>Tunisia</h3>
					{{-- <p>Web Designer</p> --}}
					</div>

				<div class="team-back">
					<span>
						<p>
							Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
						</p>
						<b>Tel: +973 1 7382721</b><br>
						<b>Fax: +973 1 7382082</b><br>
						<p>P.O.Box 18442 Manama, Kingdom of Bahrain
						Email: nextcare@nextcarehealth.com</p>
					</span>
					<br>
						<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>
				</div>

				</div>
			</div>
		<!--team-2-->

		<!--team-3-->
			<div class="col-lg-4">
				<div class="our-team-main">

					<div class="team-front">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/800px-Flag_of_Algeria.svg.png"  class="img-fluid" />
						<h3>Algeria</h3>
						{{-- <p>Web Designer</p> --}}
					</div>

					<div class="team-back">
						<span>
							<p>
								Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
							</p>
							<b>Tel: +973 1 7382721</b><br>
							<b>Fax: +973 1 7382082</b><br>
							<p>P.O.Box 18442 Manama, Kingdom of Bahrain
							Email: nextcare@nextcarehealth.com</p>
						</span>
						<br>
						<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>
					</div>

				</div>
			</div>
		<!--team-3-->



		<!--team-5-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" class="img-fluid" />
					<h3>Germany</h3>
				{{-- <p>Web Designer</p> --}}
				</div>

				<div class="team-back">
					<span>
						<p>
							Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
						</p>
						<b>Tel: +973 1 7382721</b><br>
						<b>Fax: +973 1 7382082</b><br>
						<p>P.O.Box 18442 Manama, Kingdom of Bahrain
						Email: nextcare@nextcarehealth.com</p>
					</span>
					<br>
						<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>
				</div>

			</div>
		</div>
		<!--team-5-->
		<div class="col-lg-4">
			<div class="our-team-main">

			<div class="team-front">
				<img src="https://cdn.webshopapp.com/shops/94414/files/53852256/egypt-flag-image-free-download.jpg"  class="img-fluid" />
				<h3>Egypt</h3>
				{{-- <p>Web Designer</p> --}}
			</div>

			<div class="team-back">
				<span>
					<p>
						Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
					</p>
					<b>Tel: +973 1 7382721</b><br>
					<b>Fax: +973 1 7382082</b><br>
					<p>P.O.Box 18442 Manama, Kingdom of Bahrain
					Email: nextcare@nextcarehealth.com</p>
				</span>
				

				<br>
						<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
							{{__('find_us.maps')}}
						</a>
			</div>

			</div>
		</div>
	<!--team-1-->
		<!--team-6-->
	
		<!--team-6-->



		</div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"style="display: inline-flex;">Contact Us</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				X
		  </button>
		</div>
		<div class="modal-body">
			<form>
				<div class="form-group">
				  <label for="exampleFormControlInput1">Email address</label>
				  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="yourEmail@example.com">
				</div>
				<div class="form-group">
				  <label for="exampleFormControlSelect1"> select Country</label>
				  <select class="form-control" id="exampleFormControlSelect1">
					<option>Libya</option>
					<option>Tunisia</option>
					<option>Turkey</option>
					<option>Algeria</option>
					<option>Germany</option>
					<option>Egypt</option>
				  </select>
				</div>
				
				<div class="form-group">
				  <label for="exampleFormControlTextarea1">Area</label>
				  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write your Problem" rows="3"></textarea>
				</div>
			  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Send Report</button>
		</div>
	  </div>
	</div>
  </div>
@endsection

@section('script')
 
@endsection