<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   
    @yield('head') 
    <link rel="stylesheet" href="{{asset("css/flexslider.css")}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    
    <link href="{{asset('assets/cpanel/vendor/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/cpanel/css/master.css')}}" rel="stylesheet">
    <link href="{{asset('assets/cpanel/vendor/chartsjs/Chart.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/cpanel/vendor/flagiconcss3/css/flag-icon.min.css')}}" rel="stylesheet">
  
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="{{asset('assets/cpanel/img/bootstraper-logo.png')}}" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                
                <li> 
                    <a href="{{url('/cpanel/news')}}">  News </a> 
                    <a href="{{url('/cpanel/masseg')}}">  Masseg </a> 
                </li>
                <li>
                     <a href="{{url('/cpanel/company-service')}}"> Company Service </a> 
                </li>
                <li>
                     <a href="{{url('/cpanel/your-heailte')}}"> Your Heailte </a> 
                </li>
                <li> 
                    <a href="{{url('/cpanel/clinic')}}">Clinic </a>
                 </li>
                <li> 
                    <a href="{{url('/cpanel/doctor')}}"> Doctor </a> 
                </li>
                <li> 
                    <a href="{{url('/cpanel/pharmacy')}}">Parmacy</a> 
                </li>
                <li> 
                    <a href="{{url('/cpanel/diag')}}">Diag</a> 
                </li>
                <li> 
                    <a href="{{url('/cpanel/partner')}}">Partner</a> 
                </li>
 
      
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
          <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item">
                                        <form action="/logout" method="post">
                                        @csrf
                                        {{-- <i ></i>--}}
                                        <button  type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                                        </form>
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a  href="{{ url('/register') }}">{{ __('Register') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
               @yield('body') 
             
        </div>
      </div>
    </div>  
   

    <script src="{{asset('assets/cpanel/vendor/jquery3/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/cpanel/vendor/bootstrap4/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/cpanel/vendor/fontawesome5/js/solid.min.js')}}"></script>
    <script src="{{asset('assets/cpanel/vendor/fontawesome5/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('assets/cpanel/vendor/chartsjs/Chart.min.js')}}"></script>
    <script src="{{asset('assets/cpanel/js/dashboard-charts.js')}}"></script>
    <script src="{{asset('assets/cpanel/js/script.js')}}"></script>

    
    @yield('script') 
</body>
  
</html>