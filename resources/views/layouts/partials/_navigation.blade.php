
@php
  App::setLocale(	Session::get('applocale'));
@endphp

<link rel="stylesheet" href="{{ asset('css/pages/partials/__navigation.css')}}">


@switch(Session::get('applocale'))

    @case('ar')
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            
              <div class="top-area">
                <div class="container">
                  <div class="row" style="" id="row-navbar">
                    <div class="col-sm col-md-6"  id="time-work-navbar">
                      
                      <p class="bold text-left">8am to 10pm </p>
                    </div>
                    <div class="col-sm col-md-6" style="text-align: end;" id="lang-icon-content">

        
                        <div id="icon-content-navbar" >
                          
                          <a href="">
                            <i class="fa fa-apple fa-2x icon-nav" aria-hidden="true"></i>
                          </a>
                        
                           <a href="">
                             <i class="fa fa-android fa-2x icon-nav" aria-hidden="true"></i>
                           </a>  
                          
                          <a  href="https://api.whatsapp.com/send?phone=+21671948171">
                            <i class="fa fa-phone fa-2x icon-nav" aria-hidden="true"></i>
                          </a>
                        </div>


                    <div id="lang-content-navbar-ar" >
                      <ul >
                        <li>
                          <a href="{{ url('/lang/ar')}}"> (العربية)</a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/en')}}">(الانجلزية)</a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/fr')}}">(الفرنسية)</a>
                        </li>

                      </ul>
                    </div>
                    </div>
        
                  </div>
                </div>
              </div>

            

              <div class="container navigationen">
              <div >

                      <!-- /.navbar-collapse -->
                      <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">

                          <i class="fa fa-bars"></i>

                        </button>
                        
                        <a class="navbar-brand" href="index.html">
                          <img src="img/MedicateLogo.png" alt=""  style="width: 100%;height: 241%;margin-top: -20px;" />
                        </a>
                      </div>

                      
                      <!-- /.container -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                  <ul class="nav navbar-nav" id="listt">
                  
                
                    <li id="find_us"><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li>

                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id="bookingNav"><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li>
                    <li id="yourhealth"><a href="{{url('/yourHealth')}}">{{__('_nav._your_health')}}</a></li>
                    <li id="news"><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li>
                    <li id="home"><a href="{{url('/')}}">{{__('_nav._home')}}</a></li>



                  </ul>
                </div>
            </div>
            </div>
               
            
            </nav>
        @break
   
    @default
        


          <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
              <div class="top-area">
                <div class="container">
                  <div class="row" style="" id="row-navbar">
                    <div class="col-sm col-md-6"  id="time-work-navbar">
                      
                      <p class="bold text-left">8am to 10pm </p>
                    </div>
                    <div class="col-sm col-md-6" style="text-align: end;" id="lang-icon-content">

                    <div id="lang-content-navbar" >
                      <ul >
                        <li>
                          <a href="{{ url('/lang/ar')}}"> (Arabic)</a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/en')}}">(English)</a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/fr')}}">(France)</a>
                        </li>

                      </ul>
                    </div>
        
                        <div id="icon-content-navbar" >
                          <a  href="https://api.whatsapp.com/send?phone=+21671948171">
                             <i class="fa fa-phone fa-2x icon-nav" aria-hidden="true"></i>
                           </a>
                        
                           <a href="">
                             <i class="fa fa-android fa-2x icon-nav" aria-hidden="true"></i>
                           </a>  
                          <a href="">
                            <i class="fa fa-apple fa-2x icon-nav" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>
        
                  </div>
                </div>
              </div>

        
            

              <div class="container navigationen">
              <div>

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
                    <li id="yourhealth"><a href="{{url('/yourHealth')}}">{{__('_nav._your_health')}}</a></li>
                    <li id="bookingNav"><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    {{-- <li><a href="#facilities">Find Us</a></li> --}}
                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id="find_us"><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li>
                    
                  </ul>
                </div>
                <!-- /.navbar-collapse -->
              </div>
              </div>
              <!-- /.container -->
            </nav>
  @endswitch
  <script src="js/jquery.min.js"></script>
<script src="{{asset('js/pages/_navigation.js')}}"></script>