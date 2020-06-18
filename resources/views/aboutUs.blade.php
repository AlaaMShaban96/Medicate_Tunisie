@extends('layouts.master')

@section('head')



<link rel="stylesheet" href="{{asset('css/pages/about_us.css')}}">
<title>Medicate Tunis : About Us</title>
<style>
  #about_us{
		
	}
</style>
@endsection

@section('content')
<img id="cover" src="{{'img/pages/about-us.jpg'}}" style="width: 100%;margin-top: 156px;" alt="" >
{{-- <img id="cover" src="https://panoramicresources.com/wp-content/uploads/2015/09/hd-about.jpg" style="width: 100%;margin-top: 156px;" alt="" > --}}



<div id="time">
    <div class="page">
      <h1 class="text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">- Our Career -</h1>
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
                  <p>We have gathered to come up with an idea that will solve the prevailing problems of health care in Libya and emergencies at affordable prices. </p>
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
                  <p>Through a deeper understanding of the problem that every Libyan faces in accessing healthcare, we continued to establish Medicet, which aims to make healthcare affordable and affordable through a health card. </p>
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
                  <p>After the organization being founded in 2013, we performed qualitative and quantitative studies in order to understand the means with which we could solve the problems existing in the healthcare system. The extensive research conducted during this time has helped us to recognize issues like medical papers getting mouldered, difficulty in finding hospitals and clinic during emergency and so on. </p>
                </div>
              </div>
              <div class="timeline__post">
                <div class="timeline__content">
                  <p>Finally, we took the bold step of registering our company in order to provide customers with the solutions we designed.  </p>
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
                  <p>Finally, we took the bold step of registering our company in order to provide customers with the solutions we designed. </p>
                </div>
                <br>
                <div class="timeline__content">
                  <p>Driven by our desire to make the entire system flawless, we have launched a pilot launch of the mobile app in order to gain an effective understanding of how to help intended users. </p>
                </div>
                <br>
                <div class="timeline__content">
                  <p>We have never rushed to develop this whole process in a short time. Because we know that doing good is a matter of time. Through a proper understanding of the health problems of the entire Libya, we have passed one step at a time. Now is the time to provide services to all Libyans who have suffered from medical negligence and lack of medical services and so on for years. </p>
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


@endsection

@section('script')
 
@endsection