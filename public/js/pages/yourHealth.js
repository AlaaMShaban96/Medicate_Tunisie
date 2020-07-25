$('#item1').show();
$('#item2').hide();
$('#item3').hide();
$('#item4').hide();
$('#item5').hide();

// location.href = "#"+index;
// document.getElementById(index).scrollIntoView();
function show(id) {
    hide();

    $('#item'+id).show();
}

function hide() {
    $('#item1').hide();
    $('#item2').hide();
    $('#item3').hide();
    $('#item4').hide();
    $('#item5').hide(); 
}

// collapsibles
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
      
    // this.classList.toggle("ative");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
        console.log("here");
      content.style.display = "block";
    }
  });
}