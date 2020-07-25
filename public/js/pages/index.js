
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
}); 






$('#done').hide();



//  doctor error label


function clearDoctoeError() {

  $("#doctornameError").addClass('no-error');
  $("#doctorphoneNoError").addClass('no-error');
  $("#doctoremailError").addClass('no-error');
  $("#doctoraddressError").addClass('no-error');
  $("#doctorareaError").addClass('no-error');
  $("#doctorcityError").addClass('no-error');

}
//  pharmacy error label
function clearPharmacyError() {

  $("#pharmacyNameError").addClass('no-error');
  $("#pharmacyContactNameError").addClass('no-error');
  $("#pharmacyMobileNoError").addClass('no-error');
  $("#pharmacyEmailError").addClass('no-error');
  $("#pharmacyregCodeError").addClass('no-error');
  $("#pharmacyaddressError").addClass('no-error');
  $("#pharmacyareaError").addClass('no-error');
  $("#pharmacycityError").addClass('no-error');
  $("#pharmacystateError").addClass('no-error');
  $("#pharmacyzipCodeError").addClass('no-error');
}
function clearDiagError() {

  $("#diagNameError").addClass('no-error');
  $("#diagContactNameError").addClass('no-error');
  $("#diagMobileNoError").addClass('no-error');
  $("#diagEmailError").addClass('no-error');
  $("#diagAddressError").addClass('no-error');
  $("#diagAreaError").addClass('no-error');
  $("#diagCityError").addClass('no-error');
  $("#diagStateError").addClass('no-error');
  $("#diagZipCodeError").addClass('no-error');
}
function clearClinicError() {

  $("#clinicNameError").addClass('no-error');
  $("#clinicContactpersonNameError").addClass('no-error');
  $("#clinicPhoneNoErrorError").addClass('no-error');
  $("#clinicEmailError").addClass('no-error');
  $("#clinicLicenseError").addClass('no-error');
  $("#clinicAddressError").addClass('no-error');
  $("#clinicAreaError").addClass('no-error');
  $("#clinicCityError").addClass('no-error');
  $("#clinicStateError").addClass('no-error');
  $("#clinicZipCodeError").addClass('no-error');
}

