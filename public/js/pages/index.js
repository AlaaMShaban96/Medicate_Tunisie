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
