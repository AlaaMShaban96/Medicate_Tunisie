@extends('cpanel/partials/master')

@section('head')
  <link rel="stylesheet" href="{{asset('css/pages/masseg.css')}}">

@endsection

@section('body')


<div id="chat-contener">
  <div id="container">
    <aside>
        <header>
            <input type="text" placeholder="search">
        </header>
        <ul id="acconts" onclick="">
         
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
        
        </ul>
        
        <footer>
          
            <textarea placeholder="Type your message" id="sendMessage"></textarea>
            <button type="button" class="btn btn-success bounceIn" onclick="send()"  >Send</button>
        </footer>
    </main>
  </div>
</div>



@endsection

@section('script')


 
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
<script src="{{asset('js/pages/firebaseChat.js')}}"></script>
 
@endsection