@php
  App::setLocale(	Session::get('applocale'));
  $x=Session::get('applocale');
@endphp

@extends('layouts.master')

@section('head')
  <link rel="stylesheet" href="{{asset('css/pages/index.css')}}">
 
@endsection

@section('content')

@include('layouts.partials._header')

    <!-- Section: boxes -->
@switch(Session::get('applocale'))

  @case('ar')
      
    <section id="boxes" class="home-section paddingtop-80">

      <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="box text-center">

         <h1 class="h-bold">{{__('index.our_services')}}</h1>
         
        </div>  
      </div>
      <div class="container">
        <div class="row">

          @foreach ($companyServices as $service)
              
          
              <div class="col-sm-3 col-md-3 col-md-3-icon">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box text-center">
                    <div>
                      <img src="{{asset("$service->img_path")}}" style="width: 40%;margin-right: 31%" class="img-responsive" alt="" />
                    </div>

                    {{-- <i class="{{ $service->img_path }}" aria-hidden="true"></i> --}}
                    <h4 class="h-bold"> 
                      {{-- {{__('index.healthcare_identity')}}  --}}
                      {{ $service->titel_ar }}
                    </h4>
                    @php
                          echo($service->descrption_ar )
                    @endphp
                          {{-- {{!! $service->descrption_ar !!}} --}}
                     
                   
                  </div>
                </div>
              </div>

          @endforeach


        </div>
      </div>

    </section>
    @break
  @case('en')
      
    <section id="boxes" class="home-section paddingtop-80">

      <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="box text-center">

         <h1 class="h-bold">{{__('index.our_services')}}</h1>
         
        </div>  
      </div>
      <div class="container">
        <div class="row">

          @foreach ($companyServices as $service)
              
          
              <div class="col-sm-3 col-md-3 col-md-3-icon">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box text-center">
    
                    <div>
                      <img src="{{asset("$service->img_path")}}" style="width: 40%;margin-left: 31%" class="img-responsive" alt="" />
                    </div>
                    <a href="">
                      <h4 class="h-bold"> 
                          {{ $service->titel_en }}
                      </h4>
                    </a>
                    {{-- <p>{{__('index.healthcare_identity_details')}}</p> --}}
                   
                    @php
                    echo($service->descrption_en )
                   @endphp
                   
                  </div>
                </div>
              </div>

          @endforeach


        </div>
      </div>

    </section>
    @break
  @case('fr')
      
    <section id="boxes" class="home-section paddingtop-80">

      <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="box text-center">

         <h1 class="h-bold">{{__('index.our_services')}}</h1>
         
        </div>  
      </div>
      <div class="container">
        <div class="row">

          @foreach ($companyServices as $service)
              
          
              <div class="col-sm-3 col-md-3 col-md-3-icon">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box text-center">
    
                    <div>
                      <img src="{{asset("$service->img_path")}}" style="width: 40%;margin-left: 31%" class="img-responsive" alt="" />
                    </div>
                    <h4 class="h-bold"> 
                      {{-- {{__('index.healthcare_identity')}}  --}}
                      {{ $service->titel_fr }}
                    </h4>
                    {{-- <p>{{__('index.healthcare_identity_details')}}</p> --}}
                   
                    @php
                    echo($service->descrption_fr )
                   @endphp
                   
                  </div>
                </div>
              </div>

          @endforeach


        </div>
      </div>

    </section>
    @break
@endswitch


    <!-- /Section: boxes -->

    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>تطبيق Medicate علاش نبوة ؟</h3>
                      <p> </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div style="text-align: -moz-center;" class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="{{asset('img/pages/index/phone2.png')}}" style="width: 40%;" class="img-responsive" alt="" />
           
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                    <img src="{{asset('img/pages/index/icon/الشبكة-الطبية.png')}}" width="61px" alt="">
                </div>
                <div class="service-desc">
                  <h5 class="h-light">مجموعة متنوعة من المرافق الصحية</h5>
                  <p>يتم توفير الوصول لمجموعة واسعة من المرافق الصحية</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="{{asset('img/pages/index/icon/حجز-مواعيد.png')}}" width="61px" alt="">

                </div>
                <div class="service-desc">
                  <h5 class="h-light">فحصات الرعاية الصحية</h5>
                  <p>تذكير بالفحصات الصحية علي فترة منتظمة</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="{{asset('img/pages/index/icon/الخدمات.png')}}" width="61px" alt="">

                </div>
                <div class="service-desc">
                  <h5 class="h-light">الموقع</h5>
                  <p>البحث عن الشركات في الداخل و الخارج بكل سهولة و يسر</p>
                </div>
              </div>
            </div>
          


          </div>
          <div class="col-sm-3 col-md-3">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="{{asset('img/pages/index/icon/كيوار.png')}}" width="61px" alt="">

                </div>
                <div class="service-desc">
                  <h5 class="h-light">رمز الاستجابة السريع QR </h5>
                  <p>بطقة ميديكيت بها رمز QR فريد من نوعة</p>
                </div>
              </div>
            </div>

            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="{{asset('img/pages/index/icon/الملف-الشخصي.png')}}" width="61px" alt="">

                </div>
                <div class="service-desc">
                  <h5 class="h-light">السجلات الصحية</h5>
                  <p>عضويتك تتيح لك الوصول الي الملفات الصحية الالكترونية</p>
                </div>
              </div>
            </div>
            <div class="wow fadeInRight" data-wow-delay="0.3s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="{{asset('img/pages/index/icon/عروض.png')}}" width="61px" alt="">
                </div>
                <div class="service-desc">
                  <h5 class="h-light">تخفيضات</h5>
                  <p>تخفيضات وعروض حصرية علي الخدمات الصحية</p>
                </div>
              </div>
            </div>
          

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    {{-- <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Doctors</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
                <div class="cbp-filter-counter"></div>)</div>
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <li class="cbp-item psychiatrist">
                  <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/1.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                  <div class="cbp-l-grid-team-position">Psychiatrist</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/3.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <li class="cbp-item neurologist">
                  <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                  <div class="cbp-l-grid-team-position">Neurologist</div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section> --}}
    <!-- /Section: team -->



    <!-- Section: News -->
