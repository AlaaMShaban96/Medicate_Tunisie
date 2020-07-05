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
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script>  --}}
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
  <!-- css -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> --}}
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
  {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> --}}

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
  <body dir="rtl"  >
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

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/writeit.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery.scrollTo.js')}}"></script>
  <script src="{{asset('js/jquery.appear.js')}}"></script>
  <script src="{{asset('js/stellar.js')}}"></script>
  <script src="{{asset('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
  <script src="{{asset('contactform/contactform.js')}}"></script>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

  
  @yield('script')
</body>
</html>