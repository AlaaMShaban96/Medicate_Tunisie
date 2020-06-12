@extends('layouts.master')

@section('head')

 
<style>
#xx {
	background-color: #f7f7f7;
}
#xx .container {
	padding-top: 4px;
}
#xx h1
{
	color: black;
	margin:40px 0 60px 0;
	font-weight:300;
}

#xx .our-team-main
{
	width:100%;
	height:50%;
	border-bottom:2px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


#xx .our-team-main img
{
	margin-top: 15%;
	border-radius:50%;
	margin-bottom:20px;
	width: 90px;
}

#xx .our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

#xx .our-team-main p
{
	margin-bottom:0;
}

#xx .team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	
}

#xx .team-front
{
	width:100%;
	height:263px;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.50s ease;
}

#xx .our-team-main:hover .team-front
{
	bottom:-400px;
	transition: all 1.5s ease;
}

#xx .our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
}
.img-fluid{
	width : 90px;
	height : 90px;
}

/*our-team-main*/


</style>
@endsection

@section('content')

<div id="xx">
{{-- <h1 class="text-center">Team Design Section with Pure CSS Effect</h1> --}}


<div class="container">
	<h1> Find Us</h1>
<div class="row">
<!--team-4-->
<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/2000px-Flag_of_Libya.svg.png"  class="img-fluid" />
	<h3>Libya</h3>
	{{-- <p>Web Designer</p> --}}
	</div>
	
	<div class="team-back">
	<span>
		<p>
			Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
		</p>
		<b>Tel: +973 1 7382721</b><br>
		<b>Fax: +973 1 7382082</b><br>
		<p>P.O.Box 18442 Manama, Kingdom of Bahrain
		Email: nextcare@nextcarehealth.com</p>
	</span>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Report
  	</button>
	</div>
	
	</div>
	</div>
	<!--team-4-->
<!--team-1-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="https://cdn.webshopapp.com/shops/94414/files/53852256/egypt-flag-image-free-download.jpg"  class="img-fluid" />
<h3>Egypt</h3>
{{-- <p>Web Designer</p> --}}
</div>

<div class="team-back">
	<span>
		<p>
			Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
		</p>
		<b>Tel: +973 1 7382721</b><br>
		<b>Fax: +973 1 7382082</b><br>
		<p>P.O.Box 18442 Manama, Kingdom of Bahrain
		Email: nextcare@nextcarehealth.com</p>
	</span>
	

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Report
  	</button>
</div>

</div>
</div>
<!--team-1-->

<!--team-2-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="https://flagpedia.net/data/flags/vector/tn.svg"   class="img-fluid" />
<h3>Tunisia</h3>
{{-- <p>Web Designer</p> --}}
</div>

<div class="team-back">
<span>
    <p>
    	Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
    </p>
    <b>Tel: +973 1 7382721</b><br>
    <b>Fax: +973 1 7382082</b><br>
    <p>P.O.Box 18442 Manama, Kingdom of Bahrain
    Email: nextcare@nextcarehealth.com</p>
</span>
</div>

</div>
</div>
<!--team-2-->

<!--team-3-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/800px-Flag_of_Algeria.svg.png"  class="img-fluid" />
<h3>Algeria</h3>
{{-- <p>Web Designer</p> --}}
</div>

<div class="team-back">
<span>
    <p>
    	Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
    </p>
    <b>Tel: +973 1 7382721</b><br>
    <b>Fax: +973 1 7382082</b><br>
    <p>P.O.Box 18442 Manama, Kingdom of Bahrain
    Email: nextcare@nextcarehealth.com</p>
</span>
</div>

</div>
</div>
<!--team-3-->



<!--team-5-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" class="img-fluid" />
<h3>Germany</h3>
{{-- <p>Web Designer</p> --}}
</div>

<div class="team-back">
<span>
    <p>
    	Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
    </p>
    <b>Tel: +973 1 7382721</b><br>
    <b>Fax: +973 1 7382082</b><br>
    <p>P.O.Box 18442 Manama, Kingdom of Bahrain
    Email: nextcare@nextcarehealth.com</p>
</span>
</div>

</div>
</div>
<!--team-5-->

<!--team-6-->
<div class="col-lg-4">
<div class="our-team-main">

<div class="team-front">
<img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" class="img-fluid" />
<h3>Turkey</h3>
{{-- <p>Web Designer</p> --}}
</div>

<div class="team-back">
<span>
    <p>
    	Capital Plus Tower 13 floor, Office No. 131 & 132, Building 79, Road 2802, Block 428 Al Seef District
    </p>
    <b>Tel: +973 1 7382721</b><br>
    <b>Fax: +973 1 7382082</b><br>
    <p>P.O.Box 18442 Manama, Kingdom of Bahrain
    Email: nextcare@nextcarehealth.com</p>
</span>
</div>

</div>
</div>
<!--team-6-->



</div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"style="display: inline-flex;">Contact Us</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				X
		  </button>
		</div>
		<div class="modal-body">
		  ...
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
@endsection

@section('script')
 
@endsection