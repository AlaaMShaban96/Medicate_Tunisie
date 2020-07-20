@php
App::setLocale(	Session::get('applocale'));
@endphp

<link rel="stylesheet" href="{{ asset('css/pages/partials/_footer.css')}}">
<footer>
@switch(Session::get('applocale'))
    @case("ar")
        

          <div class="container" style="display: block ruby;">
            <div class="row">
              {{-- <div class="col-sm-6 col-md-3" id="contact">
                

              </div> --}}

              <div class="col-sm-6 col-md-3" id="contact">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="contact-form widget" >
                    <h5 class="title">{{__('_footer.contact_us')}}</h5>
                  
                    <form action=""> 
                      
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.name')}}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.email')}}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.phone_num')}}</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      
                      <div class="form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.message')}}</span>
                        </div>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="button" class="btn btn-success">{{__('_footer.send')}}</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>Medicio center</h5>
                    <p>
                      Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                    </p>
                    <ul>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                        </span> Mon - Satur, 8am to 10pm
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span> +216 71 948 171
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                        </span> info@medicate.tn
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
          
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.about_medicateLY')}}</h5>
                    <p>{{__('_footer.about_medicate_info')}}</p>
                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.our_location')}}</h5>
                    <p>{{__('_footer.our_location_info')}}</p>

                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.follow_us')}}</h5>
                  
                    <div class="rounded-social-buttons">
                      <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                      <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                      <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
                     
                    </div>
                    
                    
                  </div>
                </div>
              </div>
          
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.about_medicateTUN')}}</h5>
                    <p>{{__('_footer.about_medicate_info')}}</p>
                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.our_location')}}</h5>
                    <p>{{__('_footer.our_location_info')}}</p>

                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.follow_us')}}</h5>
                  
                    <div class="rounded-social-buttons">
                      <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                      <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                      <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
                  
                    </div>
                    
                    
                  </div>
                </div>
              </div>
          
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.about_medicateEGY')}}</h5>
                    <p>{{__('_footer.about_medicate_info')}}</p>
                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.our_location')}}</h5>
                    <p>{{__('_footer.our_location_info')}}</p>

                  </div>
                </div>
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.follow_us')}}</h5>
                  
                    <div class="rounded-social-buttons">
                      <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                      <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                      <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
                   
                    </div>
                    
                    
                  </div>
                </div>
              </div>
          
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.about_medicateMORE')}}</h5>
                    {{-- <p>{{__('_footer.about_medicate_info')}}</p> --}}
                  </div>
                </div>
                  <h5>soon ....</h5>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>{{__('_footer.about_medicateALG')}}</h5>
                    {{-- <p>{{__('_footer.about_medicate_info')}}</p> --}}
                  </div>
                </div>
                  <h5>soon ....</h5>
              </div>
              
            </div>
            
            </div>
            <div class="sub-footer">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.1s">
                      <div class="text-left">
                        <p>&copy;Copyright - medicate. All rights reserved.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                      <div class="text-right">
                        <div class="credits">
                          Designed by <a href="#">medicate</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @break
   
    @default
        
    <div class="container" style="display: block ruby;">
      <div class="row">
        {{-- <div class="col-sm-6 col-md-3" id="contact">
          

        </div> --}}

        <div class="col-sm-6 col-md-3" id="contact">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="contact-form widget" >
              <h5 class="title">{{__('_footer.contact_us')}}</h5>
            
              <form action=""> 
                
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.name')}}</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.email')}}</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.phone_num')}}</span>
                  </div>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">{{__('_footer.message')}}</span>
                  </div>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-success">{{__('_footer.send')}}</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Medicio center</h5>
              <p>
                Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
              </p>
              <ul>
                <li>
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                  </span> Mon - Satur, 8am to 10pm
                </li>
                <li>
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span> +216 71 948 171
                </li>
                <li>
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                  </span> info@medicate.tn
                </li>

              </ul>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.about_medicateLY')}}</h5>
              <p>{{__('_footer.about_medicate_info')}}</p>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.our_location')}}</h5>
              <p>{{__('_footer.our_location_info')}}</p>

            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.follow_us')}}</h5>
            
              <div class="rounded-social-buttons">
                <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
               
              </div>
              
              
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.about_medicateTUN')}}</h5>
              <p>{{__('_footer.about_medicate_info')}}</p>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.our_location')}}</h5>
              <p>{{__('_footer.our_location_info')}}</p>

            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.follow_us')}}</h5>
            
              <div class="rounded-social-buttons">
                <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
              </div>
              
              
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.about_medicateEGY')}}</h5>
              <p>{{__('_footer.about_medicate_info')}}</p>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.our_location')}}</h5>
              <p>{{__('_footer.our_location_info')}}</p>

            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.follow_us')}}</h5>
            
              <div class="rounded-social-buttons">
                <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
                <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
                <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
             
              </div>
              
              
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.about_medicateMORE')}}</h5>
              {{-- <p>{{__('_footer.about_medicate_info')}}</p> --}}
            </div>
          </div>
            <h5>soon ....</h5>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>{{__('_footer.about_medicateALG')}}</h5>
              {{-- <p>{{__('_footer.about_medicate_info')}}</p> --}}
            </div>
          </div>
            <h5>soon ....</h5>
        </div>
        
      </div>
      
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - medicate. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    Designed by <a href="#">medicate</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endswitch
  </footer>