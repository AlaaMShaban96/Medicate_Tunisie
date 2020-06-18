$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
}); 
$('#done').hide();
$("#doctornameError").addClass('no-error');
$("#doctorphoneNoError").addClass('no-error');
$("#doctoremailError").addClass('no-error');
$("#doctoraddressError").addClass('no-error');
$("#doctorareaError").addClass('no-error');
$("#doctorcityError").addClass('no-error');
$(function(){
    $("#doctor").show();
    $("#navdoctor").addClass("selected");
    $("#pharmacy").hide();
    $("#diag").hide();
    $("#clinic").hide();
  
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
});

$("#sendToDoctor").on("click",function(){


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

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
    
 
    if (data.responseJSON.hasOwnProperty('errors')) {
    
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
    
    




   }
 });

});




$("#sendToPharmacy").on("click",function(){


  var name = $("#pharmacyName").val();
  var ContactName = $("#pharmacyContactName").val();
  var email = $("#pharmacyEmail").val();
  var regCode = $("#pharmacyregCode").val();
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

    $("#done").show();
        setTimeout(function() {
            $('#done').fadeOut('fast');
        }, 2000);
    
  },
   error:function(data){
    
 
    if (data.responseJSON.hasOwnProperty('errors')) {
    
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
    
    




   }
 });

});



function clearDoctorForm () {
  $("#doctorname").val("");
  $("#doctorphoneNo").val("");
  $("#doctoremail").val("");
  $("#doctoraddress").val("");
  $("#doctorarea").val("");
  $("#doctorcity").val("");


  $("#doctornameError").addClass('no-error');
  $("#doctorphoneNoError").addClass('no-error');
  $("#doctoremailError").addClass('no-error');
  $("#doctoraddressError").addClass('no-error');
  $("#doctorareaError").addClass('no-error');
  $("#doctorcityError").addClass('no-error');
}