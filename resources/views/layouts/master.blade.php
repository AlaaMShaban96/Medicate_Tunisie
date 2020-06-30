@php
  App::setLocale(	Session::get('applocale'));
@endphp

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
 
 
  <!-- css -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link href="{{asset('css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link href="{{asset('css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
  <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" media="screen" />
  <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>

  <!-- boxed bg -->
  <link id="bodybg" href="{{asset('bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{{asset('color/default.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>

  <style>
    body {
        font-family:'Tajawal';
        font-size: 16px;
    }
  </style>
    @yield('head')
    <title>Medicate Tunis :Home</title>
</head>

@if (Session::get('applocale')=="ar")
  <body dir="rtl" >
@else
  <body dir="ltr" >
@endif


    <div id="wrapper">
        
        @include('layouts.partials._navigation')
        {{-- @include('layouts.partials._header') --}}

        @yield('content')
    
        @include('layouts.partials._footer')
    </div>




  
    
  




<!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  
  @yield('script')
</body>
</html>