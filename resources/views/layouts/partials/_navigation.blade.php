
@php
  App::setLocale(	Session::get('applocale'));
@endphp

<link rel="stylesheet" href="{{ asset('css/pages/partials/__navigation.css')}}">

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-8">
            
            <p class="bold text-left">8am to 10pm </p>
          </div>

        </div>
      </div>
    </div>


   

    <div class="container navigation">

      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
        <a class="navbar-brand" href="index.html">
                  <img src="img/MedicateLogo.png" alt=""  style="width: 124%;height: 241%;margin-top: -20px;" />
              </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{url('/')}}">{{__('_nav._home')}}</a></li>
          <li ><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li>
          <li><a href="#service">{{__('_nav._service')}}</a></li>
          <li><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
          {{-- <li><a href="#facilities">Find Us</a></li> --}}
          <li><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
        <li><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li>
          <li class="dropdown">
            {{-- <span class="badge custom-badge red pull-right">Extra</span> --}}
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('_nav._lang')}}<b class="caret"></b></a>
          
            <ul class="dropdown-menu">
            <li><a href="{{ url('/lang/ar')}}">AR (Arabic)</a></li>
              <li><a href="{{ url('/lang/en')}}">EN (English)</a></li>
              <li><a href="index-video.html">DE (Deutch)</a></li>
              <li><a href="index-video.html">FR (France)</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>


