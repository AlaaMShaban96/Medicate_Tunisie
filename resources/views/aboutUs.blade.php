@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')


<link rel="stylesheet" href="{{asset('css/pages/find_us.css')}}">
<link rel="stylesheet" href="{{asset('css/pages/about_us.css')}}">
<title>Medicate Tunis : About Us</title>
<style>
.centeredd {
  position: absolute;
  top: 30%;
  left: 35%;
  transform: translate(-70%, -30%);
}

blockquote:before {
  color:black;
  content:open-quote;
  font-size:4em;
  line-height:.1em;
  /* margin-right:.25em; */
  vertical-align:-.4em;
}
blockquote:after {
  color:black;
  content:close-quote;
  font-size:4em;
  line-height:.1em;
  margin-right:.25em;
  vertical-align:-.4em;
}
#lang-content-navbar-ar{
  padding-right: 40px;
}
</style>
@endsection

@section('content')

<div style="width: 100%;margin-top: 130px; position: relative;" >
  <img id="cover" src="{{'img/pages/About-us.png'}}" style="width: 100%;" alt="" >
  <div class="centeredd">
    
<blockquote>
  Healthcare is
  every citizen's
  right
</blockquote>
    
  </div>
</div>
{{-- <img id="cover" src="https://panoramicresources.com/wp-content/uploads/2015/09/hd-about.jpg" style="width: 100%;margin-top: 156px;" alt="" > --}}

<div class="content">

  <div>
      <p>{{__('about_us.about_part_1')}}</p>
  </div>
  <div>
    <p>{{__('about_us.about_part_2')}}</p>
  </div>
  <div>
    <p>{{__('about_us.about_part_3')}}</p>
  </div>



</div>







