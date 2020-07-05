@php
App::setLocale(	Session::get('applocale'));
@endphp

 <!-- Section: intro -->

<link rel="stylesheet" href="{{ asset('css/pages/partials/_header.css')}}">

@switch(Session::get('applocale'))

    @case("ar")

    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="img/dummy/img-1.png" id="img-responsive-hide"class="img-responsive" alt="" style="margin-left: 32%;" />
              
              </div>
            </div>
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2  class="h-ultra">{{__('_header.titel_name')}}</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">{{__('_header.titel_description')}}</h4>
              </div> 
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
  
                  <ul class="lead-list">
                    <li>
                      <span class="fa fa-check fa-2x icon-success"></span>
                      <span class="list">
                        <strong>
                          {{__('_header.service_name1')}}
                        </strong>
                        <br/>
                        {{__('_header.service_description1')}}
                      </span>
                    </li>
                    <li>
                      <span class="fa fa-check fa-2x icon-success"></span>
                      <span class="list">
                        <strong>
                          {{__('_header.service_name2')}}
                        </strong>
                        <br/>
                        {{__('_header.service_description2')}}
                      </span>
                    </li>
                    <li>
                      <span class="fa fa-check fa-2x icon-success"></span>
                      <span class="list">
                        <strong>
                          {{__('_header.service_name3')}}
                        </strong>
                        <br/>
                        {{__('_header.service_description3')}}
                      </span>
                    </li>
  
                  </ul>
                 
                    <button type="button" data-wow-delay="0.4s" class="btn btn-primary text-right wow bounceIn" data-toggle="modal" data-target="#loginModal">
                      {{__('_header._login')}}
                    </button>
                 
                  
                    <button type="button" data-wow-delay="0.4s" class="btn btn-success text-right wow bounceIn " data-toggle="modal" data-target="#singupModal">
                      {{__('_header._singup')}}
                    </button>
                  
                </div>
              </div>
  
  
            </div>
  
  
           
          </div>
        </div>
      </div>
    </section>
  
  
        @break
   
    @default

        <section id="intro" class="intro">
          {{-- <div class="intro-content"> --}}
            {{-- <div class="container"> --}}
              {{-- <div class="row">
              
                <div class="col-lg-6">
                  <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                    <h2  class="h-ultra" >{{__('_header.titel_name')}}</h2>
                  </div>
                  <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                    <h4 class="h-light">{{__('_header.titel_description')}}</h4>
                  </div> 
                  <div class="well well-trans"> --}}
                    {{-- <div class="wow fadeInRight" data-wow-delay="0.1s">
      
                      <ul class="lead-list">
                        <li>
                          <span class="fa fa-check fa-2x icon-success"></span>
                          <span class="list">
                            <strong class="text-anmition">
                              {{__('_header.service_name1')}}
                            </strong>
                            <br/>
                            {{__('_header.service_description1')}}
                          </span>
                        </li>
                        <li>
                          <span class="fa fa-check fa-2x icon-success"></span>
                          <span class="list">
                            <strong class="text-anmition">
                              {{__('_header.service_name2')}}
                            </strong>
                            <br/>
                            {{__('_header.service_description2')}}
                          </span>
                        </li>
                        <li>
                          <span class="fa fa-check fa-2x icon-success"></span>
                          <span class="list">
                            <strong class="text-anmition">
                              {{__('_header.service_name3')}}
                            </strong>
                            <br/>
                            <span id="test"></span>
                            {{-- {{__('_header.service_description3')}} --}}
                          {{-- </span>
                        </li>
      
                      </ul>
                    
                        <button type="button" data-wow-delay="0.4s" class="btn btn-primary text-right wow bounceIn" data-toggle="modal" data-target="#loginModal">
                          {{__('_header._login')}}
                        </button>
                    
                      
                        <button type="button" data-wow-delay="0.4s" class="btn btn-danger text-right wow bounceIn " data-toggle="modal" data-target="#singupModal">
                          {{__('_header._singup')}}
                        </button>
                      
                    </div> --}}


                    <div id="slider">
                      <button type="button" data-wow-delay="0.4s" class="btn btn-primary text-right wow bounceIn" data-toggle="modal" data-target="#loginModal">
                        {{__('_header._login')}}
                      </button>
                  
                    
                      <button type="button" data-wow-delay="0.4s" class="btn btn-danger text-right wow bounceIn " data-toggle="modal" data-target="#singupModal">
                        {{__('_header._singup')}}
                      </button>
                      <a  class="control_next">>></a>
                      <a  class="control_prev"><</a>

                      <ul>
                        <li >
                             <div>
                             </div>
                               
                               <img class="slider-img" src="https://pbs.twimg.com/media/EZ5rdHBXgAACye4.jpg" alt="">
                              


                        </li>
                        <li>

                          <img class="slider-img" src="https://i.vimeocdn.com/video/809649943_780x439.jpg" alt="" srcset="">
                        </li>
                        <li>SLIDE 3</li>
                        <li>SLIDE 4</li>
                        <li>SLIDE 5</li>
                        <li>
                          <img class="slider-img"  src="https://pbs.twimg.com/media/EYi6KloWAAAtTBq.jpg" alt="" srcset="">

                        </li>
                      </ul>  
                    </div>

                    <div class="slider_option">
                      <input type="checkbox" id="checkbox">
                      <label for="checkbox">Autoplay Slider</label>
                    </div> 

  {{--                   
                  </div>
      
      
                </div>
      
                <div class="col-xs-6">
                  <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <img src="img/dummy/img-1.png" id="img-responsive-hide"class="img-responsive" alt="" style="margin-left: 32%;" />
                  
                  </div>
                </div>
              
              </div> --}}
            {{-- </div> --}}
          {{-- </div> --}}
        </section>
      
      
        
@endswitch

















  <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <div class="tab-content-header">
            <h3 >
              {{__('_header._login')}}
            </h3>

          </div>
        </h5>
       
        </button>
      </div>
      <div class="modal-body">

          <div class="form-body">

            <form id="loginForm" name="loginForm" data-ng-submit="login(loginForm);" novalidate="" class="ng-pristine ng-invalid ng-invalid-required">
            <input type="hidden" name="type" data-ng-model="type" data-ng-init="type=&#39;PARTNER&#39;" value="PARTNER" autocomplete="off" class="ng-pristine ng-untouched ng-valid ng-not-empty">
             
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form">
                    <label for="loginEmail" class="">Enter Email (or) Mobile No</label>
                    <input type="text" name="email" id="loginEmail" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="email" required="">
                    
                    <!-- ngIf: loginForm.email.$invalid && loginForm.email.$touched -->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form">
                    <label for="loginPassword" class="">Password</label>
                    <input type="password" id="loginPassword" name="password" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="password" required=""> 
                    <!-- ngIf: loginForm.password.$invalid && loginForm.password.$touched -->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="custom-control custom-checkbox sign-check">
                    <!-- <input type="checkbox" class="custom-control-input"
                      id="accept">
                     <label class="custom-control-label" for="accept">Remember Me</label> -->
                    <a href="https://mymedicare.in/forgot-password" target="_self" style="color: black;">Forgot
                      password?</a>
                  </div>
                </div>



                <div class="col-md-12">
                  <div class="md-form">
                    <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-danger" data-ng-disabled="loginForm.$invalid || showSpinner" disabled="disabled"></div>
                  </div>
                </div>
              </div>
            </form>


          </div>
         



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
  <!-- Modal sing up-->
<div class="modal fade" id="singupModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-flex;">{{__('_header._singup')}}</h5>
      

      </div>
      <div class="modal-body">
        
        <div id="menu" class="row">
         

          <nav style="text-align: center;">
            <button type="button" class="singupType" id="navdoctor" >
              <span class="col nav-item nav-link waves-effect waves-light active show" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="nav-doctor" aria-selected="true" data-ng-click="clickTab('doctorMap')">
                <div class="tab-img">
                  <img src="img/singupType/doctor.png" alt="doctor">
                </div> {{__('_header.doctor')}}
              </span>
            </button>
            <button type="button" class="singupType" id="navpharmacy"> 
              <span class="col nav-item nav-link waves-effect waves-light" id="nav-profile-tab" data-toggle="tab" href="#pharmacy" role="tab" aria-controls="nav-pharmacy" aria-selected="false" data-ng-click="clickTab('pharmacyMap')">
                <div class="tab-img">
                  <img src="img/singupType/pharmacy.png" alt="pharmacy">
                </div>{{__('_header.parmacy')}}
              </span> 
            </button>
            <button type="button" class="singupType" id="navdiag">
              <span class="col nav-item nav-link waves-effect waves-light" id="diagno-tab" data-toggle="tab" href="#diagno" role="tab" aria-controls="nav-diagno" aria-selected="false" data-ng-click="clickTab('diagregMap')">
                <div class="tab-img">
                  <img src="img/singupType/diag.png" alt="diag">
                </div>{{__('_header.diag')}}
              </span> 
            </button>
            <button type="button" class="singupType" id="navclinic">
              <span class="col nav-item nav-link waves-effect waves-light" id="clinics-tab" data-toggle="tab" href="#clinics" role="tab" aria-controls="nav-clinics" aria-selected="false" data-ng-click="clickTab('facilityMap')">
                <div class="tab-img">
                  <img src="img/singupType/clinic.png" alt="clinic">
                </div>{{__('_header.clinic')}}
              </span>
            </button>
        
          </nav>
          
        

         
         
      </div>

{{-- doctor form --}}

      <div id="doctor">

        <div class="form-body">

          <div class="form-body">
          
            
              <div class="row">
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorContactname" class="">
                      {{__('_header.doctor_name')}}
                    </label>
                    <label id="doctornameError" class="error" > Error</label>
                    <input placeholder="Doctor name" type="text" name="doctorname" id="doctorname" class="form-control" required />
                  </div>
                 

                </div>
            

                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorphoneNo" class=""> {{__('_header.phone_number')}}</label>
                    <label id="doctorphoneNoError" class="error" > Error</label>
                    <input type="text" placeholder="Phone number" name="doctornumber" id="doctorphoneNo" class="form-control" required> 
                    <!-- ngIf: doctorRegForm.doctornumber.$invalid && doctorRegForm.doctornumber.$touched -->
                   
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="md-form">

                    <label for="doctoremail" class=""> {{__('_header.email')}}</label>
                    <label id="doctoremailError" class="error" > Error</label>

                    <input type="email" placeholder="Email" name="doctoremail" id="doctoremail" class="form-control" required>
                    <!-- ngIf: doctorRegForm.doctoremail.$invalid && doctorRegForm.doctoremail.$touched -->
                  </div>

                </div>
    
                <div class="col-md-12">
                  <div class="md-form">
                    <label for="doctoraddress" class="">{{__('_header.address')}}</label>
                    <label id="doctoraddressError" class="error" > Error</label>

                    <input type="text" placeholder="Address" name="doctoraddress" id="doctoraddress" class="form-control" required>
                    
                    <!-- ngIf: doctorRegForm.address1.$invalid && doctorRegForm.address1.$touched -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorarea" class="">{{__('_header.area')}}</label>
                    <label id="doctorareaError" class="error" > Error</label>

                    <input type="text" placeholder="Area" name="doctorarea" id="doctorarea" class="form-control" required>
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="city" class="">{{__('_header.city')}}</label>
                    <input type="text" placeholder="City" name="city" id="doctorcity" class="form-control" required>
                  </div>
                </div>
            

                <div class="col-md-12">
                  <div class="md-form">
                    <label class="">{{__('_header.upload_logo')}}</label>
                    <input type="file" id="doctorimageFile" name="doctorImageFile" data-file-model="doctorImageFile" class="mmc-form-control form-control">

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form">
                    <label class="">{{__('_header.documents')}}</label>
                    <input type="file" id="doctorfiles" name="doctorFiles" data-file-model="doctorFiles" class="mmc-form-control form-control" multiple="">
                  </div>
                </div>
              

                <div class="col-md-12">
                  <div class="md-form">
                    <div class="waves-input-wrapper waves-effect waves-light">
                      <input type="submit" id="sendToDoctor" name="to_doctor" value="SEND" class="btn btn-block btn-success" >
                    </div>
                    
                    
                    
                  </div>
                </div>

              </div>
            {{-- </form> --}}
          </div>

        </div>

    </div>
{{-- end doctor form --}}

{{-- parmacy form --}}

    <div id="pharmacy">
      <div class="form-body">
        <div class="form-body">
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyName" class="">{{__('_header.pharmacy_name')}}</label>
                  <label id="pharmacyNameError" class="error" > Error</label>
                  <input type="text" name="name" id="pharmacyName" class="form-control" required=""> 
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyContactName" class="">{{__('_header.contact_person_name')}}</label>
                  <label id="pharmacyContactNameError" class="error" > Error</label>

                  <input type="text" name="contactName" id="pharmacyContactName" class="form-control" required="">
                 
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyMobileNo" class="">{{__('_header.phone_number')}}</label>
                  <label id="pharmacyMobileNoError" class="error" > Error</label>

                  <input type="text" name="mobileNo" id="pharmacyMobileNo" class="form-control" required=""> 
                
                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyEmail" class="">{{__('_header.email')}}</label>
                  <label id="pharmacyEmailError" class="error" > Error</label>

                  <input type="email" name="email" id="pharmacyEmail" class="form-control" required="">
                  
                  <!-- ngIf: pharmacyForm.email.$invalid && pharmacyForm.email.$touched -->
                </div>
              </div>
            
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyregCode" class="">{{__('_header.pharmacy_pharmacy_reg_code')}}</label>
                  <label id="pharmacyregCodeError" class="error" > Error</label>

                  <input type="text" name="regCode" id="pharmacyregCode" class="form-control" required=""> 
                  <!-- ngIf: pharmacyForm.regCode.$invalid && pharmacyForm.regCode.$touched -->
                </div>
              </div>
              <!-- <div class="col-md-6">
                                                                 <div id="pharmacyMap"></div>
                                                               </div> -->
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyaddress" class="">{{__('_header.business_address')}}</label>
                  <label id="pharmacyaddressError" class="error" > Error</label>

                  <input type="text" name="pharmacyaddress" id="pharmacyaddress" class="form-control" required="">
                  
                  <!-- ngIf: pharmacyForm.pharmacyaddress.$invalid && pharmacyForm.pharmacyaddress.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyarea" class="">{{__('_header.area')}}</label>
                  <label id="pharmacyareaError" class="error" > Error</label>

                  <input type="text" name="pharmacyarea" id="pharmacyarea" class="form-control" required="">
                 
                  <!-- ngIf: pharmacyForm.area.$invalid && pharmacyForm.area.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacycity" class="">{{__('_header.city')}}</label>
                  <label id="pharmacycityError" class="error" > Error</label>

                  <input type="text" name="pharmacycity" id="pharmacycity" class="form-control" required="">
                 
                  <!-- ngIf: pharmacyForm.pharmacycity.$invalid && pharmacyForm.pharmacycity.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacystate" class="">{{__('_header.state')}}</label>
                  <label id="pharmacystateError" class="error" > Error</label>

                  <input type="text" name="pharmacystate" id="pharmacystate" class="form-control" required="">
                
                  <!-- ngIf: pharmacyForm.pharmacystate.$invalid && pharmacyForm.pharmacystate.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyzipCode" class="">{{__('_header.ZipCode')}}</label>
                  <label id="pharmacyzipCodeError" class="error" > Error</label>

                  <input type="text" name="pharmacyzipCode" id="pharmacyzipCode" class="form-control" required="">
                 
                  <!-- ngIf: pharmacyForm.pharmacyzipCode.$invalid && pharmacyForm.pharmacyzipCode.$touched -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.upload_logo')}}</p>
                  <input type="file" id="pharmaImageFile" file-model="pharmaImageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.documents')}}</p>
                  <input type="file" id="pharmaFiles" file-model="pharmaFiles" class="mmc-form-control form-control" multiple="">
                </div>
              </div>

              <div class="col-md-12">
              
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" id="sendToPharmacy" value="SEND" class="btn btn-block btn-success"  class="btn btn-block btn-danger" ></div>
                
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
{{-- end parmacy form --}}

{{-- diag form --}}
    <div id="diag">
      <div class="form-body">

        <div class="form-body">
          {{-- <form id="diagregForm" name="diagregForm" data-ng-submit="saveDiagnostic(diagregForm);" method="POST" novalidate="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-email"> --}}
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="name" class="">{{__('_header.diag_name')}}</label>
                  <label id="diagNameError"  > Error</label>
                  <input type="text" name="diagname" id="diagName" class="form-control" required="">
                  <!-- ngIf: diagregForm.diagname.$invalid && diagregForm.diagname.$touched -->
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="contactName" class="">{{__('_header.contact_person_name')}}</label>
                  <label id="diagContactNameError"  > Error</label>
                  <input type="text" name="contactpersonname" id="diagContactName" class="form-control" required="">
                  
                  
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="phoneNo" class="">{{__('_header.phone_number')}}</label>
                  <label id="diagPhoneNoError"  > Error</label>

                  <input type="text" name="phonenumber" id="diagMobileNo" class="form-control" required=""> 
                
                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="diagnosticFormemail" class="">{{__('_header.email')}}</label>
                  <label id="diagEmailError"  > Error</label>
                  <input type="email" name="diagEmail" id="diagEmail" class="form-control" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required=""> 
                  <!-- ngIf: diagregForm.diagemail.$invalid && diagregForm.diagemail.$touched -->

                </div>

              </div>
              
              <div class="col-md-12">
                <div class="md-form">
                  <label for="address1" class="">{{__('_header.business_address')}}</label>
                  <label id="diagAddressError"  > Error</label>

                  <input type="text" name="address1" id="diagaddress" class="form-control" data-ng-model="addressForm.address" required="">
                  
                  <!-- ngIf: diagregForm.address1.$invalid && diagregForm.address1.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="area" class="">{{__('_header.area')}}</label>
                  <label id="diagAreaError"  > Error</label>

                  <input type="text" name="area" id="diagarea" class="form-control" data-ng-model="addressForm.area" required="">
               
                  <!-- ngIf: diagregForm.area.$invalid && diagregForm.area.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="city" class="">{{__('_header.city')}}</label>
                  <label id="diagCityError"  > Error</label>

                  <input type="text" name="city" id="diagcity" class="form-control" data-ng-model="addressForm.city" required="">
                  
                  <!-- ngIf: diagregForm.city.$invalid && diagregForm.city.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="state" class="">{{__('_header.state')}}</label>
                  <label id="diagStateError"  > Error</label>

                  <input type="text" name="state" id="diagstate" class="form-control" data-ng-model="addressForm.state" required="">
                 
                  <!-- ngIf: diagregForm.state.$invalid && diagregForm.state.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="zipCode" class="">{{__('_header.ZipCode')}}</label>
                  <label id="diagZipCodeError"  > Error</label>
                  <input type="text" name="zipCode" id="diagzipCode" class="form-control" required="">
                  
                  <!-- ngIf: diagregForm.zipCode.$invalid && diagregForm.zipCode.$touched -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.upload_logo')}}</p>
                  <input type="file" id="diagImageFile" file-model="diagImageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.documents')}}</p>
                  <input type="file" id="diagFiles" file-model="diagFiles" class="mmc-form-control form-control" multiple="">
                </div>
              </div>
              <div class="col-md-12">
              
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="bottum" id="sendToDiag" value="SEND" class="btn btn-block btn-success" ></div>

                 
                </div>
              </div>

            </div>
          {{-- </form> --}}
        </div>

      </div>
    </div>
{{-- end diag form --}}

{{-- clinic form --}}

    <div id="clinic">
        
      <div class="form-body">
        <div class="form-body">
          <form id="facilityRegForm" name="facilityRegForm" data-ng-submit="saveFacility(facilityRegForm);" method="POST" novalidate="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-email">
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="facilityBusinessName" class="">{{__('_header.clinic_name')}}</label>
                  <label id="clinicNameError"  > Error</label>
                  <input type="text" name="clinicname" id="clinicName" class="form-control" required=""> 
                
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="facilitycontactName" class="">{{__('_header.contact_person_name')}}</label>
                  <label id="clinicContactpersonNameError"  > Error</label>
                  <input type="text" name="contactpersonname" id="clinicContactName" class="form-control" required="">
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="facilityMobile" class="">{{__('_header.phone_number')}}</label>
                  <label id="clinicPhoneNoErrorError"  > Error</label>
                  <input type="text" name="phonenumber" id="clinicMobileNo" class="form-control" required=""> 

                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="facilityEmail" class="">{{__('_header.email')}}</label>
                  <label id="clinicEmailError"  > Error</label>
                  <input type="email" name="clinicemail" id="clinicEmail" class="form-control" required="">
                 
                  <!-- ngIf: facilityRegForm.clinicemail.$invalid && facilityRegForm.clinicemail.$touched -->
                </div>

              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <label for="facilitybusinessLicenseNo" class="">{{__('_header.license_No')}}.</label>
                  <label id="clinicLicenseError"  > Error</label>
                  <input type="text" name="licensenumber" id="cliniclicense" class="form-control" required=""> 
                </div>
              </div>

              <!-- <div class="col-md-6">
                                                                 <div id="facilityMap"></div>
                                                               </div> -->
              <div class="col-md-12">
                <div class="md-form">
                  <label for="address1" class="">{{__('_header.business_address')}}</label>
                  <label id="clinicAddressError"  > Error</label>
                  <input type="text" name="address1" id="clinicaddress" class="form-control" required="">
                 
                  <!-- ngIf: facilityRegForm.address1.$invalid && facilityRegForm.address1.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="area" class="">{{__('_header.area')}}</label>
                  <label id="clinicAreaError"  > Error</label>
                  <input type="text" name="area" id="clinicarea" class="form-control" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="city" class="">{{__('_header.city')}}</label>
                  <label id="clinicCityError"  > Error</label>
                  <input type="text" name="city" id="cliniccity" class="form-control " required="">
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="state" class="">{{__('_header.state')}}</label>
                  <label id="clinicStateError"  > Error</label>
                  <input type="text" name="state" id="clinicstate" class="form-control "  required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="zipCode" class="">{{__('_header.ZipCode')}}</label>
                  <label id="clinicZipCodeError"  > Error</label>
                  <input type="text" name="zipCode" id="cliniczipCode" class="form-control"  required="">
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.upload_logo')}}</p>
                  <input type="file" id="imageFile" file-model="imageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">{{__('_header.documents')}}</p>
                  <input type="file" id="files" file-model="files" class="mmc-form-control form-control" multiple="">
                </div>
              </div>

              <div class="col-md-12">
              
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="bottum" id="sendToClinic" value="SEND" class="btn btn-block btn-success"></div>
                </div>
              </div>

            </div>
          </form>
        </div>

      </div>
 {{-- end clinic form --}}
    </div>
   

      </div>
      <div class="modal-footer">
        <span class='alert alert-success ' id="done" role='alert' >done</span>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
       
      </div>
    </div>
  </div>
</div>
  <!-- /Section: intro -->
  <script src="{{asset('js/pages/index.js')}}"></script>
  



































  



