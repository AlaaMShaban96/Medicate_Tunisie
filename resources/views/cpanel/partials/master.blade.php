<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
@yield('head')
<link rel="stylesheet" href="{{asset('css/cpanel/master.css')}}">
<style>
  body {
      font-family:'Tajawal';font-size: 20px;
  }
</style>

<title>Control Panel</title>
   
    <style>
    
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" style="color:white;">
                  {{-- مركز {{auth()->user()->name}}  --}}
                </li>
                
            </ul>
            <form class="form-inline my-2 my-md-0"> </form>
        </div>
    </nav>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper"> 
            <ul class="sidebar-nav">

                <li > <a href="{{ url('#') }}"><i class="far fa-user-circle"></i> Profile </a> </li>
                <li> <a href="{{url('/cpanel/news')}}"> <i style='font-size:24px' class='far'>&#xf1d8;</i>  News </a> </li>
                <li> <a href="{{url('/cpanel/company-service')}}"> <i style='font-size:24px' class='far'>&#xf0e0;</i> Company Service </a> </li>
                <li> <a href="{{url('/cpanel/clinic')}}"><i style='font-size:24px' class='fas'>&#xf01c;</i>Clinic </a> </li>
                <li> <a href="{{url('/cpanel/doctor')}}"><i style='font-size:24px' class='fas'>&#xf48e;</i> Doctor </a> </li>
                <li> <a href="{{url('/cpanel/pharmacy')}}"><i style='font-size:24px' class='fas'>&#xf77c;</i>Parmacy</a> </li>
                <li> <a href="{{url('/cpanel/diag')}}"><i class="fas fa-chart-pie"></i>Diag</a> </li>

                <li>
                  <a href="{{ url('#') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                  <i style='font-size:24px' class='fas'>&#xf011;</i>Logout </a>
                </li>   

              <form id="frm-logout" action="{{ url('#') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
               
            </ul>
        </div> 
        
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper" style="padding: 2px;">
            <div class="container-fluid">
            
               @yield('body') 
             
            </div>
        </div> <!-- /#page-content-wrapper -->
    </div> <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
       


      $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(window).resize(function(e) {
          if($(window).width()<=768){
            $("#wrapper").removeClass("toggled");
          }else{
            $("#wrapper").addClass("toggled");
          }
        });
      });

        
    </script>
    

@yield('script')
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</html>