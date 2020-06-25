

function x(name , id) {
	
	$('#x-select').text(name );
    $('#clinic_id').val(id);

    console.log(name , id );
}




function DropDown(el) {
  this.dd = el;
  this.initEvents();
}
DropDown.prototype = {
  initEvents : function() {
    var obj = this;
    obj.dd.on('click', function(event){
      $(this).toggleClass('active');
      event.stopPropagation();
    }); 
  }
}
$(function() {
  var dd = new DropDown( $('#dd1') );
	$(document).click(function() {
	  $('.wrapper-dropdown-2').removeClass('active');
	});
  var dd = new DropDown( $('#dd2') );
	$(document).click(function() {
	  $('.wrapper-dropdown-2').removeClass('active');
	});
  var dd = new DropDown( $('#dd3') );
	$(document).click(function() {
	  $('.wrapper-dropdown-2').removeClass('active');
	});
  var dd = new DropDown( $('#dd4') );
	$(document).click(function() {
	  $('.wrapper-dropdown-2').removeClass('active');
	});
  var dd = new DropDown( $('#dd5') );
	$(document).click(function() {
	  $('.wrapper-dropdown-2').removeClass('active');
	});
});



