<?php
session_start();
if (!isset($_SESSION["email"])){
header("location:my.html");
}
else
$a=1;
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Book & Go</title>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css">
</head>

<style>
	body{
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
	}
  header{
    height: 100%;
    width: 100%;
    overflow: hidden;
    position: relative;
  }
  .video{
    position: fixed;
    top: 50%; left: 50%;
    z-index: -100;
    min-width: 100%;
    min-height: 100%
    width:auto;
    height:auto;
    transform: translate(-50%,-50%);
  }
</style>

<body>
	<header>
    <video autoplay muted loop class="video">
      <source src="images/backvid.mp4" type="video/mp4">
    </video>
  </header>
<nav class="navbar navbar-expand-lg navbar fixed-top" style="background-color: #0009">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<a href="navbar-brand" href="#" class="animated pulse" ><img src="images/logo.gif" style="max-width: 100px" class="img-responsive"></a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      	<button id="drop1"class="btn dropdown-toggle"type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded  ="false">
          Holidays
         </button>
         <div class="dropdown">
        	<div id="drop1-menu"class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a class="dropdown-item btn-1" href="#"><b>India</b></a>
              <a class="dropdown-item btn-2" href="#"><b>International</b></a>
            </div>
         </div>
       
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
    </ul>

       <b style="color: #4494EE; margin-right: 5%"><?php echo ($_SESSION['email']); ?></b>
     <a href="logout.php" style="color: #FDFEFE">Logout</a>
    
  </div>
</nav>
<div id="jumbo"class="jumbotron" class="jumbotron-responsive"><a name="home"></a>
	<link rel="stylesheet" type="text/css" href="custom.css">
<br>
<br>
<br>
<br>
<br>
<div class="well" id="wellmy" style="margin-left:80px;"><mark><b>Recomended:</b></mark>  Please visit our <a href="#holidays">holidays</a> section first before making any plan..
 </div>
<br>
<br>
<br>
<br>
<div class="row"style="margin-left:70px;">
	<div class="col-sm-6 col-xs-10">
  <div class="dropdown" class="animated bounceInLeft">
  <button class="btn btn-success dropdown-toggle" class="animated bounceInLeft"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Bookings
  </button>
  <div id="drop-menu"class="dropdown-menu" aria-labelledby="dropdownMenuButton"id="drop">
    <a class="dropdown-item btn-1" href="flight.html"><b>Flight</b></a>
    <a class="dropdown-item btn-2" href="bus.html"><b>Bus</b></a>
    <a class="dropdown-item btn-3" href="train.html"><b>Train</b></a>
  </div>
  <a href="flight.html">  <button type="button" class="btn btn-1"class="btn-responsive"><img src="images/flight.png "class="animated bounceInLeft" style="max-width: 30px"><b>Flight</b></button></a>
<a href="bus.html">
<button type="button" class="btn btn-2"class="btn-responsive"><img src="images/bus.png "class="animated bounceInLeft"style="max-width: 30px"><b>Bus</b></button></a>
<a href="train.html">
 <button type="button" class="btn btn-3"class="btn-responsive"><img src="images/train.png "class="animated bounceInLeft"style="max-width: 30px"><b>Train</b></button></a>
 <br>
 </div>
</div>
</div>
</div>
<div class="jumbotron-special" class="jumbotron-responsive">
	<a name="holidays"></a>
	<link rel="stylesheet" type="text/css" href="custom.css">
<br>
<h2 class="animated rubberBand"><u>Your Journey Starts Here</u></h1>
<style type="text/css">
	h2{
		text-align: center;
		color: #85929E;
		text-shadow: 1px 1px #212F3D ,2px 2px #212F3D;
	}
</style>
<br>
<h4><u>A journey of a thousand miles begins with a single step.

-:Lao Tzu</u></h4>
<style type="text/css">
h4{
		text-align: center;
	}
