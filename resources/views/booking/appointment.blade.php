@extends('layouts.master')

@section('head')



<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{asset('booking/css/bootstrap.min.css')}}" />

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset('booking/css/style.css')}}" />
<style>
	#cardd{
		  padding-top: 15%;
          display: flex;
          padding-bottom: 5%;
	  }
      img {
          width: 100%;
      }
.well-block {
    background-color: #6b6d701a;
    border: 1px solid #3f567e;
    padding: 40px;
    border-top-width: 33px;
    padding-top: 0px;
    padding-bottom: 1px;
    border-bottom-width: 0px;
border-left-width: 0px;
border-right-width: 0px;
}
@media (max-width: 767px){
  #cardd{
    padding-top: 50%;
  }
}
.well-title {
    margin-bottom: 40px;
}
  </style>

<title>Medicate Tunis : Booking </title>
@endsection

@section('content')
 <div>
    <div id="cardd">
{{--

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://www.medicate.ly/en/img/sehtk-doctor.PNG" alt="Card image cap">
            
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <form action="{{url('/booking/appointment/'.$appointment->id)}}" method="post">
                @csrf
                    <h2 class="card-title">{{$appointment->doctor->name}}</h2>
                    <span></span>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <select class="custom-select" name="catogry_id">
                        <option selected>نوع الحجز</option>
                        @foreach ($catogrys as $catogry)
                              <option value="{{$catogry->id}}">{{$catogry->name}}</option>
                        @endforeach
                    </select>
                    <input type="date" name="date" id="">
                    <button type="submit" class="btn btn-primary">Go somewhere</button>
                </form>
                </div>        
        </div>

   
    <div>
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>--}}




    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="well-block">
                  <div class="well-title">
                      <h2>Questions? Book an Appointment</h2>
                  </div>
                  <form>
                      <!-- Form start -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label" for="name">Name</label>
                                  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                              </div>
                          </div>
                          <!-- Text input-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label" for="email">Email</label>
                                  <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                              </div>
                          </div>
                          <!-- Text input-->
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label" for="date">Preferred Date</label>
                                  <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
                              </div>
                          </div>
                          <!-- Select Basic -->
                          {{-- <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label" for="time">Preferred Time</label>
                                  <select id="time" name="time" class="form-control">
                                      <option value="8:00 to 9:00">8:00 to 9:00</option>
                                      <option value="9:00 to 10:00">9:00 to 10:00</option>
                                      <option value="10:00 to 1:00">10:00 to 1:00</option>
                                  </select>
                              </div>
                          </div> --}}
                          <!-- Select Basic -->
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label" for="appointmentfor">Appointment For</label>
                                  <select id="appointmentfor" name="catogry_id" class="form-control">
                                    @foreach ($catogrys as $catogry)
                                      <option value="{{$catogry->id}}">{{$catogry->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          <!-- Button -->
                          <div class="col-md-12">
                              <div class="form-group">
                                  <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
                              </div>
                          </div>
                      </div>
                  </form>
                  <!-- form end -->
              </div>
          </div>
          <div class="col-md-6">
              <div class="well-block">
                  <div class="well-title">
                      <h2>Why Appointment with Us</h2>
                  </div>
                  <div class="feature-block">
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">24/7 Hours Available</h4>
                          <div class="feature-content">
                              <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                          </div>
                      </div>
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">Experienced Staff Available</h4>
                          <div class="feature-content">
                              <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                          </div>
                      </div>
                      <div class="feature feature-blurb-text">
                          <h4 class="feature-title">Low Price & Fees</h4>
                          <div class="feature-content">
                              <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>




    
</div> 
</div>

@endsection

@section('script')
	{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
	{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
	  