<div id="time">
    <div class="page">
      {{-- <h1 class="text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">-{{__('about_us.our_career')}} -</h1> --}}
        <div class="timeline">
          <div class="timeline__group">
            {{-- <span class="timeline__year">2008</span> --}}
            <div class="timeline__box">
              <div class="timeline__date">
                <span class="timeline__year">2016</span>
                {{-- <span class="timeline__month">Feb</span> --}}
              </div>
              <div class="timeline__post">
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2016')}}</p>
                </div>
              </div>
            </div>
            <div class="timeline__box">
              <div class="timeline__date">
                <span class="timeline__year">2017</span>
                {{-- <span class="timeline__month">Sept</span> --}}
              </div>
              <div class="timeline__post">
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2017')}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="timeline__group">
            {{-- <span class="timeline__year">2014</span> --}}
            <div class="timeline__box">
              <div class="timeline__date">
                <span class="timeline__year">2018</span>
                {{-- <span class="timeline__month">Jul</span> --}}
              </div>
              <div class="timeline__post">
                <div class="timeline__content">

                    <p>{{__('about_us.our_career_2018_part_1')}}</p>
                </div>
              </div>
              <div class="timeline__post">
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2018_part_2')}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="timeline__group">
            <div class="timeline__box">
              <div class="timeline__date">
                <span class="timeline__year">2019</span>
                {{-- <span class="timeline__month">Aug</span> --}}
              </div>
              <div class="timeline__post">
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2019_part_1')}}</p>
                </div>
                <br>
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2019_part_2')}}</p>
                </div>
                <br>
                <div class="timeline__content">
                  <p>{{__('about_us.our_career_2019_part_3')}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
</div>





<br>
{{-- Our team --}}

<div >
  <h1 class="text-center">- Our Team Doctors -</h1>

  <section>
    <div class="container">
      <div class="row flex-center sm-no-flex">

        <div class="pull-right sm-no-float col-md-8">
          <ul class="team-members">
            <!-- single member row starts -->
            <li class="clearfix">
              <div class="member-details">
                <div>
                  <img src="http://gocheckers.com/images/roster/andrew_poturalski_headshot_1718.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>


              <div class="member-details">
                <div>
                  <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>
            </li><!-- /single member row ends -->

            <!-- single member row starts -->
            <li class="clearfix">
              <div class="member-details">
                <div>
                  <img src="https://axis.org/wp-content/uploads/2015/05/evan-headshot.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>

              <div class="member-details">
                <div>
                  <img src="http://gocheckers.com/images/roster/andrew_poturalski_headshot_1718.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>

              <div class="member-details">
                <div>
                  <img src="https://axis.org/wp-content/uploads/2015/12/2015-Dougie-Headshot.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>
            </li><!-- /single member row ends -->

            <!-- single member row starts -->
            <li class="clearfix">
              <div class="member-details">
                <div>
                  <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>

              <div class="member-details">
                <div>
                  <img src="https://axis.org/wp-content/uploads/2014/12/jeremiah-e1418073411753.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>

              <div class="member-details">
                <div>
                  <img src="http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png" alt="UI Designer">
                  <div class="member-info">
                    <h3>John Doe</h3>
                    <p>UI Designer</p>
                  </div>
                </div>
              </div>
            </li><!-- /single member row ends -->

          </ul><!-- /end team-photos -->
        </div><!-- /end col-md-8 -->

      </div><!-- /end row -->
    </div><!-- /end container -->
  </section>



{{--   

  <div class="container" style="padding-top: 10%;">
    <h1 class="text-center">- Our Team IT -</h1>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
          </div>
          <div class="team-content">
            <h3 class="name">علاء محمد شعبان</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
          </div>
          <div class="team-content">
            <h3 class="name">هشام</h3>
            <h4 class="title">Android Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
          </div>
          <div class="team-content">
            <h3 class="name">Michele Miller</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
          </div>
          <div class="team-content">
            <h3 class="name">Michele Miller</h3>
            <h4 class="title">Web Developer</h4>
          </div>
          <ul class="social">
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<section>
  <div id="xx">
    <div class="container">
  
    <h1 class="text-center"> {{__('find_us.find_us')}} </h1>
      <div class="row"> 
      <!--team-4--> 
        <div class="col-lg-4">
          <div class="our-team-main">
          
            <div class="team-front">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/2000px-Flag_of_Libya.svg.png"  class="img-fluid" />
              <h3>{{__('find_us.libya_titel')}}</h3>
              {{-- <p>Web Designer</p> --}}
            </div>
            
            <div class="team-back">
              <span>
                {{__('find_us.libya_discription')}}
                <br>
                <b>Tel: +973 1 7382721</b><br>
                <b>Fax: +973 1 7382082</b><br>
                
                Email: nextcare@nextcarehealth.com
              </span>
              <br>
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
  
            </div>
          
          </div>
        </div>
        <!--team-4-->
        <div class="col-lg-4">
          <div class="our-team-main">
    
          <div class="team-front">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" class="img-fluid" />
            <h3>Turkey</h3>
            {{-- <p>Web Designer</p> --}}
          </div>
    
          <div class="team-back">
            <span>
              <p>
                Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
              </p>
              <b>Tel: +973 1 7382721</b><br>
              <b>Fax: +973 1 7382082</b><br>
              <p>P.O.Box 18442 Manama, Kingdom of Bahrain
              Email: nextcare@nextcarehealth.com</p>
            </span>
            <br>
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
          </div>
    
          </div>
        </div>
      <!--team-1-->
      
  
      <!--team-2-->
        <div class="col-lg-4">
          <div class="our-team-main">
  
            <div class="team-front">
              <img src="https://flagpedia.net/data/flags/vector/tn.svg"   class="img-fluid" />
              <h3>Tunisia</h3>
            {{-- <p>Web Designer</p> --}}
            </div>
  
          <div class="team-back">
            <span>
              <p>
                Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
              </p>
              <b>Tel: +973 1 7382721</b><br>
              <b>Fax: +973 1 7382082</b><br>
              <p>P.O.Box 18442 Manama, Kingdom of Bahrain
              Email: nextcare@nextcarehealth.com</p>
            </span>
            <br>
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
          </div>
  
          </div>
        </div>
      <!--team-2-->
  
      <!--team-3-->
        <div class="col-lg-4">
          <div class="our-team-main">
  
            <div class="team-front">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/800px-Flag_of_Algeria.svg.png"  class="img-fluid" />
              <h3>Algeria</h3>
              {{-- <p>Web Designer</p> --}}
            </div>
  
            <div class="team-back">
              <span>
                <p>
                  Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
                </p>
                <b>Tel: +973 1 7382721</b><br>
                <b>Fax: +973 1 7382082</b><br>
                <p>P.O.Box 18442 Manama, Kingdom of Bahrain
                Email: nextcare@nextcarehealth.com</p>
              </span>
              <br>
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
            </div>
  
          </div>
        </div>
      <!--team-3-->
  
  
  
      <!--team-5-->
      <div class="col-lg-4">
        <div class="our-team-main">
  
          <div class="team-front">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" class="img-fluid" />
            <h3>Germany</h3>
          {{-- <p>Web Designer</p> --}}
          </div>
  
          <div class="team-back">
            <span>
              <p>
                Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
              </p>
              <b>Tel: +973 1 7382721</b><br>
              <b>Fax: +973 1 7382082</b><br>
              <p>P.O.Box 18442 Manama, Kingdom of Bahrain
              Email: nextcare@nextcarehealth.com</p>
            </span>
            <br>
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
          </div>
  
        </div>
      </div>
      <!--team-5-->
      <div class="col-lg-4">
        <div class="our-team-main">
  
        <div class="team-front">
          <img src="https://cdn.webshopapp.com/shops/94414/files/53852256/egypt-flag-image-free-download.jpg"  class="img-fluid" />
          <h3>Egypt</h3>
          {{-- <p>Web Designer</p> --}}
        </div>
  
        <div class="team-back">
          <span>
            <p>
              Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
            </p>
            <b>Tel: +973 1 7382721</b><br>
            <b>Fax: +973 1 7382082</b><br>
            <p>P.O.Box 18442 Manama, Kingdom of Bahrain
            Email: nextcare@nextcarehealth.com</p>
          </span>
          
  
          <br>
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                {{__('find_us.maps')}}
              </a>
        </div>
  
        </div>
      </div>
    <!--team-1-->
      <!--team-6-->
    
      <!--team-6-->
  
  
  
      </div>
    </div>
  </div>
</section>


@endsection

@section('script')
 
@endsection