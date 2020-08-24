
// Your web app's Firebase configuration
// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyAd9tihQpdroWQPacSxG3WG_wGSzvNjZyI",
  authDomain: "medicate-int.firebaseapp.com",
  databaseURL: "https://medicate-int.firebaseio.com",
  // projectId: "medicate-int",
  storageBucket: "medicate-int.appspot.com",
  // messagingSenderId: "416598269472",
  // appId: "1:416598269472:web:2701de22c5412409f86645",
  // measurementId: "G-DY1CTNE3ZT"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

var sendTo="";
var messageIndex="";
// Get a reference to the database service
firebase.database().ref('MedicateDoctors').on('value',(snap)=>{
    var totalRecord =  snap.child('comp1284').numChildren();
    var ul = document.getElementById("acconts");
    ul.innerHTML="";
    snap.forEach(element => {

        var name = element.child('comp_name').val();
        var key = element.key;
        // console.log( name );
        var ul = document.getElementById("acconts");
        var li = document.createElement("li");
        li.setAttribute('onclick','show("'+key+'")');
        var div = document.createElement("div");
        var h2 = document.createElement("h2");
        var img = document.createElement("img");
        img.setAttribute("src", "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg");
        h2.appendChild(document.createTextNode(name));
        div.appendChild(h2);
        li.appendChild(img);
        li.appendChild(div);
        // li.appendChild(document.createTextNode(name));
        ul.appendChild(li);
        // console.log(element.key)

    });
  // console.log(snap.child('comp1284').child('1').child('msg').val());
  // console.log(totalRecord)
//   var ul = document.getElementById("acconts");
//   var li = document.createElement("li");
//   li.appendChild(document.createTextNode("Four"));
//   ul.appendChild(li);
});

function show(element) {
 this.sendTo=element;
  firebase.database().ref('MedicateDoctors').child(element).on('value',(snap)=>{
     this.messageIndex =  snap.numChildren();
    var ul = document.getElementById("chat");
    ul.innerHTML="";
    snap.forEach(element => {
      if (element.key<= this.messageIndex) {
  

      var li = document.createElement("li");
      li.setAttribute('class',element.child('send_by').val() == 'admin'?'me':"you");
      var div = document.createElement("div");
      div.setAttribute('class','entete');
      var h2 = document.createElement("h2");
      h2.appendChild(document.createTextNode(element.child('send_by').val()=='admin'?'Admin':snap.child('comp_name').val()));
      var h3 = document.createElement("h3");
      h3.appendChild(document.createTextNode(element.child('msg_date').val()));
      div.appendChild(h2);
      div.appendChild(h3);
      // var div2 = document.createElement("div").setAttribute('class','triangle');
      var message = document.createElement("div");
      message.setAttribute('class','message');
      message.appendChild(document.createTextNode(element.child('msg').val()));
      li.appendChild(div);
      // div.appendChild(div2);
      li.appendChild(message);
      ul.appendChild(li);
        // console.log(element.child('msg').val());
  }
    });
  
  });
  goto();
  // $("#chat").animate({scrollTop: $('ul#chat li:last').offset().top});
}
// function send() {
//   console.log(this.sendTo);
// }
function send() {
 
  firebase.database().ref('MedicateDoctors').child(this.sendTo).child(this.messageIndex+=1).set({

    msg:document.getElementById('sendMessage').value,
    msg_date:formatAMPM(),
    send_by:'admin',
    send:false,
   
   
  });
  
  document.getElementById('sendMessage').value="";
  goto();
  // show(this.sendTo);
  // $("#chat").animate({scrollTop: $('ul#chat li:last').offset().top});
}




function formatAMPM() {
 
  var hours = new Date().getHours();
  var year = new Date().getFullYear();
  var month = new Date().getMonth();
  var day = new Date().getDay();
  var minutes = new Date().getMinutes();
  var ampm = hours >= 12 ? 'م' : 'ص';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime =day+'-'+ month+'-'+year+' '+hours + ':' + minutes + ' ' + ampm;
  return strTime;
}
function goto() {
  $("#chat").animate({scrollTop: $('ul#chat li:last').offset().top});
  console.log('index for scroll '+ $('ul#chat li:last').offset().top);
  console.log('index for scroll '+ $('ul#chat li:last').offset().top+80);
}