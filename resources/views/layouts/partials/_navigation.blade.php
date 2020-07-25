
@php
  App::setLocale(	Session::get('applocale'));
@endphp

<link rel="stylesheet" href="{{ asset('css/pages/partials/__navigation.css')}}">


<style>
  .navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding-left: 6%;
}
.dropdown-menu {
  min-width: 196px;
}
.dropdown-toggle:hover {
  
  cursor: pointer;
  
}
.dropdown-item{
  padding-bottom: 4px;
  direction: ltr;
  border-bottom-style: solid;
  border-width: 1px;
  border-color: #dbdada;
}
/* .dropdown{
  font-size: 9px;
} */
.navbar-custom ul.nav li div a,.navbar-custom ul.nav li  a{
  font-size: 16px;
}
.navbar-nav > li > a{
  font-size: 12px;
  padding-top: 15px;
  padding-bottom: 15px;
  padding-right: 1px;
}
.collapse.in {
    /* display: block; */
    visibility: visible;
}

</style>
@switch(Session::get('applocale'))

    @case('ar')
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            
              <div class="top-area">
                <div class="container">
                  <div class="row" style="" id="row-navbar">
                    <div class="col-sm col-md-6"  id="time-work-navbar">
                      
                      <p class="bold text-left">
                        <span style="margin-left: 47%;">
                          <a style="color: white;" href="{{url('/news')}}">{{__('_nav._news')}}</a>
                        </span>&nbsp &nbsp &nbsp &nbsp
                        8am to 10pm
                        </p>
                      
                    </div>
                    <div class="col-sm col-md-6" style="text-align: end;" id="lang-icon-content">

        


                    <div id="lang-content-navbar-ar" >
                      
                      <ul >
                        <li>
                          <a href="{{ url('/lang/ar')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,86.86c-0.47496,0 -0.86,-0.38504 -0.86,-0.86v0c0,-0.47496 0.38504,-0.86 0.86,-0.86v0c0.47496,0 0.86,0.38504 0.86,0.86v0c0,0.47496 -0.38504,0.86 -0.86,0.86z" fill="#cccccc"></path><g><circle cx="20.33898" cy="20.33898" transform="scale(4.22833,4.22833)" r="20" fill="#dd2c00"></circle><path d="M86,52.17333c-18.68078,0 -33.82667,15.14589 -33.82667,33.82667c0,18.68078 15.14589,33.82667 33.82667,33.82667c18.68078,0 33.82667,-15.14589 33.82667,-33.82667c0,-18.68078 -15.14589,-33.82667 -33.82667,-33.82667zM86,111.37c-14.00847,0 -25.37,-11.36576 -25.37,-25.37c0,-14.00424 11.36576,-25.37 25.37,-25.37c8.09303,0.01691 15.70826,3.88161 20.46513,10.43975c-3.73362,-3.45032 -8.62157,-5.35307 -13.69134,-5.36998c-11.21354,0 -20.30023,9.08246 -20.30023,20.30023c0,11.21777 9.08246,20.30023 20.30023,20.30023c5.06977,-0.01691 9.95772,-1.91544 13.69134,-5.35307c-4.75687,6.54123 -12.3721,10.40593 -20.46513,10.42284zM105.07824,94.95138l-10.52009,-3.42072l-6.49049,8.95138v-11.06555l-10.52432,-3.41649l10.52009,-3.42072v-11.04864l6.49049,8.93447l10.52009,-3.40381l-6.48626,8.9387z" fill="#ffffff"></path></g></g></svg>                        </li>

                          </li>

                        <li>
                          <a href="{{ url('/lang/en')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g transform="translate(0.516,0.516) scale(0.994,0.994)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g stroke="#cccccc" stroke-linejoin="round"><path d="M68.08333,62.10275l-36.70408,-22.43883c9.42775,-11.09758 22.17367,-19.23175 36.70408,-22.97992z" fill="#3f51b5"></path><path d="M68.08333,108.96917v46.35042c-14.79917,-3.81983 -27.77442,-12.169 -37.24875,-23.58192z" fill="#3f51b5"></path><path d="M17.73033,103.91667l-0.903,0.55542c-0.05017,-0.18633 -0.09675,-0.36908 -0.14333,-0.55542z" fill="#ffffff"></path><path d="M103.91667,64.25992v-47.57592c15.15033,3.90583 28.36567,12.58467 37.89733,24.41325z" fill="#3f51b5"></path><path d="M103.91667,106.79767l38.38108,23.4565c-9.5675,12.15108 -22.962,21.08433 -38.38108,25.06183z" fill="#3f51b5"></path><path d="M19.25325,68.08333h-2.56925c0.11467,-0.4515 0.22217,-0.91017 0.34758,-1.35808z" fill="#ffffff"></path><path d="M144.55883,75.25l10.88975,-6.65783c0.54467,2.18225 0.98542,4.40033 1.32583,6.65783z" fill="#ffffff"></path><path d="M30.97792,75.25h-15.75233c0.36908,-2.43308 0.85283,-4.81958 1.45842,-7.16667h2.56925z" fill="#ffffff"></path><path d="M146.10683,96.75h10.66758c-0.29742,1.97083 -0.65933,3.92017 -1.11442,5.83725z" fill="#ffffff"></path><path d="M17.73392,103.91667h-1.04992c-0.60558,-2.34708 -1.09292,-4.73358 -1.45842,-7.16667h14.22942z" fill="#ffffff"></path><path d="M68.08333,62.10275v-45.41875c2.34708,-0.60558 4.73358,-1.09292 7.16667,-1.45842v51.256z" fill="#ffffff"></path><path d="M103.91667,106.79767v48.51833c-2.34708,0.60558 -4.73358,1.09292 -7.16667,1.45842v-54.35558z" fill="#ffffff"></path><path d="M75.25,104.59033v52.18408c-2.43308,-0.36908 -4.81958,-0.85283 -7.16667,-1.45842v-46.34683z" fill="#ffffff"></path><path d="M96.75,68.07258v-52.847c2.43308,0.36908 4.81958,0.85283 7.16667,1.45842v47.57233l-5.48608,3.354l-1.01767,-0.6235z" fill="#ffffff"></path><path d="M19.25325,68.08333l-2.22525,-1.35808c0.56975,-2.03175 1.22908,-4.0205 1.96725,-5.977l11.79992,7.33508h19.55067l-27.05775,-16.7485c2.31125,-4.16742 5.031,-8.06608 8.09117,-11.67092l36.70408,22.43883l7.16667,4.38242v2.27183l-10.62458,6.493h-33.6475z" fill="#ffffff"></path><path d="M103.91667,64.25633l37.89375,-23.15908c1.333,1.6555 2.60867,3.35758 3.79475,5.12775l-35.15967,21.85833h19.55067l20.64717,-12.86417c2.02817,4.24625 3.64067,8.71467 4.80525,13.373l-10.88975,6.65783h-33.62958l-12.49867,-7.63967z" fill="#ffffff"></path><path d="M30.79517,68.08333l-11.79633,-7.33508c1.2255,-3.25008 2.62658,-6.407 4.29283,-9.41342l27.05417,16.7485z" fill="#e53935"></path><path d="M110.4455,68.08333l35.16325,-21.85475c1.90633,2.84875 3.55108,5.87308 5.03817,8.99058l-20.65075,12.86417z" fill="#e53935"></path><path d="M146.10683,96.75l9.54958,5.84083c-0.54825,2.322 -1.21117,4.59383 -1.98158,6.82267l-8.81142,-5.49683h-19.55067l24.28067,15.05358c-2.07833,4.00258 -4.52933,7.77225 -7.29567,11.2875l-38.38108,-23.46008l-7.16667,-4.37883v-5.66883z" fill="#ffffff"></path><path d="M96.75,75.25v-7.17742l0.66292,-1.08575l1.01767,0.6235l12.49867,7.63967z" fill="#ffffff"></path><path d="M68.08333,108.96917l-37.24875,22.7685c-1.2685,-1.53008 -2.451,-3.13542 -3.5905,-4.76942l36.4855,-23.05158h-19.55067l-22.22025,14.12192c-2.15358,-4.29642 -3.87358,-8.83292 -5.13492,-13.5665l0.90658,-0.55542l11.72467,-7.16667h45.795v7.84033z" fill="#ffffff"></path><path d="M75.25,68.757v6.493h-10.62458z" fill="#ffffff"></path><path d="M144.86342,103.91667l8.81142,5.49325c-1.14308,3.30025 -2.494,6.49658 -4.085,9.55675l-24.27708,-15.05z" fill="#e53935"></path><path d="M63.72958,103.91667l-36.4855,23.05158c-1.978,-2.83083 -3.72667,-5.81933 -5.28542,-8.92967l22.22025,-14.12192z" fill="#e53935"></path><path d="M156.77442,75.25c0.53033,3.51525 0.89225,7.08783 0.89225,10.75c0,3.66217 -0.36192,7.23475 -0.89225,10.75h-60.02442v-21.5z" fill="#e53935"></path><path d="M15.22558,96.75c-0.53033,-3.51525 -0.89225,-7.08783 -0.89225,-10.75c0,-3.66217 0.36192,-7.23475 0.89225,-10.75h60.02442v21.5z" fill="#e53935"></path><path d="M86,157.66667c-3.66217,0 -7.23475,-0.36192 -10.75,-0.89225v-141.54883c3.51525,-0.53033 7.08783,-0.89225 10.75,-0.89225c3.66217,0 7.23475,0.36192 10.75,0.89225v141.54883c-3.51525,0.53033 -7.08783,0.89225 -10.75,0.89225z" fill="#e53935"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-linejoin="miter"></path><g stroke="none" stroke-linejoin="miter"><path d="M68.08333,16.684c-14.53042,3.74817 -27.27633,11.88233 -36.70408,22.97992l36.70408,22.43883z" fill="#3f51b5"></path><path d="M30.83458,131.73767c9.47433,11.41292 22.44958,19.76208 37.24875,23.58192v-46.35042z" fill="#3f51b5"></path><path d="M16.684,103.91667c0.04658,0.18633 0.09317,0.36908 0.14333,0.55542l0.903,-0.55542z" fill="#ffffff"></path><path d="M141.814,41.09725c-9.53167,-11.82858 -22.747,-20.50742 -37.89733,-24.41325v47.57592z" fill="#3f51b5"></path><path d="M103.91667,155.316c15.41908,-3.9775 28.81358,-12.91075 38.38108,-25.06183l-38.38108,-23.4565z" fill="#3f51b5"></path><path d="M17.03158,66.72525c-0.12542,0.44792 -0.23292,0.90658 -0.34758,1.35808h2.56925z" fill="#ffffff"></path><path d="M156.77442,75.25c-0.34042,-2.2575 -0.78117,-4.47558 -1.32583,-6.65783l-10.88975,6.65783z" fill="#ffffff"></path><path d="M19.25325,68.08333h-2.56925c-0.60558,2.34708 -1.08933,4.73358 -1.45842,7.16667h15.75233z" fill="#ffffff"></path><path d="M155.66,102.58725c0.45508,-1.91708 0.817,-3.86642 1.11442,-5.83725h-10.66758z" fill="#ffffff"></path><path d="M29.455,96.75h-14.22942c0.3655,2.43308 0.85283,4.81958 1.45842,7.16667h1.04992z" fill="#ffffff"></path><path d="M75.25,66.48158v-51.256c-2.43308,0.3655 -4.81958,0.85283 -7.16667,1.45842v45.41875z" fill="#ffffff"></path><path d="M96.75,102.41883v54.35558c2.43308,-0.3655 4.81958,-0.85283 7.16667,-1.45842v-48.51833z" fill="#ffffff"></path><path d="M68.08333,108.96917v46.34683c2.34708,0.60558 4.73358,1.08933 7.16667,1.45842v-52.18408z" fill="#ffffff"></path><path d="M97.41292,66.98683l1.01767,0.6235l5.48608,-3.354v-47.57233c-2.34708,-0.60558 -4.73358,-1.08933 -7.16667,-1.45842v52.847z" fill="#ffffff"></path><path d="M30.97792,75.25h33.6475l10.62458,-6.493v-2.27183l-7.16667,-4.38242l-36.70408,-22.43883c-3.06017,3.60483 -5.77992,7.5035 -8.09117,11.67092l27.05775,16.7485h-19.55067l-11.79992,-7.33508c-0.73817,1.9565 -1.3975,3.94525 -1.96725,5.977l2.22525,1.35808z" fill="#ffffff"></path><path d="M98.43058,67.61033l12.49867,7.63967h33.62958l10.88975,-6.65783c-1.16458,-4.65833 -2.77708,-9.12675 -4.80525,-13.373l-20.64717,12.86417h-19.55067l35.15967,-21.85833c-1.18608,-1.77017 -2.46175,-3.47225 -3.79475,-5.12775l-37.89375,23.15908z" fill="#ffffff"></path><path d="M50.34583,68.08333l-27.05417,-16.7485c-1.66625,3.00642 -3.06733,6.16333 -4.29283,9.41342l11.79633,7.33508z" fill="#e53935"></path><path d="M129.99617,68.08333l20.65075,-12.86417c-1.48708,-3.1175 -3.13183,-6.14183 -5.03817,-8.99058l-35.16325,21.85475z" fill="#e53935"></path><path d="M96.75,96.75v5.66883l7.16667,4.37883l38.38108,23.46008c2.76633,-3.51525 5.21733,-7.28492 7.29567,-11.2875l-24.28067,-15.05358h19.55067l8.81142,5.49683c0.77042,-2.22883 1.43333,-4.50067 1.98158,-6.82267l-9.54958,-5.84083z" fill="#ffffff"></path><path d="M110.92925,75.25l-12.49867,-7.63967l-1.01767,-0.6235l-0.66292,1.08575v7.17742z" fill="#ffffff"></path><path d="M75.25,104.59033v-7.84033h-45.795l-11.72467,7.16667l-0.90658,0.55542c1.26133,4.73358 2.98133,9.27008 5.13492,13.5665l22.22025,-14.12192h19.55067l-36.4855,23.05158c1.1395,1.634 2.322,3.23933 3.5905,4.76942l37.24875,-22.7685z" fill="#ffffff"></path><path d="M64.62542,75.25h10.62458v-6.493z" fill="#ffffff"></path><path d="M125.31275,103.91667l24.27708,15.05c1.591,-3.06017 2.94192,-6.2565 4.085,-9.55675l-8.81142,-5.49325z" fill="#e53935"></path><path d="M44.17892,103.91667l-22.22025,14.12192c1.55875,3.11033 3.30742,6.09883 5.28542,8.92967l36.4855,-23.05158z" fill="#e53935"></path><path d="M110.92925,75.25h-14.17925v21.5h49.35683h10.66758c0.53033,-3.51525 0.89225,-7.08783 0.89225,-10.75c0,-3.66217 -0.36192,-7.23475 -0.89225,-10.75h-12.21558z" fill="#e53935"></path><path d="M75.25,96.75v-21.5h-10.62458h-33.6475h-15.75233c-0.53033,3.51525 -0.89225,7.08783 -0.89225,10.75c0,3.66217 0.36192,7.23475 0.89225,10.75h14.22942z" fill="#e53935"></path><path d="M96.75,156.77442v-54.35558v-5.66883v-21.5v-7.17742v-52.847c-3.51525,-0.53033 -7.08783,-0.89225 -10.75,-0.89225c-3.66217,0 -7.23475,0.36192 -10.75,0.89225v51.256v2.27183v6.49658v21.5v7.84033v52.18408c3.51525,0.53033 7.08783,0.89225 10.75,0.89225c3.66217,0 7.23475,-0.36192 10.75,-0.89225z" fill="#e53935"></path></g><path d="" fill="none" stroke="none" stroke-linejoin="miter"></path></g></g></svg>
                          </a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/fr')}}">
                          
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g transform="translate(0.516,0.516) scale(0.994,0.994)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g stroke="#cccccc" stroke-linejoin="round"><path d="M114.66667,151.66458c-8.78275,3.83775 -18.4685,6.00208 -28.66667,6.00208c-10.19817,0 -19.88392,-2.16433 -28.66667,-6.00567v-131.32558c8.78275,-3.83775 18.4685,-6.00208 28.66667,-6.00208c10.19817,0 19.88392,2.16433 28.66667,6.00208z" fill="#eceff1"></path><path d="M114.66667,151.661v-131.32558c25.30192,11.06533 43,36.28483 43,65.66458c0,29.37975 -17.69808,54.59925 -43,65.661z" fill="#ff3d00"></path><path d="M57.33333,20.33542v131.32917c-25.30192,-11.06533 -43,-36.28483 -43,-65.66458c0,-29.37975 17.69808,-54.59925 43,-65.66458z" fill="#3f51b5"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-linejoin="miter"></path><g stroke="none" stroke-linejoin="miter"><path d="M114.66667,20.33542c-8.78275,-3.83775 -18.4685,-6.00208 -28.66667,-6.00208c-10.19817,0 -19.88392,2.16433 -28.66667,6.00208v131.32558c8.78275,3.84133 18.4685,6.00567 28.66667,6.00567c10.19817,0 19.88392,-2.16433 28.66667,-6.00208z" fill="#eceff1"></path><path d="M157.66667,86c0,-29.37975 -17.69808,-54.59925 -43,-65.66458v131.32558c25.30192,-11.06175 43,-36.28125 43,-65.661z" fill="#ff3d00"></path><path d="M14.33333,86c0,29.37975 17.69808,54.59925 43,65.66458v-131.32917c-25.30192,11.06533 -43,36.28483 -43,65.66458z" fill="#3f51b5"></path></g><path d="" fill="none" stroke="none" stroke-linejoin="miter"></path></g></g></svg>
                          </a>
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
                          <img src="img/new_lolo.svg" alt=""  style="" />
                        </a>
                      </div>

                      
                      <!-- /.container -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                  <ul class="nav navbar-nav" id="listt">
                  
                   

                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id=""><a href="">{{__('_nav._customer_service')}}</a></li>
                    <li id=""><a href="">{{__('_nav._investors')}}</a></li>
                    <li id="bookingNav"><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    {{-- <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li> --}}
                    <li id="service">
                      <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('_nav._service')}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-item" ><a href="{{url('/service')}}">خدماتنا</a></div>
                        <div class="dropdown-item" ><a href="">الشركات </a></div>
                        <div class="dropdown-item" ><a href="">{{__('_nav._foundations')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url('/internationalCard')}}">البطاقة الدولية </a></div>
                        <div class="dropdown-item" ><a href="{{url('/famileCard')}}">البطاقة العائلية </a></div>
                        <div class="dropdown-item" ><a href="{{url('/schoolCard')}}">البطاقة المدرسية </a></div>
                        <div class="dropdown-item" ><a href="{{url('/handicappedCard')}}">بطاقة ذوي الاحتياجات الخاصة </a></div>
                        
            
                      </div>
                    </li>
                    {{-- <li id="yourhealth"><a href="{{url('/yourHealth')}}">{{__('_nav._your_health')}}</a></li> --}}
                    <li id="yourhealth">
                      <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('_nav._your_health')}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-item" ><a href="{{url('/yourHealth')}}">{{__('_nav._doctor_medicit')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._pregnancy_and_motherhood')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._chronic_diseases')}} </a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._card_international')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._health_and_fitness')}}</a></div>
                      </div>
                    </li>
                    {{-- <li id="news"><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li> --}}
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
                      
                      <p class="bold text-left">
                        8am to 10pm
                        &nbsp &nbsp &nbsp &nbsp  <a href="{{url('/news')}}">{{__('_nav._news')}}</a>
                        

                      </p>
                    </div>
                    <div class="col-sm col-md-6" style="text-align: end;" id="lang-icon-content">

                    <div id="lang-content-navbar" >
                      <ul >
                        <li>
                          <a href="{{ url('/lang/ar')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,86.86c-0.47496,0 -0.86,-0.38504 -0.86,-0.86v0c0,-0.47496 0.38504,-0.86 0.86,-0.86v0c0.47496,0 0.86,0.38504 0.86,0.86v0c0,0.47496 -0.38504,0.86 -0.86,0.86z" fill="#cccccc"></path><g><circle cx="20.33898" cy="20.33898" transform="scale(4.22833,4.22833)" r="20" fill="#dd2c00"></circle><path d="M86,52.17333c-18.68078,0 -33.82667,15.14589 -33.82667,33.82667c0,18.68078 15.14589,33.82667 33.82667,33.82667c18.68078,0 33.82667,-15.14589 33.82667,-33.82667c0,-18.68078 -15.14589,-33.82667 -33.82667,-33.82667zM86,111.37c-14.00847,0 -25.37,-11.36576 -25.37,-25.37c0,-14.00424 11.36576,-25.37 25.37,-25.37c8.09303,0.01691 15.70826,3.88161 20.46513,10.43975c-3.73362,-3.45032 -8.62157,-5.35307 -13.69134,-5.36998c-11.21354,0 -20.30023,9.08246 -20.30023,20.30023c0,11.21777 9.08246,20.30023 20.30023,20.30023c5.06977,-0.01691 9.95772,-1.91544 13.69134,-5.35307c-4.75687,6.54123 -12.3721,10.40593 -20.46513,10.42284zM105.07824,94.95138l-10.52009,-3.42072l-6.49049,8.95138v-11.06555l-10.52432,-3.41649l10.52009,-3.42072v-11.04864l6.49049,8.93447l10.52009,-3.40381l-6.48626,8.9387z" fill="#ffffff"></path></g></g></svg>                        </li>

                        <li>
                          <a href="{{ url('/lang/en')}}">
                          
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><g><path d="M68.08333,16.684c-14.53042,3.74817 -27.27633,11.88233 -36.70408,22.97992l36.70408,22.43883z" fill="#3f51b5"></path><path d="M30.83458,131.73767c9.47433,11.41292 22.44958,19.76208 37.24875,23.58192v-46.35042z" fill="#3f51b5"></path><path d="M16.684,103.91667c0.04658,0.18633 0.09317,0.36908 0.14333,0.55542l0.903,-0.55542z" fill="#ffffff"></path><path d="M141.814,41.09725c-9.53167,-11.82858 -22.747,-20.50742 -37.89733,-24.41325v47.57592z" fill="#3f51b5"></path><path d="M103.91667,155.316c15.41908,-3.9775 28.81358,-12.91075 38.38108,-25.06183l-38.38108,-23.4565z" fill="#3f51b5"></path><path d="M17.03158,66.72525c-0.12542,0.44792 -0.23292,0.90658 -0.34758,1.35808h2.56925z" fill="#ffffff"></path><path d="M156.77442,75.25c-0.34042,-2.2575 -0.78117,-4.47558 -1.32583,-6.65783l-10.88975,6.65783z" fill="#ffffff"></path><path d="M19.25325,68.08333h-2.56925c-0.60558,2.34708 -1.08933,4.73358 -1.45842,7.16667h15.75233z" fill="#ffffff"></path><path d="M155.66,102.58725c0.45508,-1.91708 0.817,-3.86642 1.11442,-5.83725h-10.66758z" fill="#ffffff"></path><path d="M29.455,96.75h-14.22942c0.3655,2.43308 0.85283,4.81958 1.45842,7.16667h1.04992z" fill="#ffffff"></path><path d="M75.25,66.48158v-51.256c-2.43308,0.3655 -4.81958,0.85283 -7.16667,1.45842v45.41875z" fill="#ffffff"></path><path d="M96.75,102.41883v54.35558c2.43308,-0.3655 4.81958,-0.85283 7.16667,-1.45842v-48.51833z" fill="#ffffff"></path><path d="M68.08333,108.96917v46.34683c2.34708,0.60558 4.73358,1.08933 7.16667,1.45842v-52.18408z" fill="#ffffff"></path><path d="M97.41292,66.98683l1.01767,0.6235l5.48608,-3.354v-47.57233c-2.34708,-0.60558 -4.73358,-1.08933 -7.16667,-1.45842v52.847z" fill="#ffffff"></path><path d="M30.97792,75.25h33.6475l10.62458,-6.493v-2.27183l-7.16667,-4.38242l-36.70408,-22.43883c-3.06017,3.60483 -5.77992,7.5035 -8.09117,11.67092l27.05775,16.7485h-19.55067l-11.79992,-7.33508c-0.73817,1.9565 -1.3975,3.94525 -1.96725,5.977l2.22525,1.35808z" fill="#ffffff"></path><path d="M98.43058,67.61033l12.49867,7.63967h33.62958l10.88975,-6.65783c-1.16458,-4.65833 -2.77708,-9.12675 -4.80525,-13.373l-20.64717,12.86417h-19.55067l35.15967,-21.85833c-1.18608,-1.77017 -2.46175,-3.47225 -3.79475,-5.12775l-37.89375,23.15908z" fill="#ffffff"></path><path d="M50.34583,68.08333l-27.05417,-16.7485c-1.66625,3.00642 -3.06733,6.16333 -4.29283,9.41342l11.79633,7.33508z" fill="#e53935"></path><path d="M129.99617,68.08333l20.65075,-12.86417c-1.48708,-3.1175 -3.13183,-6.14183 -5.03817,-8.99058l-35.16325,21.85475z" fill="#e53935"></path><path d="M96.75,96.75v5.66883l7.16667,4.37883l38.38108,23.46008c2.76633,-3.51525 5.21733,-7.28492 7.29567,-11.2875l-24.28067,-15.05358h19.55067l8.81142,5.49683c0.77042,-2.22883 1.43333,-4.50067 1.98158,-6.82267l-9.54958,-5.84083z" fill="#ffffff"></path><path d="M110.92925,75.25l-12.49867,-7.63967l-1.01767,-0.6235l-0.66292,1.08575v7.17742z" fill="#ffffff"></path><path d="M75.25,104.59033v-7.84033h-45.795l-11.72467,7.16667l-0.90658,0.55542c1.26133,4.73358 2.98133,9.27008 5.13492,13.5665l22.22025,-14.12192h19.55067l-36.4855,23.05158c1.1395,1.634 2.322,3.23933 3.5905,4.76942l37.24875,-22.7685z" fill="#ffffff"></path><path d="M64.62542,75.25h10.62458v-6.493z" fill="#ffffff"></path><path d="M125.31275,103.91667l24.27708,15.05c1.591,-3.06017 2.94192,-6.2565 4.085,-9.55675l-8.81142,-5.49325z" fill="#e53935"></path><path d="M44.17892,103.91667l-22.22025,14.12192c1.55875,3.11033 3.30742,6.09883 5.28542,8.92967l36.4855,-23.05158z" fill="#e53935"></path><path d="M110.92925,75.25h-14.17925v21.5h49.35683h10.66758c0.53033,-3.51525 0.89225,-7.08783 0.89225,-10.75c0,-3.66217 -0.36192,-7.23475 -0.89225,-10.75h-12.21558z" fill="#e53935"></path><path d="M75.25,96.75v-21.5h-10.62458h-33.6475h-15.75233c-0.53033,3.51525 -0.89225,7.08783 -0.89225,10.75c0,3.66217 0.36192,7.23475 0.89225,10.75h14.22942z" fill="#e53935"></path><path d="M96.75,156.77442v-54.35558v-5.66883v-21.5v-7.17742v-52.847c-3.51525,-0.53033 -7.08783,-0.89225 -10.75,-0.89225c-3.66217,0 -7.23475,0.36192 -10.75,0.89225v51.256v2.27183v6.49658v21.5v7.84033v52.18408c3.51525,0.53033 7.08783,0.89225 10.75,0.89225c3.66217,0 7.23475,-0.36192 10.75,-0.89225z" fill="#e53935"></path></g></g></g></svg>
                          </a>
                        </li>

                        <li>
                          <a href="{{ url('/lang/fr')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;">
                            <g transform="translate(4.988,4.988) scale(0.942,0.942)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#cccccc" stroke="#cccccc" stroke-width="10" stroke-linejoin="round"><path d="M99.195,68.94v3.7h-10.97v30.42h-4.48v-30.42h-10.94v-3.7z"></path></g><g stroke="#cccccc" stroke-width="10" stroke-linejoin="round"><path d="M114.66667,151.66458c-8.78275,3.83775 -18.4685,6.00208 -28.66667,6.00208c-10.19817,0 -19.88392,-2.16433 -28.66667,-6.00567v-131.32558c8.78275,-3.83775 18.4685,-6.00208 28.66667,-6.00208c10.19817,0 19.88392,2.16433 28.66667,6.00208z" fill="#eceff1"></path><path d="M114.66667,151.661v-131.32558c25.30192,11.06533 43,36.28483 43,65.66458c0,29.37975 -17.69808,54.59925 -43,65.661z" fill="#ff3d00"></path><path d="M57.33333,20.33542v131.32917c-25.30192,-11.06533 -43,-36.28483 -43,-65.66458c0,-29.37975 17.69808,-54.59925 43,-65.66458z" fill="#3f51b5"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M114.66667,20.33542c-8.78275,-3.83775 -18.4685,-6.00208 -28.66667,-6.00208c-10.19817,0 -19.88392,2.16433 -28.66667,6.00208v131.32558c8.78275,3.84133 18.4685,6.00567 28.66667,6.00567c10.19817,0 19.88392,-2.16433 28.66667,-6.00208z" fill="#eceff1"></path><path d="M157.66667,86c0,-29.37975 -17.69808,-54.59925 -43,-65.66458v131.32558c25.30192,-11.06175 43,-36.28125 43,-65.661z" fill="#ff3d00"></path><path d="M14.33333,86c0,29.37975 17.69808,54.59925 43,65.66458v-131.32917c-25.30192,11.06533 -43,36.28483 -43,65.66458z" fill="#3f51b5"></path></g><g fill="#cccccc" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M99.195,68.94v3.7h-10.97v30.42h-4.48v-30.42h-10.94v-3.7z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
                          </a>
                        </li>

                      </ul>
                    </div>
                    &nbsp &nbsp &nbsp
                   
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
                    
                        <img src="img/new_lolo.svg" alt=""   />
                    
                      </a>
                  </div>

                </div>
 
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                  <ul class="nav navbar-nav" id="listt">
                    <li id="home"><a href="{{url('/')}}">{{__('_nav._home')}}</a></li>
                    {{-- <li id="news"><a href="{{url('/news')}}">{{__('_nav._news')}}</a></li> --}}
                    {{-- <li id="service"><a href="{{url('/service')}}">{{__('_nav._service')}}</a></li> --}}
                    <li id="service">
                      <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('_nav._service')}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-item" ><a href="{{url('/service')}}">خدماتنا</a></div>
                        <div class="dropdown-item" ><a href="">مؤساسات</a></div>
                        <div class="dropdown-item" ><a href="">البطاقة الدولية </a></div>
            
                      </div>
                    </li>
                    {{-- <li id="yourhealth"><a href="{{url('/yourHealth')}}">{{__('_nav._your_health')}}</a></li> --}}

                    <li id="yourhealth">
                      <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__('_nav._your_health')}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <div class="dropdown-item" ><a href="{{url('/yourHealth')}}">{{__('_nav._doctor_medicit')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._pregnancy_and_motherhood')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._chronic_diseases')}} </a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._card_international')}}</a></div>
                        <div class="dropdown-item" ><a href="{{url("/yourHealth?x=x")}}">{{__('_nav._health_and_fitness')}}</a></div>
                      </div>
                    </li>
                    
                    <li id="bookingNav"><a  href="{{url('/bookingg')}}">{{__('_nav._booking')}}</a></li>
                    {{-- <li><a href="#facilities">Find Us</a></li> --}}
                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._about_us')}}</a></li>
                    <li id="about_us"><a href="{{url('/about-us')}}">{{__('_nav._customer_service')}}</a></li>
                    <li id="about_us"><a href="{{url('/about-us')}}">Investisseurs</a></li>
                    {{-- <li id="find_us"><a href="{{url('/find-us')}}">{{__('_nav._find_us')}}</a></li> --}}
                  
                   
                    
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
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{-- <script src="{{asset('js/app.js')}}"></script> --}}

<script>


</script>

{{-- <script src="{{asset('js/pages/booking.js')}}"></script> --}}
