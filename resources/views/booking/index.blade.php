@extends('layouts.master')

@section('head')



<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('booking/css/bootstrap.min.css')}}" />

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('booking/css/style.css')}}" />

<title>Medicate Tunis : Booking </title>
@endsection

@section('content')
	
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form" style="width: 100%;" >
						<form>
							<div class="row">
								<div class="col-md-2 col-sm-6">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle search-bt search-bt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-stethoscope fa-2x icon-style" aria-hidden="true"></i>
											<label for="">Specialty</label> <br>
											{{-- <i class="fa fa-user-md" aria-hidden="true"></i> --}}
											
											<span>Choose specialty</span>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										  <a class="dropdown-item" href="#">Action</a>
										  <a class="dropdown-item" href="#">Another action</a>
										  <a class="dropdown-item" href="#">Something else here</a>
										</div>
									  </div>
								</div>
								<div class="col-md-2 col-sm-6">
									

									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle search-bt search-bt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-map-marker fa-2x icon-style" aria-hidden="true"></i>
											<label for="">City</label> <br>
											Choose city
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										  <a class="dropdown-item" href="#">Action</a>
										  <a class="dropdown-item" href="#">Another action</a>
										  <a class="dropdown-item" href="#">Something else here</a>
										</div>
									  </div>
								</div>
							
								<div class="col-md-2 col-sm-6">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle search-bt search-bt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-map-marker fa-2x icon-style" aria-hidden="true"></i>

											<label for="">Area</label> <br>
											Choose area
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										  <a class="dropdown-item" href="#">Action</a>
										  <a class="dropdown-item" href="#">Another action</a>
										  <a class="dropdown-item" href="#">Something else here</a>
										</div>
									  </div>
								</div>
								<div class="col-md-2 col-sm-6">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle search-bt search-bt " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-umbrella fa-2x icon-style" aria-hidden="true"></i>

											<label for="">My insurance </label> <br>
											Choose insurance
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										  <a class="dropdown-item" href="#">Action</a>
										  <a class="dropdown-item" href="#">Another action</a>
										  <a class="dropdown-item" href="#">Something else here</a>
										</div>
									  </div>
								</div>
								<div class="col-md-2 col-sm-6">
									<div class="dropdown">
										
										<button class="btn btn-secondary dropdown-toggle search-bt search-bt " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-user-md fa-2x icon-style" aria-hidden="true"></i>

											<label for=""> search by home</label> <br>
										  Doctor  or hospital
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										  <a class="dropdown-item" href="#">Action</a>
										  <a class="dropdown-item" href="#">Another action</a>
										  <a class="dropdown-item" href="#">Something else here</a>
										</div>
									  </div>
								</div>
						
							</div>
							<div class="row">
							
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Show flights</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="card text-center">
		<div class="card-header">
		  Featured
		</div>
		<div class="card-body" id="cardd">
		  
		<div class="center">
			<div class="row" style="display: flex;">
				
				<div class="card ">
				  <div class="additional">
					<div class="user-card">
					  <div class="level center">
						Level 13
					  </div>
					  
					<img src="data:image/jpeg;base64,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" alt="">
					  <div class="points center">
						5,312 Points
					  </div>
					  <br>
					  <a class="btn btn-primary" href="#" role="button">احجز موعد</a>
					</div>
					<div class="more-info">
					  <h1>Jane Doe</h1>
					  <div class="coords">
						<span>تونس</span>
						<span>
							المكان	<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
						
					  </div>
					  <div class="coords">
						<span>1,000</span>
						<span>
							الكشف <i class="fa fa-money" aria-hidden="true"></i>
						</span>
						
					  </div>
					  <div class="coords">
						<span> دقيقة 33</span>
						<span>
							مدة الﻹنتظار <i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
						
					  </div>
					  <div class="coords">
						<span> 0927780208</span>
						<span>
							رقم الهاتف <i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					  </div>
					
					  <div class="stats">
						<div>
						  <div class="title">Awards</div>
						  <i class="fa fa-trophy"></i>
						  <div class="value">2</div>
						</div>
						<div>
						  <div class="title">Matches</div>
						  <i class="fa fa-gamepad"></i>
						  <div class="value">27</div>
						</div>
						<div>
						  <div class="title">Pals</div>
						  <i class="fa fa-group"></i>
						  <div class="value">123</div>
						</div>
						<div>
						  <div class="title">Coffee</div>
						  <i class="fa fa-coffee"></i>
						  <div class="value infinity">∞</div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="general">
					<h1>دكتور احمد ممدوح حجازى</h1>
					<p>استشاريين زراعة وتقويم الاسنان-جامعة عين شمس عضو الجمعية الامريكية لزراعة الاسنان-نيو جيرسي</p>
					<span class="more">Mouse over the card for more info</span>
				  </div>
				</div>
			  

				<div class="card ">
				  <div class="additional">
					<div class="user-card">
					  <div class="level center">
						Level 13
					  </div>
					  
					<img src="data:image/jpeg;base64,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" alt="" srcset="">
					  <div class="points center">
						5,312 Points
					  </div>
					  <br>
					  <a class="btn btn-primary" href="#" role="button">احجز موعد</a>
					</div>
					<div class="more-info">
						<h1>Jane Doe</h1>
						<div class="coords">
						  <span>تونس</span>
						  <span>
							  المكان	<i class="fa fa-map-marker" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span>1,000</span>
						  <span>
							  الكشف <i class="fa fa-money" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span> دقيقة 33</span>
						  <span>
							  مدة الﻹنتظار <i class="fa fa-clock-o" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span> 0927780208</span>
						  <span>
							  رقم الهاتف <i class="fa fa-phone" aria-hidden="true"></i>
						  </span>
						</div>
					  
						<div class="stats">
						  <div>
							<div class="title">Awards</div>
							<i class="fa fa-trophy"></i>
							<div class="value">2</div>
						  </div>
						  <div>
							<div class="title">Matches</div>
							<i class="fa fa-gamepad"></i>
							<div class="value">27</div>
						  </div>
						  <div>
							<div class="title">Pals</div>
							<i class="fa fa-group"></i>
							<div class="value">123</div>
						  </div>
						  <div>
							<div class="title">Coffee</div>
							<i class="fa fa-coffee"></i>
							<div class="value infinity">∞</div>
						  </div>
						</div>
					  </div>
				  </div>
				  <div class="general">
					<h1>دكتور احمد ممدوح حجازى</h1>
					<p>استشاريين زراعة وتقويم الاسنان-جامعة عين شمس عضو الجمعية الامريكية لزراعة الاسنان-نيو جيرسي</p>
					<span class="more">Mouse over the card for more info</span>
				  </div>
				</div>
			  
				<div class="card ">
				  <div class="additional">
					<div class="user-card">
					  <div class="level center">
						Level 13
					  </div>
					 
					<img src="data:image/jpeg;base64,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" alt="" srcset="">

					  <div class="points center">
						profile
					  </div>
					  <br>
					  <a class="btn btn-primary" href="#" role="button">احجز موعد</a>
					</div>
					<div class="more-info">
						<h1>Jane Doe</h1>
						<div class="coords">
						  <span>تونس</span>
						  <span>
							  المكان	<i class="fa fa-map-marker" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span>1,000</span>
						  <span>
							  الكشف <i class="fa fa-money" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span> دقيقة 33</span>
						  <span>
							  مدة الﻹنتظار <i class="fa fa-clock-o" aria-hidden="true"></i>
						  </span>
						  
						</div>
						<div class="coords">
						  <span> 0927780208</span>
						  <span>
							  رقم الهاتف <i class="fa fa-phone" aria-hidden="true"></i>
						  </span>
						</div>
					  
						<div class="stats">
						  <div>
							<div class="title">Awards</div>
							<i class="fa fa-trophy"></i>
							<div class="value">2</div>
						  </div>
						  <div>
							<div class="title">Matches</div>
							<i class="fa fa-gamepad"></i>
							<div class="value">27</div>
						  </div>
						  <div>
							<div class="title">Pals</div>
							<i class="fa fa-group"></i>
							<div class="value">123</div>
						  </div>
						  <div>
							<div class="title">Coffee</div>
							<i class="fa fa-coffee"></i>
							<div class="value infinity">∞</div>
						  </div>
						</div>
					  </div>
				  </div>
				  <div class="general">
					<h1>Jane Doe</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
					<span class="more">Mouse over the card for more info</span>
				  </div>
				</div>
			  
			  </div>
		</div>
		</div>
		<div class="card-footer text-muted">
		  2 days ago
		</div>
	  </div>












@endsection

@section('script')
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
	  
