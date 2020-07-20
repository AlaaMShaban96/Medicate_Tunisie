@extends('layouts.master')

@section('head')

<style>

  </style>
<link type="text/css" rel="stylesheet" href="{{asset('booking/css/appointment.css')}}" />
<title>Medicate Tunis : Booking </title>
@endsection

@section('content')
 <div>
    <div id="cardd">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="well-block">
                  <div class="well-title">
                      <h2>Questions? Book an Appointment</h2>
                  </div>
                  <form action="{{url('/booking/appointment/'.$appointment->id)}}" method="post">
                    @csrf
                      <!-- Form start -->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label" for="name">ID card</label>
                                  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                              </div>
                          </div>
                          <!-- Text input-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label" for="email">Password</label>
                                  <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                              </div>
                          </div>
                          <!-- Text input-->
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label" for="date">Preferred Date</label>
                                  <input id="datee" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
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
                    <div class="container-calendar">
                    <h3 id="monthAndYear"></h3>
                    <div class="button-container-calendar">
                        <button id="previous" onclick="previous()">&#8249;</button>
                        <button id="next" onclick="next()">&#8250;</button>
                    </div>
                    
                    <table class="table-calendar" id="calendar" data-lang="en">
                        <thead id="thead-month"></thead>
                        <tbody id="calendar-body"></tbody>
                    </table>
                    
                    <div class="footer-container-calendar">
                        <label for="month">Jump To: </label>
                        <select id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>
                        <select id="year" onchange="jump()"></select>       
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
	<script src="{{asset('js/pages/appointment.js')}}" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
@endsection
	  