</style>	
<br>
<br>
<div class="row">
  <div class="col-md-4" style="text-align: center;" >
      <div id="padding">
    <div class="thumbnail"id="thumb">
      <a href="travelling.html">
        <img src="images/thumb1.jpg" alt="Lights" style="width:103%"class="animated tada">
      </a>
    </div>
    <h5><b><u>Travelling</u></b></h5>
  </div>
  </div>
  <div class="col-md-4"style="text-align: center;">
    <div class="thumbnail"id="thumb">
      <a href="seaviews.html">
        <img src="images/thumb2.jpg" alt="Nature" style="width:99%"class="animated tada">
      </a>
    </div>
    <h5><b><u>Sea Views</u></b></h5>
    </div>
  <div class="col-md-4"style="text-align: center; ">
    <div class="thumbnail"id="thumb">
      <a href="journalism.html">
        <img src="images/thumb3.jpg" alt="Fjords" style="width:98%"class="animated tada">
      </a>
    </div>
    <h5><b><u>Journalism</u></b></h5>
  </div>
     <br>
    <br>
    <br>
    <br>
    <br>
   </div>
   <a name="aboutus"></a>
  <div class="well" id="well1">
  <h3><u>Who We Are ??</u></h3>
<style type="text/css">
	h3{ padding-bottom: 15px;
		text-align: center;
		color: #FBFCFC;
		text-shadow: 1px 1px #1C2833 ,2px 2px #1C2833;
	}
</style>
</div>
<div class="rightside">
		<ul id="icon">
			<li>
        <a href="http://www.facebook.com">
        <i class="fa fa-facebook" style="color: #FDFEFE"></i></a></li>
			<li><i class="fa fa-twitter"></i></li>
			<li><i class="fa fa-google-plus"></i></li>
			<li><i class="fa fa-linkedin"></i></li>
		</ul>
	</div>
<div class="container" style="padding-left: 30px; margin: 70px 50px">
	<div class="row"style="padding-left: 100px">
<div class="col-lg-4">
<button class=" btn-4" id="button">
	<img src="images/welcome.png" style ="max-width:90px"class="animated pulse">
	</button>
<p class="my"><strong><u>Welcome</u></strong></p>
<style type="text/css">
p.my{
	padding-left: 40px;
}
</style>
<p class="my1">Our Agency is in a class of its own. A full service agency, both leisure and corporate travel, with many specialty areas</p>
<style type="text/css">
	p.my1{
		padding-left: 5px;
	}
</style>
</div>
<div class="col-lg-4"style="padding-left: 50px">
<button class="btn-4" id="button">
	<img src="images/home.png" style ="max-width:90px"class="animated pulse">
</button>
<p><strong><u>About Us</u></strong></p>
<style type="text/css">
p{
	padding-left: 40px;
}
</style>
<p class="my1">We are students now,thats our first project</p>
<style type="text/css">
	p.my1{
		padding-left: 5px;
	}
</style>
</div>
<div class="col-lg-4"style="padding-left: 60px">
<button class="btn-4" id="button">
	<img src="images/bull.png" style ="max-width:90px"class="animated pulse">
</button>
<p><strong><u>Find Us</u></strong></p>
<style type="text/css">
p{
	padding-left: 50px;
}
</style>
<p class="my1">You can find us on facebook,twitter and instagram</p>
<style type="text/css">
	p.my1{
		padding-left: 5px;
	}
</style>
</div>
</div>
</div>
<a name="contactus"></a>
 <div class="footer">
 	<img src="images/footer.png">
 </div>
 <div class="row" style="background: #070707">
 <div class="col-lg-4"style="padding-left: 50px">
 	<p style="color:#FDFEFE "><b><u>Office Address:</u></b><br>
 	MNNIT Allahabad<br>
 Pin no. 200204</p>
 </div>
 <div class="col-lg-4"style="padding-left: 50px">
 	<p style="color:#FDFEFE "><b><u>HOME:</u></b><br>
 	Holidays<br>
 About Us<br>
Contact Us</p>
 </div>
 <div class="col-lg-4"style="padding-left: 50px">
 	<p style="color:#FDFEFE "><b><u>Contact US:</u></b><br>
 	MNNIT Allahabad<br>
 Pin no. 200204</p>
 </div>
</div>
  <hr>
  <style type="text/css">
  	hr{ max-width: 50%;
	border-color: #512E5F;
	border-width: 3px 0 0;
}
  </style>
  <p style="text-align: center;">CopyRight © 2018 MNNIT All Rights Reserved</p>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
  <script src="jquery.datetimepicker.full.js"></script>
  <script>
    $("#datetimepicker").datetimepicker();
        </script> 
</body>
</html>