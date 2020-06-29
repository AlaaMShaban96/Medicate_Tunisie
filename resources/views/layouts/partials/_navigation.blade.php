
@php
  App::setLocale(	Session::get('applocale'));
@endphp

<link rel="stylesheet" href="{{ asset('css/pages/partials/__navigation.css')}}">


@switch(Session::get('applocale'))

    @case('ar')
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            
              <div class="top-area">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4 col-md-6">
                      
                      <div class="bold text-left">8am to 10pm </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                      

                        <a  href="https://api.whatsapp.com/send?phone=+21671948171">
                      
                            <i class="fa fa-phone fa-2x icon-nav" aria-hidden="true"></i>
                        
                        
                        </a>
                
                    
                    
                  
                          <a href=""><i class="fa fa-android fa-2x icon-nav" aria-hidden="true"></i></a>
                    
                        
                          <a href=""><i class="fa fa-apple fa-2x icon-nav" aria-hidden="true"></i></a>
                    
                    </div>

                  </div>
                </div>
              </div>

            

              <div class="container navigation">


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                  <ul class="nav navbar-nav" id="listt">
                  
                    <li class="dropdown">
                      {{-- <span class="badge custom-badge red pull-right">Extra</span> --}}
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('_nav._lang')}}<b class="caret"></b></a>
                    
                      <ul class="dropdown-menu">
                      <li><a href="{{ url('/lang/ar')}}">AR (العربية)</a></li>
                        <li><a href="{{ url('/lang/en')}}">EN (الإنجليزية)</a></li>
                      
                        <li><a href="{{ url('/lang/fr')}}">FR (الفرنسية)</a></li>
                      </ul>
                    </li>
                    <li id="find_us"><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li>

                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id="bookingNav"><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li>
                    <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li>
                    <li id="news"><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li>
                    <li id="home"><a href="{{url('/')}}">{{__('_nav._home')}}</a></li>



                  </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">

                    <i class="fa fa-bars"></i>

                  </button>
                  
                  <a class="navbar-brand" href="index.html">
                    <img src="img/MedicateLogo.png" alt=""  style="width: 100%;height: 241%;margin-top: -20px;" />
                  </a>
                </div>

              </div>
              <!-- /.container -->
            
            </nav>
        @break
   
    @default
        


          <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
              <div class="top-area">
                <div class="container">
                  <div class="row">
                    <div class="col-sm col-md-6">
                      
                      <p class="bold text-left">8am to 10pm </p>
                    </div>
                    <div class="col-sm col-md-6" style="text-align: end;">
                      
        
                        <a  href="https://api.whatsapp.com/send?phone=+21671948171">
                      
                            <i class="fa fa-phone fa-2x icon-nav" aria-hidden="true"></i>
                        
                        
                        </a>
                
                    
                    
                  
                          <a href=""><i class="fa fa-android fa-2x icon-nav" aria-hidden="true"></i></a>
                    
                        
                          <a href=""><i class="fa fa-apple fa-2x icon-nav" aria-hidden="true"></i></a>
                    
                    </div>
        
                  </div>
                </div>
              </div>

        
            

              <div class="container navigation">

                <div class="navbar-header page-scroll">

                  <div>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    
                        <i class="fa fa-bars"></i>
                    
                    </button>
                </div>

                  <div>
                      <a class="navbar-brand" href="index.html">
                    
                        <img src="img/MedicateLogo.png" alt=""  style="width: 100%;height: 241%;margin-top: -20px;" />
                    
                      </a>
                  </div>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                  <ul class="nav navbar-nav" id="listt">
                    <li id="home"><a href="{{url('/')}}">{{__('_nav._home')}}</a></li>
                    <li id="news"><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li>
                    <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li>
                    <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li>
                    <li ><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    {{-- <li><a href="#facilities">Find Us</a></li> --}}
                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id="find_us"><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li>
                    <li class="dropdown">
                      {{-- <span class="badge custom-badge red pull-right">Extra</span> --}}
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('_nav._lang')}}<b class="caret"></b></a>
                    
                      <ul class="dropdown-menu">
                      <li><a href="{{ url('/lang/ar')}}">AR (Arabic)</a></li>
                        <li><a href="{{ url('/lang/en')}}">EN (English)</a></li>
                        <li><a href="{{ url('/lang/fr')}}">FR (France)</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.container -->
            </nav>
  @endswitch
  <script src="js/jquery.min.js"></script>
<script src="{{asset('js/pages/_navigation.js')}}"></script>