$(document).ready(function(){
  $('.slider').slider();
});
$(function(){

  clearPharmacyError();
  clearDoctoeError();
  clearDiagError();
  clearClinicError();

  $("#doctor").show();
  $("#navdoctor").addClass("selected");
  $("#pharmacy").hide();
  $("#diag").hide();
  $("#clinic").hide();


 




$('#checkbox').change(function(){
  setInterval(function () {
      moveRight();
  }, 7000);
});

var slideCount = $('#slider ul li').length;
var slideWidth = $('#slider ul li').width();
var slideHeight = $('#slider ul li').height();
var sliderUlWidth = slideCount * slideWidth;

$('#slider').css({ width: slideWidth, height: (slideHeight/1.11) });

// $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 500, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };
 
  function moveRight() {
    console.log(slideWidth);
      $('#slider ul').animate({
          left: - slideWidth
      }, 500, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  $('a.control_prev').click(function () {
      moveLeft();
  });

  $('a.control_next').click(function () {
      moveRight();
  });
  $('a.control_next_ar').click(function () {
      moveRight();
  });


  
 
  });


  $("#navdoctor").on("click",function(){
  
    $("#navdoctor").addClass("selected");
    $("#navpharmacy").removeClass("selected");
    $("#navdiag").removeClass("selected");
    $("#navclinic").removeClass("selected");
  
    $("#doctor").show();
    $("#pharmacy").hide();
    $("#diag").hide();
    $("#clinic").hide();
  });
  $("#navpharmacy").on("click",function(){
  
    $("#navdoctor").removeClass("selected");
    $("#navpharmacy").addClass("selected");
    $("#navdiag").removeClass("selected");
    $("#navclinic").removeClass("selected");
    $("#navOthers").removeClass("selected");
  
    $("#pharmacy").show();
    $("#doctor").hide();
    $("#diag").hide();
    $("#clinic").hide();
  });
  $("#navdiag").on("click",function(){
  
    $("#navdoctor").removeClass("selected");
    $("#navpharmacy").removeClass("selected");
    $("#navdiag").addClass("selected");
    $("#navclinic").removeClass("selected");
    
  
    $("#diag").show();
    $("#doctor").hide();
    $("#pharmacy").hide();
    $("#clinic").hide();
    
  });
  $("#navclinic").on("click",function(){
  
    $("#navdoctor").removeClass("selected");
    $("#navpharmacy").removeClass("selected");
    $("#navdiag").removeClass("selected");
    $("#navclinic").addClass("selected");
    
  
    $("#clinic").show();
    $("#doctor").hide();
    $("#pharmacy").hide();
    $("#diag").hide();
   
  });

$("#sendToDoctor").on("click",function(){
   clearDoctoeError();
 
  var name = $("#doctorname").val();
  var phoneNo = $("#doctorphoneNo").val();
  var email = $("#doctoremail").val();
  var address = $("#doctoraddress").val();
  var area = $("#doctorarea").val();
  var city = $("#doctorcity").val();

  var data= "name="+name+
            "&phoneNo="+phoneNo+
            "&email="+email+
            "&address="+address+
            "&area="+area+
            "&city="+city;


          
$.ajax({
  type:'POST',
  url:'/doctor-send',
  data:data,
  
  success:function(data){
   
    clearDoctorForm();
    clearDoctoeError();

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
 
    if (data.responseJSON.hasOwnProperty('errors')) {
        errorValidateDoctor(data);
      }
   }
 });

});
function errorValidateDoctor(data) {
  
  if(data.responseJSON.errors.hasOwnProperty('name'))
  $("#doctornameError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('phoneNo'))
  $("#doctorphoneNoError").removeClass('no-error').addClass('error');

  if(data.responseJSON.errors.hasOwnProperty('email'))
  $("#doctoremailError").removeClass('no-error').addClass('error');

  if(data.responseJSON.errors.hasOwnProperty('address'))
  $("#doctoraddressError").removeClass('no-error').addClass('error');

  if(data.responseJSON.errors.hasOwnProperty('area'))
  $("#doctorareaError").removeClass('no-error').addClass('error');

  if(data.responseJSON.errors.hasOwnProperty('city'))
  $("#doctorcityError").removeClass('no-error').addClass('error');
     
}

$("#sendToPharmacy").on("click",function(){
  clearPharmacyError();

  var name = $("#pharmacyName").val();
  var phoneNo = $("#pharmacyMobileNo").val();
  var contactName = $("#pharmacyContactName").val();
  var email = $("#pharmacyEmail").val();
  var regCode = $("#pharmacyregCode").val();
  var address = $("#pharmacyaddress").val();
  var area = $("#pharmacyarea").val();
  var city = $("#pharmacycity").val();
  var state = $("#pharmacystate").val();
  var zipCode = $("#pharmacyzipCode").val();

  var data= "name="+name+
            "&contactName="+contactName+
            "&email="+email+
            "&regCode="+regCode+
            "&area="+area+
            "&phoneNo="+phoneNo+
            "&address="+address+
            "&state="+state+
            "&zipCode="+zipCode+
            "&city="+city;


$.ajax({
  type:'POST',
  url:'/pharmacy-send',
  data:data,
  success:function(data){
   
    clearPharmacyForm();
    clearPharmacyError();

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
    
 
    if (data.responseJSON.hasOwnProperty('errors')) {

       errorValidatePharmacy(data);
    }
  }
 });

});
function errorValidatePharmacy(data) {
  
  if(data.responseJSON.errors.hasOwnProperty('name'))
  $("#pharmacyNameError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('contactName'))
  $("#pharmacyContactNameError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('phoneNo'))
  $("#pharmacyMobileNoError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('email'))
  $("#pharmacyEmailError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('regCode'))
  $("#pharmacyregCodeError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('address'))
  $("#pharmacyaddressError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('area'))
  $("#pharmacyareaError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('city'))
  $("#pharmacycityError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('state'))
  $("#pharmacystateError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('zipCode'))
  $("#pharmacyzipCodeError").removeClass('no-error').addClass('error');
     
}
$("#sendToDiag").on("click",function(){
  clearDiagError();

  var name = $("#diagName").val();
  var phoneNo = $("#diagMobileNo").val();
  var contactName = $("#diagContactName").val();
  var email = $("#diagEmail").val();

  var address = $("#diagaddress").val();
  var area = $("#diagarea").val();
  var city = $("#diagcity").val();
  var state = $("#diagstate").val();
  var zipCode = $("#diagzipCode").val();

  var data= "name="+name+
            "&contactName="+contactName+
            "&email="+email+
            "&area="+area+
            "&phoneNo="+phoneNo+
            "&address="+address+
            "&state="+state+
            "&zipCode="+zipCode+
            "&city="+city;


$.ajax({
  type:'POST',
  url:'/diag-send',
  data:data,
  success:function(){
   
    clearDiagForm();
    clearDiagError();

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
    
 
    if (data.responseJSON.hasOwnProperty('errors')) {

      errorValidateDiag(data);
    }
  }
 });

});
function errorValidateDiag(data) {
  
  if(data.responseJSON.errors.hasOwnProperty('name'))
  $("#diagNameError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('contactName'))
  $("#diagContactNameError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('phoneNo'))
  $("#diagMobileNoError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('email'))
  $("#diagEmailError").removeClass('no-error').addClass('error');
      
  if(data.responseJSON.errors.hasOwnProperty('address'))
  $("#diagAddressError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('area'))
  $("#diagAreaError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('city'))
  $("#diagCityError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('state'))
  $("#diagStateError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('zipCode'))
  $("#diagZipCodeError").removeClass('no-error').addClass('error');
     
}


$("#sendToClinic").on("click",function(){
  clearClinicError();

  var name = $("#clinicName").val();
  var phoneNo = $("#clinicMobileNo").val();
  var contactName = $("#clinicContactName").val();
  var email = $("#clinicEmail").val();

  var address = $("#clinicaddress").val();
  var license = $("#cliniclicense").val();
  var area = $("#clinicarea").val();
  var city = $("#cliniccity").val();
  var state = $("#clinicstate").val();
  var zipCode = $("#cliniczipCode").val();
console.log(license);
  var data= "name="+name+
            "&contactName="+contactName+
            "&email="+email+
            "&license="+license+
            "&area="+area+
            "&phoneNo="+phoneNo+
            "&address="+address+
            "&state="+state+
            "&zipCode="+zipCode+
            "&city="+city;


$.ajax({
  type:'POST',
  url:'/clinic-send',
  data:data,
  success:function(){
   
    clearClinicForm();
    clearClinicError();

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
    
 
    if (data.responseJSON.hasOwnProperty('errors')) {

      errorValidateClinic(data);
    }
  }
 });

});
function errorValidateClinic(data) {
  
  if(data.responseJSON.errors.hasOwnProperty('name'))
  $("#clinicNameError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('contactName'))
  $("#clinicContactpersonNameError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('phoneNo'))
  $("#clinicPhoneNoErrorError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('email'))
  $("#clinicEmailError").removeClass('no-error').addClass('error');
      
  if(data.responseJSON.errors.hasOwnProperty('license'))
  $("#clinicLicenseError").removeClass('no-error').addClass('error');
      
  if(data.responseJSON.errors.hasOwnProperty('address'))
  $("#clinicAddressError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('area'))
  $("#clinicAreaError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('city'))
  $("#clinicCityError").removeClass('no-error').addClass('error');
     

  if(data.responseJSON.errors.hasOwnProperty('state'))
  $("#clinicStateError").removeClass('no-error').addClass('error');
     
  if(data.responseJSON.errors.hasOwnProperty('zipCode'))
  $("#clinicZipCodeError").removeClass('no-error').addClass('error');
     
}







function clearDoctorForm () {
  $("#doctorname").val("");
  $("#doctorphoneNo").val("");
  $("#doctoremail").val("");
  $("#doctoraddress").val("");
  $("#doctorarea").val("");
  $("#doctorcity").val("");
}
function clearPharmacyForm() {

  $("#pharmacyName").val("");
  $("#pharmacyMobileNo").val("");
  $("#pharmacyContactName").val("");
  $("#pharmacyEmail").val("");
  $("#pharmacyregCode").val("");
  $("#pharmacyaddress").val("");
  $("#pharmacyarea").val("");
  $("#pharmacycity").val("");
  $("#pharmacystate").val("");
  $("#pharmacyzipCode").val("");

}
function clearDiagForm() {

  $("#diagName").val("");
  $("#diagMobileNo").val("");
  $("#diagContactName").val("");
  $("#diagEmail").val("");
  $("#diagaddress").val("");
  $("#diagarea").val("");
  $("#diagcity").val("");
  $("#diagstate").val("");
  $("#diagzipCode").val("");

}
function clearClinicForm() {

  $("#clinicName").val("");
  $("#clinicMobileNo").val("");
  $("#clinicContactName").val("");
  $("#clinicEmail").val("");
  $("#clinicaddress").val("");
  $("#cliniclicense").val("");
  $("#clinicarea").val("");
  $("#cliniccity").val("");
  $("#clinicstate").val("");
  $("#cliniczipCode").val("");

}










