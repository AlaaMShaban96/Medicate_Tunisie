@php
App::setLocale(	Session::get('applocale'));
@endphp

 <!-- Section: intro -->
<link rel="stylesheet" href="{{ asset('css/pages/partials/_header.css')}}">


 <section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              <h2 class="h-ultra">{{__('_header.titel_name')}}</h2>
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
               
                
                  <button type="button" data-wow-delay="0.4s" class="btn btn-primary text-right wow bounceIn " data-toggle="modal" data-target="#singupModal">
                    {{__('_header._singup')}}
                  </button>
                
              </div>
            </div>


          </div>


          <div class="col-xs-6">
            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
              <img src="img/dummy/img-1.png" id="img-responsive-hide"class="img-responsive" alt="" style="margin-left: 32%;" />
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


















  <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <div class="tab-content-header">
            <h3 >
              Login with your <strong>Credentials</strong>
            </h3>

          </div>
        </h5>
       
        </button>
      </div>
      <div class="modal-body">
        
       {{-- <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab"> --}}

          
          <div class="form-body">

            <form id="loginForm" name="loginForm" data-ng-submit="login(loginForm);" novalidate="" class="ng-pristine ng-invalid ng-invalid-required">
            <input type="hidden" name="type" data-ng-model="type" data-ng-init="type=&#39;PARTNER&#39;" value="PARTNER" autocomplete="off" class="ng-pristine ng-untouched ng-valid ng-not-empty">
              {{-- <div class="alert alert-danger ng-hide" data-ng-show="showLoginError">
                <a href="https://mymedicare.in/partner#" class="close1" data-dismiss="alert" aria-label="close">×</a> Invalid Credentials. Please
                try again.
              </div> --}}
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
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal sing up-->
<div class="modal fade" id="singupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-flex;">Sing Up</h5>
       <span class='alert alert-success ' id="done" role='alert' >done</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           x 
        </button>
      </div>
      <div class="modal-body">
        
        <div id="menu" class="row">
         

          <nav style="text-align: center;">
            <button type="button" class="singupType" id="navdoctor" >
              <span class="col nav-item nav-link waves-effect waves-light active show" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="nav-doctor" aria-selected="true" data-ng-click="clickTab('doctorMap')">
                <div class="tab-img">
                  <img src="img/singupType/doctor.png" alt="doctor">
                </div> Doctor
              </span>
            </button>
            <button type="button" class="singupType" id="navpharmacy"> 
              <span class="col nav-item nav-link waves-effect waves-light" id="nav-profile-tab" data-toggle="tab" href="#pharmacy" role="tab" aria-controls="nav-pharmacy" aria-selected="false" data-ng-click="clickTab('pharmacyMap')">
                <div class="tab-img">
                  <img src="img/singupType/pharmacy.png" alt="pharmacy">
                </div>Parmacy
              </span> 
            </button>
            <button type="button" class="singupType" id="navdiag">
              <span class="col nav-item nav-link waves-effect waves-light" id="diagno-tab" data-toggle="tab" href="#diagno" role="tab" aria-controls="nav-diagno" aria-selected="false" data-ng-click="clickTab('diagregMap')">
                <div class="tab-img">
                  <img src="img/singupType/diag.png" alt="diag">
                </div>diag
              </span> 
            </button>
            <button type="button" class="singupType" id="navclinic">
              <span class="col nav-item nav-link waves-effect waves-light" id="clinics-tab" data-toggle="tab" href="#clinics" role="tab" aria-controls="nav-clinics" aria-selected="false" data-ng-click="clickTab('facilityMap')">
                <div class="tab-img">
                  <img src="img/singupType/clinic.png" alt="clinic">
                </div>clinic
              </span>
            </button>
        
          </nav>
          
        

         
         
      </div>

{{-- doctor form --}}

      <div id="doctor">

        <div class="form-body">

          <div class="form-body">
          
            {{-- <form id="doctorRegForm"  name="doctorRegForm"  method="POST"  enctype="multipart/form-data" > --}}
              <div class="row">
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorContactname" class="">
                    Doctor name
                    </label>
                    <label id="doctornameError" class="error" > Error</label>
                    <input placeholder="Doctor name" type="text" name="doctorname" id="doctorname" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required />
                    
                    <!-- ngIf: doctorRegForm.doctorname.$invalid && doctorRegForm.doctorname.$touched -->
                  </div>
                 

                </div>
            

                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorphoneNo" class="">Phone number</label>
                    <label id="doctorphoneNoError" class="error" > Error</label>
                    <input type="text" placeholder="Phone number" name="doctornumber" id="doctorphoneNo" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern" data-ng-model="userForm.mobileNo" data-ng-pattern="/^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/" required> 
                    <!-- ngIf: doctorRegForm.doctornumber.$invalid && doctorRegForm.doctornumber.$touched -->
                   
                  </div>

                </div>
                <div class="col-md-12">
                  <div class="md-form">

                    <label for="doctoremail" class="">Email</label>
                    <label id="doctoremailError" class="error" > Error</label>

                    <input type="email" placeholder="Email" name="doctoremail" id="doctoremail" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern" data-ng-model="userForm.email" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
                    <!-- ngIf: doctorRegForm.doctoremail.$invalid && doctorRegForm.doctoremail.$touched -->
                  </div>

                </div>
    
                <div class="col-md-12">
                  <div class="md-form">
                    <label for="doctoraddress" class=""> Address</label>
                    <label id="doctoraddressError" class="error" > Error</label>

                    <input type="text" placeholder="Address" name="doctoraddress" id="doctoraddress" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required>
                    
                    <!-- ngIf: doctorRegForm.address1.$invalid && doctorRegForm.address1.$touched -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="doctorarea" class="">Area</label>
                    <label id="doctorareaError" class="error" > Error</label>

                    <input type="text" placeholder="Area" name="doctorarea" id="doctorarea" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.area" required>
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form">
                    <label for="city" class="">City</label>
                    <input type="text" placeholder="City" name="city" id="doctorcity" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.city" required>
                  </div>
                </div>
            

                <div class="col-md-12">
                  <div class="md-form">
                    <label class="">Upload Logo</label>
                    <input type="file" id="doctorimageFile" name="doctorImageFile" data-file-model="doctorImageFile" class="mmc-form-control form-control">

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form">
                    <label class="">Documents</label>
                    <input type="file" id="doctorfiles" name="doctorFiles" data-file-model="doctorFiles" class="mmc-form-control form-control" multiple="">
                  </div>
                </div>
              

                <div class="col-md-12">
                  <div class="md-form">
                    <div class="waves-input-wrapper waves-effect waves-light">
                      <input type="submit" id="sendToDoctor" name="to_doctor" value="SEND" class="btn btn-block btn-danger" >
                    </div>
                    <div >
                      <div class='alert alert-warning'role='alert' >htyjnyt</div>
                    </div>
                    {{-- <button type="submit"
                      class="btn btn-block btn-danger">
                      <a data-toggle="modal"
                        data-target="#myModal-suc">REGISTER NOW</a>
                    </button> 
                     --}}
                    
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
                  <label for="pharmacyName" class="">Pharmacy Name</label>
                  <label id="pharmacyNameError" class="error" > Error</label>
                  <input type="text" name="name" id="pharmacyName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="pharmacy.businessName" required=""> 
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyContactName" class="">Contact Person Name</label>
                  <label id="pharmacyContactNameError" class="error" > Error</label>

                  <input type="text" name="contactName" id="pharmacyContactName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="pharmacy.contactName" required="">
                 
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyMobileNo" class="">Phone Number</label>
                  <label id="pharmacyMobileNoError" class="error" > Error</label>

                  <input type="text" name="mobileNo" id="pharmacyMobileNo" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" data-ng-model="userForm.mobileNo" data-ng-minlength="10" data-ng-maxlength="10" data-ng-pattern="/^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/" required=""> 
                
                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyEmail" class="">Email Id</label>
                  <label id="pharmacyEmailError" class="error" > Error</label>

                  <input type="email" name="email" id="pharmacyEmail" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" data-ng-model="userForm.email" required="">
                  
                  <!-- ngIf: pharmacyForm.email.$invalid && pharmacyForm.email.$touched -->
                </div>
              </div>
            
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyregCode" class="">Registration Number</label>
                  <label id="pharmacyregCodeError" class="error" > Error</label>

                  <input type="text" name="regCode" id="pharmacyregCode" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="pharmacy.businessLicenseNo" required=""> 
                  <!-- ngIf: pharmacyForm.regCode.$invalid && pharmacyForm.regCode.$touched -->
                </div>
              </div>
              <!-- <div class="col-md-6">
                                                                 <div id="pharmacyMap"></div>
                                                               </div> -->
              <div class="col-md-12">
                <div class="md-form">
                  <label for="pharmacyaddress" class="">Business Address</label>
                  <label id="pharmacyaddressError" class="error" > Error</label>

                  <input type="text" name="pharmacyaddress" id="pharmacyaddress" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
                  
                  <!-- ngIf: pharmacyForm.pharmacyaddress.$invalid && pharmacyForm.pharmacyaddress.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyarea" class="">Area</label>
                  <label id="pharmacyareaError" class="error" > Error</label>

                  <input type="text" name="pharmacyarea" id="pharmacyarea" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.pharmacyarea" required="">
                 
                  <!-- ngIf: pharmacyForm.area.$invalid && pharmacyForm.area.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacycity" class="">City</label>
                  <label id="pharmacycityError" class="error" > Error</label>

                  <input type="text" name="pharmacycity" id="pharmacycity" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.pharmacycity" required="">
                 
                  <!-- ngIf: pharmacyForm.pharmacycity.$invalid && pharmacyForm.pharmacycity.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacystate" class="">State</label>
                  <label id="pharmacystateError" class="error" > Error</label>

                  <input type="text" name="pharmacystate" id="pharmacystate" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.pharmacystate" required="">
                
                  <!-- ngIf: pharmacyForm.pharmacystate.$invalid && pharmacyForm.pharmacystate.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="pharmacyzipCode" class="">ZipCode</label>
                  <label id="pharmacyzipCodeError" class="error" > Error</label>

                  <input type="text" name="pharmacyzipCode" id="pharmacyzipCode" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.pharmacyzipCode" required="">
                 
                  <!-- ngIf: pharmacyForm.pharmacyzipCode.$invalid && pharmacyForm.pharmacyzipCode.$touched -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Upload Logo</p>
                  <input type="file" id="pharmaImageFile" file-model="pharmaImageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Documents</p>
                  <input type="file" id="pharmaFiles" file-model="pharmaFiles" class="mmc-form-control form-control" multiple="">
                </div>
              </div>

              <div class="col-md-12">
                <p class="term-con">
                  By signing up, I agree to <a href="https://mymedicare.in/terms-and-conditions" target="_blank">Terms
                    and Conditions</a>
                </p>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" value="REGISTER NOW" onclick="sendToPharmacy()" class="btn btn-block btn-danger" data-ng-disabled="pharmacyForm.$invalid || showSpinner" ></div>
                
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
          <form id="diagregForm" name="diagregForm" data-ng-submit="saveDiagnostic(diagregForm);" method="POST" novalidate="" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-email">
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="name" class="">Diagnostic Name</label>
                  <input type="text" name="diagname" id="name" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="diagnosticForm.businessName" required="">
                  <!-- ngIf: diagregForm.diagname.$invalid && diagregForm.diagname.$touched -->
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="contactName" class="">Contact Person Name</label>
                  <input type="text" name="contactpersonname" id="contactName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="diagnosticForm.contactName" required="">
                  
                  <!-- ngIf: diagregForm.contactpersonname.$invalid && diagregForm.contactpersonname.$touched -->
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="phoneNo" class="">Phone No</label>
                  <input type="text" name="phonenumber" id="phoneNo" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" data-ng-model="userForm.mobileNo" data-ng-minlength="10" data-ng-maxlength="10" data-ng-pattern="/^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/" required=""> 
                  <!-- ngIf: diagregForm.phonenumber.$invalid && diagregForm.phonenumber.$touched -->
                  {{-- <p class="error-msg ng-hide" data-ng-show="diagregForm.phonenumber.$error.pattern &amp;&amp; diagregForm.phonenumber.$dirty">Please
                    enter a 10 digit number</p> --}}
                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="diagnosticFormemail" class="">Email Id</label>
                  <input type="email" name="diagemail" id="diagnosticFormemail" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern" data-ng-model="userForm.email" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required=""> 
                  <!-- ngIf: diagregForm.diagemail.$invalid && diagregForm.diagemail.$touched -->

                </div>

              </div>
              <!-- <div class="col-md-6">
                <div class="md-form">
                  <i class="fa fa-map-marker prefix white-text"></i>
                  <input type="text" id="diagnosticAddress"
                    class="form-control" 
                    >
                  <label for="diagnosticAddress" class="">Address</label>
                </div>

              </div> -->
              <!-- <div class="col-md-6">
                                                                 <div id="diagregMap"></div>
                                                               </div> -->
              <div class="col-md-12">
                <div class="md-form">
                  <label for="address1" class="">Business Address</label>
                  <input type="text" name="address1" id="address1" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
                  
                  <!-- ngIf: diagregForm.address1.$invalid && diagregForm.address1.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="area" class="">Area</label>
                  <input type="text" name="area" id="area" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.area" required="">
               
                  <!-- ngIf: diagregForm.area.$invalid && diagregForm.area.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="city" class="">City</label>
                  <input type="text" name="city" id="city" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.city" required="">
                  
                  <!-- ngIf: diagregForm.city.$invalid && diagregForm.city.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="state" class="">state</label>
                  <input type="text" name="state" id="state" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.state" required="">
                 
                  <!-- ngIf: diagregForm.state.$invalid && diagregForm.state.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="zipCode" class="">zipCode</label>
                  <input type="text" name="zipCode" id="zipCode" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.zipCode" required="">
                  
                  <!-- ngIf: diagregForm.zipCode.$invalid && diagregForm.zipCode.$touched -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Upload Logo</p>
                  <input type="file" id="diagImageFile" file-model="diagImageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Documents</p>
                  <input type="file" id="diagFiles" file-model="diagFiles" class="mmc-form-control form-control" multiple="">
                </div>
              </div>
              <div class="col-md-12">
                <p class="term-con">
                  By signing up, I agree to <a href="https://mymedicare.in/terms-and-conditions" target="_blank">Terms
                    and Conditions</a>
                </p>

              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" value="REGISTER NOW" class="btn btn-block btn-danger" data-ng-disabled="diagregForm.$invalid || showSpinner" disabled="disabled"></div>

                  <!-- <button type="submit"
                    class="btn btn-block btn-danger">
                    <a data-toggle="modal"
                      data-target="#myModal-suc">REGISTER NOW</a>
                  </button> -->
                </div>
              </div>

            </div>
          </form>
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
                  <label for="facilityBusinessName" class="">Clinic Name</label>
                  <input type="text" name="clinicname" id="facilityBusinessName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="facility.businessName" required=""> 
                  <!-- ngIf: facilityRegForm.clinicname.$invalid && facilityRegForm.clinicname.$touched -->
                </div>

              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="facilitycontactName" class="">Contact Person Name</label>
                  <input type="text" name="contactpersonname" id="facilitycontactName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="facility.contactName" required="">
                
                  <!-- ngIf: facilityRegForm.contactpersonname.$invalid && facilityRegForm.contactpersonname.$touched -->
                </div>

              </div>

              <div class="col-md-6">
                <div class="md-form">
                  <label for="facilityMobile" class="">Phone No</label>
                  <input type="text" name="phonenumber" id="facilityMobile" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength" data-ng-model="userForm.mobileNo" data-ng-minlength="10" data-ng-maxlength="10" data-ng-pattern="/^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/" required=""> 
                  <!-- ngIf: facilityRegForm.phonenumber.$invalid && facilityRegForm.phonenumber.$touched -->
                  {{-- <p class="error-msg ng-hide" data-ng-show="facilityRegForm.phonenumber.$error.pattern &amp;&amp; facilityRegForm.phonenumber.$dirty">Please
                    enter a 10 digit number</p> --}}
                </div>

              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <label for="facilityEmail" class="">Email Id</label>
                  <input type="email" name="clinicemail" id="facilityEmail" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required ng-valid-pattern" data-ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" data-ng-model="userForm.email" required="">
                 
                  <!-- ngIf: facilityRegForm.clinicemail.$invalid && facilityRegForm.clinicemail.$touched -->
                </div>

              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <label for="facilitybusinessLicenseNo" class="">License No.</label>
                  <input type="text" name="licensenumber" id="facilitybusinessLicenseNo" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="facility.businessLicenseNo" required=""> 
                  <!-- ngIf: facilityRegForm.licensenumber.$invalid && facilityRegForm.licensenumber.$touched -->
                </div>
              </div>

              <!-- <div class="col-md-6">
                                                                 <div id="facilityMap"></div>
                                                               </div> -->
              <div class="col-md-12">
                <div class="md-form">
                  <label for="address1" class="">Business Address</label>
                  <input type="text" name="address1" id="address1" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
                 
                  <!-- ngIf: facilityRegForm.address1.$invalid && facilityRegForm.address1.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="area" class="">Area</label>
                  <input type="text" name="area" id="area" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.area" required="">
                  
                  <!-- ngIf: facilityRegForm.area.$invalid && facilityRegForm.area.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="city" class="">City</label>
                  <input type="text" name="city" id="city" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.city" required="">
                  
                  <!-- ngIf: facilityRegForm.city.$invalid && facilityRegForm.city.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="state" class="">state</label>
                  <input type="text" name="state" id="state" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.state" required="">
                  
                  <!-- ngIf: facilityRegForm.state.$invalid && facilityRegForm.state.$touched -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="zipCode" class="">zipCode</label>
                  <input type="text" name="zipCode" id="zipCode" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.zipCode" required="">
                  <!-- ngIf: facilityRegForm.zipCode.$invalid && facilityRegForm.zipCode.$touched -->
                </div>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Upload Logo</p>
                  <input type="file" id="imageFile" file-model="imageFile" class="mmc-form-control form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="md-form">
                  <p class="">Documents</p>
                  <input type="file" id="files" file-model="files" class="mmc-form-control form-control" multiple="">
                </div>
              </div>

              <div class="col-md-12">
                <p class="term-con">
                  By signing up, I agree to <a href="https://mymedicare.in/terms-and-conditions" target="_blank">Terms
                    and Conditions</a>
                </p>
              </div>

              <div class="col-md-12">
                <div class="md-form">
                  <div class="waves-input-wrapper waves-effect waves-light"><input type="submit" value="REGISTER NOW" class="btn btn-block btn-danger" data-ng-disabled="facilityRegForm.$invalid || showSpinner" disabled="disabled"></div>
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
  <!-- /Section: intro -->




































  



