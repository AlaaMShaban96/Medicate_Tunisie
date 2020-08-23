@php
  App::setLocale(	Session::get('applocale'));
  $x=Session::get('applocale');
@endphp

@extends('layouts.master')
@section('titel')
  Home
@endsection
@section('head')
  {{-- <link rel="stylesheet" href="{{asset('css/pages/index.css')}}"> --}}
<style>
#chat-contener{
  margin-top: 20%;
  margin-bottom: 2%;
}

#chat-contener #container{
    width:100%;
    height:900px;
    background:#eff3f7;
    margin:0 auto;
    font-size:0;
    border-radius:5px;
    overflow:hidden;
}
#chat-contener aside{
    width:260px;
    height:800px;
    background-color:#3b3e49;
    display:inline-block;
    font-size:15px;
    vertical-align:top;
}
#chat-contener main{
    width:72%;
    height:800px;
    display:inline-block;
    font-size:15px;
    vertical-align:top;
}

#chat-contener aside header{
    padding:30px 20px;
}
#chat-contener aside input{
    width:100%;
    height:50px;
    line-height:50px;
    padding:0 50px 0 20px;
    background-color:#5e616a;
    border:none;
    border-radius:3px;
    color:#fff;
    background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_search.png);
    background-repeat:no-repeat;
    background-position:170px;
    background-size:40px;
}
#chat-contener aside input::placeholder{
    color:#fff;
}
#chat-contener aside ul{
    padding-left:0;
    margin:0;
    list-style-type:none;
    overflow-y:scroll;
    height:690px;
}
#chat-contener aside li{
    padding:10px 0;
}
#chat-contener aside li:hover{
    background-color:#5e616a;
}
#chat-contener h2,h3{
    margin:0;
}
#chat-contener aside li img{
    border-radius:50%;
    margin-left:20px;
    margin-right:8px;
}
#chat-contener aside li div{
    display:inline-block;
    vertical-align:top;
    margin-top:12px;
}
#chat-contener aside li h2{
    font-size:14px;
    color:#fff;
    font-weight:normal;
    margin-bottom:5px;
}
#chat-contener aside li h3{
    font-size:12px;
    color:#7e818a;
    font-weight:normal;
}

#chat-contener .status{
    width:8px;
    height:8px;
    border-radius:50%;
    display:inline-block;
    margin-right:7px;
}
#chat-contener .green{
    background-color:#58b666;
}
#chat-contener .orange{
    background-color:#ff725d;
}
#chat-contener .blue{
    background-color:#6fbced;
    margin-right:0;
    margin-left:7px;
}

#chat-contener main header{
    height:110px;
    padding:30px 20px 30px 40px;
}
#chat-contener main header > *{
    display:inline-block;
    vertical-align:top;
}
#chat-contener main header img:first-child{
    border-radius:50%;
}
#chat-contener main header img:last-child{
    width:24px;
    margin-top:8px;
}
#chat-contener main header div{
    margin-left:10px;
    margin-right:145px;
}
#chat-contener main header h2{
    font-size:16px;
    margin-bottom:5px;
}
#chat-contener main header h3{
    font-size:14px;
    font-weight:normal;
    color:#7e818a;
}

#chat-contener #chat{
    padding-left:0;
    margin:0;
    list-style-type:none;
    overflow-y:scroll;
    height:535px;
    border-top:2px solid #fff;
    border-bottom:2px solid #fff;
}
#chat-contener #chat li{
    padding:10px 30px;
}
#chat-contener #chat h2,#chat h3{
    display:inline-block;
    font-size:13px;
    font-weight:normal;
}
#chat-contener #chat h3{
    color:#bbb;
}
#chat-contener #chat .entete{
    margin-bottom:5px;
}
#chat-contener #chat .message{
    padding:20px;
    color:#fff;
    line-height:25px;
    max-width:90%;
    display:inline-block;
    text-align:left;
    border-radius:5px;
}
#chat-contener #chat .me{
    text-align:right;
}
#chat-contener #chat .you .message{
    background-color:#58b666;
}
#chat-contener #chat .me .message{
    background-color:#6fbced;
}
#chat-contener #chat .triangle{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 10px 10px 10px;
}
#chat-contener #chat .you .triangle{
        border-color: transparent transparent #58b666 transparent;
        margin-left:15px;
}
#chat-contener #chat .me .triangle{
        border-color: transparent transparent #6fbced transparent;
        margin-left:375px;
}

#chat-contener main footer{
    height:155px;
    padding:20px 30px 10px 20px;
}
#chat-contener main footer textarea{
    resize:none;
    border:none;
    display:block;
    width:100%;
    height:80px;
    border-radius:3px;
    padding:20px;
    font-size:13px;
    margin-bottom:13px;
}
#chat-contener main footer textarea::placeholder{
    color:#ddd;
}
#chat-contener main footer img{
    height:30px;
    cursor:pointer;
}
#chat-contener main footer a{
    text-decoration:none;
    text-transform:uppercase;
    font-weight:bold;
    color:#6fbced;
    vertical-align:top;
    margin-left:333px;
    margin-top:5px;
    display:inline-block;
}
</style>
@endsection

@section('content')


<div id="chat-contener">
  <div id="container">
    <aside>
        <header>
            <input type="text" placeholder="search">
        </header>
        <ul id="acconts" onclick="">
            {{-- <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status orange"></span>
                        offline
                    </h3>
                </div>
            </li> --}}
            {{-- <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_02.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_03.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status orange"></span>
                        offline
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_04.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_05.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status orange"></span>
                        offline
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_06.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_07.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_08.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_09.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status green"></span>
                        online
                    </h3>
                </div>
            </li>
            <li>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_10.jpg" alt="">
                <div>
                    <h2>Prénom Nom</h2>
                    <h3>
                        <span class="status orange"></span>
                        offline
                    </h3>
                </div>
            </li> --}}
        </ul>
    </aside>
    <main>
        <header>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
            <div>
                <h2>Chat with Vincent Porter</h2>
                <h3>already 1902 messages</h3>
            </div>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
        </header>
        <ul id="chat">
           
            {{-- <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    OK
                </div>
            </li>
            <li class="you">
                <div class="entete">
                    <span class="status green"></span>
                    <h2>Vincent</h2>
                    <h3>10:12AM, Today</h3>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    OK
                </div>
            </li>
            <li class="you">
                <div class="entete">
                    <span class="status green"></span>
                    <h2>Vincent</h2>
                    <h3>10:12AM, Today</h3>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    OK
                </div>
            </li>
            <li class="you">
                <div class="entete">
                    <span class="status green"></span>
                    <h2>Vincent</h2>
                    <h3>10:12AM, Today</h3>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                </div>
            </li>
            <li class="me">
                <div class="entete">
                    <h3>10:12AM, Today</h3>
                    <h2>Vincent</h2>
                    <span class="status blue"></span>
                </div>
                <div class="triangle"></div>
                <div class="message">
                    OK
                </div>
            </li> --}}
        </ul>
        
        <footer>
          
            <textarea placeholder="Type your message" id="sendMessage"></textarea>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
            <button type="button" class="btn btn-success bounceIn" onclick="send()"  >Send</button>
        </footer>
    </main>
  </div>
</div>



@endsection

@section('script')


  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
<script src="{{asset('js/pages/firebaseChat.js')}}"></script>
 
@endsection