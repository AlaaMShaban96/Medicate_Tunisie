@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')


<title>Medicate Tunis : Service </title>
   <style>


.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 225px;
  padding-left: 16px;
  padding-right:16px;
}





.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);

}



#teams{
    margin-top: 20%;
    text-align: center;
}
img{
    width: 93%;
    height: 178px;
}
.img-border{
    margin-top: 5px;
    border-style: solid;
    height: 187px;
}



#teams h1{
    font-family: sans-serif;
    margin: 100px auto;
    text-align: center;
    font-size: 40px;
    max-width: 600px;
    position:relative;
     
    }
    #teams  h1:before{
    content: "";
    display:block;
    width: 120px;
    height:2px;
    background: #000;
    position: absolute;
    left: 0;
    top: 50%;
    z-index: -2;
    }
    #teams  h1:after{
    content: "";
    display:block;
    width: 120px;
    height:2px;
    background: #000;
    position: absolute;
    right: 0;
    top: 50%;
    z-index: -2;
    }
    #teams  span{
    background: #fff
    }

   </style>
 
@endsection

@section('content')

<div id="teams">
  
    <div>
        <h1><span>Our Team </span></h1>
    </div>
    <div class="card card-2">
        <div class="img-border">
            <img src="https://lh3.googleusercontent.com/proxy/dNiYQtOu-3VkErr1h36nFnpqZBVpHIgUhS_S9-BgDoUWqdNujiX7KrsWK6oDOXiwf2IXBSgr4rJm6qRZPpBxgSaoO6QCY4si9otqed5JCOfoh0r0QGnseGrl_uG3SA" alt="" srcset="">
        </div>
        

        <div>
            <p>
                <b>Alaa Mohammed</b>
            </p>
            <i>Web Developer</i>
        </div>
        <div class="widget">
          
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
              <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
            </div>
            
            
          </div>
    </div>
    <div class="card card-2">
        <div class="img-border">
            <img src="https://eng.uber.com/wp-content/uploads/2018/12/bg_92e0f202-5711-4a91-9126-0a5dd11c2c04-lVuXcgpH1.jpg" alt="" srcset="">
        </div>
        

        <div>
            <p>
                <b>Alaa Mohammed</b>
            </p>
            <i>Web Developer</i>
        </div>
        <div class="widget">
          
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
              <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
            </div>
            
            
          </div>
    </div>
    <div class="card card-2">
        <div class="img-border">
            <img src="https://eng.uber.com/wp-content/uploads/2018/12/bg_92e0f202-5711-4a91-9126-0a5dd11c2c04-lVuXcgpH1.jpg" alt="" srcset="">
        </div>
        

        <div>
            <p>
                <b>Alaa Mohammed</b>
            </p>
            <i>Web Developer</i>
        </div>
        <div class="widget">
          
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
              <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
            </div>
            
            
          </div>
    </div>
    
    






    <div>
        <h1><span>Our Doctor </span></h1>
    </div>
    <div class="card card-2">
        <div class="img-border">
            <img src="https://lh3.googleusercontent.com/proxy/dNiYQtOu-3VkErr1h36nFnpqZBVpHIgUhS_S9-BgDoUWqdNujiX7KrsWK6oDOXiwf2IXBSgr4rJm6qRZPpBxgSaoO6QCY4si9otqed5JCOfoh0r0QGnseGrl_uG3SA" alt="" srcset="">
        </div>
        

        <div>
            <p>
                <b>Alaa Mohammed</b>
            </p>
            <i>Web Developer</i>
        </div>
        <div class="widget">
          
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
              <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
            </div>
            
            
          </div>
    </div>
    <div class="card card-2">
        <div class="img-border">
            <img src="https://eng.uber.com/wp-content/uploads/2018/12/bg_92e0f202-5711-4a91-9126-0a5dd11c2c04-lVuXcgpH1.jpg" alt="" srcset="">
        </div>
        

        <div>
            <p>
                <b>Alaa Mohammed</b>
            </p>
            <i>Web Developer</i>
        </div>
        <div class="widget">
          
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://web.facebook.com/MedicateTPA/?_rdc=1&_rdr"></a>
              <a class="social-button twitter" href="https://twitter.com/MedicateTPA"></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/in/MedicateTPA/"></a>
            
            </div>
            
            
          </div>
    </div>
   
    
   

</div>

@endsection

@section('script')
 
@endsection