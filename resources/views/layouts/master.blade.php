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


   
<div class="icon-bar">
  
    {{-- <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
    <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
    <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
 
   --}}
  <a href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr" target="_blank" class="facebook"><i class="fa fa-facebook fa-2x"></i>  </a> 
  <a href="https://www.linkedin.com/in/MedicateTPA/" target="_blank" class="facebook"><i class="fa fa-linkedin fa-2x"></i></a> 
  <a href="https://twitter.com/MedicateTPA" target="_blank" class="facebook"><i class="fa fa-twitter fa-2x"></i></a> 
  <a href="" target="_blank" class="facebook" title="{{__('_header._singup')}}" data-toggle="modal" data-target="#singupModal"><i class="fa fa-plus-circle fa-2x"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=+21671948171" target="_blank" class="facebook"><i class="fa fa-whatsapp  fa-2x"></i>
  </a>

</div>

    
<!--Start of Tawk.to Script-->

  <!--End of Tawk.to Script-->

  <!--End of Tawk.to Script-->




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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5db03ca2df22d91339a09dd7/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5f17ef7aa45e787d128be672/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> --}}
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->
  @yield('script')
</body>
</html>