@switch(Session::get('applocale'))
  @case('ar')

      <section id="facilities" class="home-section paddingbot-60">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">News</h2>
                  <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                </div>
              </div>
              <div class="divider-short"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section: works -->


      <!-- Section: testimonial -->
      <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      
        <div class="carousel-reviews broun-block">
          <div class="container">
            <div class="row">
              <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                
                        
              
                  <div class="carousel-inner">
                      <div class="item active">
                        @foreach ($news as $oneNews)
                            
                      
                        {{-- @for ($i = 0; $i < 3; $i++) --}}
                        
                        <div class="col-md-4 col-sm-6">

                          <a href="">

                            <div id="item-news" class="block-text rel zmin" >

                              <div class="mark">

                                {{\Carbon\Carbon::parse($oneNews->created_at)->diffForHumans()}}
                            
                              </div>
                            
                              <span class="rating-input">
                            
                                <i>
                            
                                  {{$oneNews->titel_ar}}
                            
                                </i>
                            
                              </span>
                              
                              <p> {{$oneNews->description_ar}}</p>
                            
                              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            
                            </div>
                          </a>
                        </div>
                          @endforeach 
                        </div>
                        
                      </div>
                        {{-- @endfor --}}
                      </div> 
                    


                </div>

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                <a class="right carousel-control" style="margin-right: 0px;" href="#carousel-reviews" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
          
        </div>
        <a href="{{url('/news')}}" class="btn btn-warning" > 
        المزيد من الاخبار
        </a>
      </section>
      <!-- /Section: testimonial -->

    @break
  @case('en')

      <section id="facilities" class="home-section paddingbot-60">
        <div class="container marginbot-50">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                  <h2 class="h-bold">News</h2>
                  <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                </div>
              </div>
              <div class="divider-short"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section: works -->


      <!-- Section: testimonial -->
      <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

      
        <div class="carousel-reviews broun-block">
          <div class="container">
            <div class="row">
              <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                
                        
              
                  <div class="carousel-inner">
                      <div class="item active">
                        @foreach ($news as $oneNews)
                            
                      
                        {{-- @for ($i = 0; $i < 3; $i++) --}}
                        
                        <div class="col-md-4 col-sm-6">

                          <a href="">

                            <div id="item-news" class="block-text rel zmin" >

                              <div class="mark">

                                {{\Carbon\Carbon::parse($oneNews->created_at)->diffForHumans()}}
                            
                              </div>
                            
                              <span class="rating-input">
                            
                                <i>
                            
                                  {{$oneNews->titel_en}}
                            
                                </i>
                            
                              </span>
                              
                              <p> {{$oneNews->description_en}}</p>
                            
                              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                            
                            </div>
                          </a>
                        </div>
                          @endforeach 
                        </div>
                        
                      </div>
                        {{-- @endfor --}}
                      </div> 
                    


                </div>

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                <a class="right carousel-control" style="margin-right: 0px;" href="#carousel-reviews" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
          
        </div>
        <a href="{{url('/news')}}" class="btn btn-warning" > 
        More News
        </a>
      </section>
      <!-- /Section: testimonial -->

    @break
  @case('fr')

    <section id="facilities" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">News</h2>
                <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>
    </section>
  <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

    
      <div class="carousel-reviews broun-block">
        <div class="container">
          <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
              
                      
            
                <div class="carousel-inner">
                    <div class="item active">
                      @foreach ($news as $oneNews)
                          
                    
                      {{-- @for ($i = 0; $i < 3; $i++) --}}
                      
                      <div class="col-md-4 col-sm-6">

                        <a href="">

                          <div id="item-news" class="block-text rel zmin" >

                            <div class="mark">

                              {{\Carbon\Carbon::parse($oneNews->created_at)->diffForHumans()}}
                          
                            </div>
                          
                            <span class="rating-input">
                          
                              <i>
                          
                                {{$oneNews->titel_fr}}
                          
                              </i>
                          
                            </span>
                            
                            <p> {{$oneNews->description_fr}}</p>
                          
                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                          
                          </div>
                        </a>
                      </div>
                        @endforeach 
                      </div>
                      
                    </div>
                      {{-- @endfor --}}
                    </div> 
                  


              </div>

              <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              <a class="right carousel-control" style="margin-right: 0px;" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        
      </div>
      <a href="{{url('/news')}}" class="btn btn-warning" > 
        plus d’actualités
      </a>
    </section>
    <!-- /Section: testimonial -->

    @break
@endswitch

  

    <!-- Section: pricing -->
    <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Health packages</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2>Basic Fit 1 Package</h2>
                <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2>Golden Glow Package</h2>
                <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                  <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                  <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2>Basic Fit 2 Package</h2>
                <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                <ul>
                  <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                  <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                  <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                  <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                </ul>

                <div class="price-bottom">
                  <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p>Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>





    @endsection

    @section('script')
       <script src="{{asset('js/pages/index.js')}}"></script>
    @endsection