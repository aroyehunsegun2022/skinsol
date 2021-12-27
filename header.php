<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Oluwasegun Arheyun, Motunrayo Ogunyemi, Kalio Tamunotonye">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SKINSOL SKNCARE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<!-- Bootstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">


		/************ Beginning of Body CSS ************/
		/***********************************************/

		* {
			padding: 0;
			margin:  0;
			box-sizing: border-box;
		}

		.container-fluid {
			max-width: 98%;
			background-color: rgba(56,215,85, 0.1);
			margin: auto;
		}

		a:link {
			text-decoration: none;
			color: rgb(30, 30, 30);
		}

		.title-div {
			color: rgb(90, 90, 90);
			text-decoration-line: underline;
		}
		/************* Ending of Body CSS ***********/
		/********************************************/


		#r3c1  {
			background: url("images/skinsol_logo.png");
			background-size: cover;
			background-repeat: none;
			background-blend-mode: lighten;
		}


		
		/********* Beginning of Index Page CSS *********/
		/***********************************************/
		
		/***** covid *****/
		#indxrw1 {
			min-height: 20px;
			color: rgb(255,111,97);
			background-color: #f3f3f3 !important;
		}

		/***** social *****/
		#indxrw2 {
			min-height: 40px;
			padding-top: 5px;
			color: rgb(0,0,255);
			background-color: rgba(56,215,85, 0.3) !important;
		}

		.fa-facebook-f, .fa-instagram {
			color: rgb(30, 30, 30);
		}

		/***** Navbar *****/
		#indxrw3 {
			margin-bottom: 35px;
			min-height: 60px;
			background-color: #f5f5f5 !important;
		}

		#indxrw3col1 h5 {
			color: rgb(90, 90, 90);
		}

		.header_span1 {
			color: green;
			font-size: 23px;
		}

		.header_span2 {
			color: blue;
			font-size: 23px;
		}

		#pagesearch {
			border: 1px solid green;
		}

		/***** Category & Banner *****/
		#indxrw4 {
			margin-bottom: 35px;
			min-height: 450px;
			padding-top: 5px;
		}

		#indxrw4col1 ul li{
			border-bottom: 1px solid green;
			width: 150px;
		}

		/***** About Us *****/
		#indxrw5 {
			margin-bottom: 35px;
			min-height: 150px;
		}

		/***** unique selling point *****/
		#indxrw6 {
			margin-bottom: 35px;
			min-height: 250px;
			padding-top: 13px;
			padding-bottom: 3px;
		}

		.feature {
   			 position: relative;
		}

		.feature .feature-col {
		    margin-bottom: 30px;
		}

		.feature .feature-content {
		    position: relative;
		    width: 100%;
		    height: 100%;
		    padding: 30px 15px;
		    text-align: center;
		    background: #ffffff;
		}

		.feature .feature-content i {
		    color: green;
		    font-size: 60px;
		    margin-bottom: 30px;
		}

		.feature .feature-content h2 {
		    font-size: 18px;
		}

		.feature .feature-content p {
		    font-size: 15px;
		    margin: 0;
		}

		/***** products one *****/
		#indxrw7 {
			margin-bottom: 35px;
			min-height: 200px;
			padding-top: 3px;
			padding-bottom: 3px;
		}

		.indxrw7col {
			transition: transform 0.5s;
		}

		.indxrw7col:hover {
			transform: translateY(-10px);
		}

		/***** referral *****/
		#indxrw8 {
			margin-bottom: 35px;
			min-height: 250px;
			padding-top: 10px;
		}

		.indxrw8col {
		    text-align: center;
		    transition: transform 0.5s;
		}

		.indxrw8col:hover {
		    transform: translate3d(10px, 10px, 15px);
		}

		.indxrw8col img {
		    width: 70px;
		    height: 70px;
		    border-radius: 50%;
		}


		/***** products two *****/
		#indxrw9 {
			margin-bottom: 35px;
			min-height: 200px;
			padding-top: 3px;
			padding-bottom: 3px;
		}

		/***** Advert Two *****/
		#indxrw10 {
			margin-bottom: 25px;
			min-height: 150px;
		}

		#indxrw10col1 {
			padding-top: 8px;
		}

		#indxrw10col2 {
			padding-top: 20px;
		}

		#indxrw10col3 {
			background: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3)), url("images/christmas.png");
			background-size: cover;
			background-repeat: no-repeat;
			color: rgb(210, 210, 210);
			padding-top: 20px;
		}

		/***** base address *****/
		#indxrw11 {
			margin-bottom: 5px;
			min-height: 300px;
		}

		/***** footer *****/
		#indxrw12 {
			min-height: 50px;
			padding-top: 5px;
		}
		/********** Ending of Index Page CSS ***********/
		/***********************************************/

		



		/********** Beginning of About Us CSS ***********/
		/***********************************************/
		#abtusrw1 {
			margin: auto;
		}

		#abtusrw2 {
			margin: auto;
		}

		/********** Ending of Whatsapp CSS ***********/
		/***********************************************/




		/********** Beginning of Whatsapp CSS ***********/
		/***********************************************/
		.whatsapp {
			position: fixed;
			bottom: 2%;
			right: 1%;
			height: 70px;
			width: 4%;

		}
		.whatsapp img {
			width: 60%;
			border-radius: 50%;
			opacity: 1;
		}

		/********** Ending of Whatsapp CSS ***********/
		/***********************************************/
	</style>

</head>

<body>

	<!------ Covid ----->
	<div class="container-fluid">
	    <div class="row" id="indxrw1">
	        <marquee>
	        	The new Omicron Virus is still out there!
	        	<img src="images/omicron.jpg" class="img-fluid mx-3" width="40" height="18">
	        	So please stay safe!!
	        </marquee>
	    </div>
	 </div>


	<!------ Social ----->
	<div class="container-fluid">
	    <div class="row" id="indxrw2">
	      <div class="col-sm-3">
	          <a href="mailto:info@skinsol.com?msg=sent successfully" target="_blank"><i class="fa fa-envelope"></i> info@skinsol.com</a>
	      </div>

	      <div class="col-sm-6 text-center animate__animated animate__shakeY">
	          <a href="https://mobile.twitter.com/skinsolbeauty" target="_blank"><i class="fab fa-twitter"></i></a>&nbsp;
	          <a href="https://web.facebook.com/Skinsolskincare" target="_blank"><i class="fab fa-facebook-f"></i></a>&nbsp;
	          <a href="https://www.instagram.com/skinsol_skin_care/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;
	          <a href="https://youtu.be/i4cbcjodBJ8" target="_blank"><i class="fab fa-youtube"></i></a>&nbsp;
	      </div>

	      <div class="col-sm-3 text-right">
	          <a href="tel:+2347060475625" target="_blank"><i class="fa fa-phone-alt"></i> 070-6047-5625</a>
	      </div>
	    </div>
	 </div>


	 <!------ Navbar ----->
	 <div class="container-fluid">
	    <div class="row" id="indxrw3">
	      <div class="col-md-5 indxrw3col" id="indxrw3col1">
	          <a href="index.php"><h5><img src="images/header_logo.png" width="150" height="60" class="mx-4"> <span class="header_span1">SKIN</span><span class="header_span2">SOL</span> SKINCARE </h5></a>
	        </div>

	        <div class="col-md-3 indxrw3col mt-2" id="indxrw3col2">
	          <input type="text" name="pagesearch" id="pagesearch" placeholder="Search" class="form-control">
	        </div>

	        <div class="col-md-1 indxrw3col mt-3 text-center" id="indxrw3col3">
	          <a href="cart.php"><i class="fa fa-cart-plus" id="home-cart"></i></a>
	        </div>

	        <div class="col-md-2 indxrw3col mt-3" id="indxrw3col4">
	          <a href="login.php">Log In / </a>
	          <a href="signup.php">Sign Up</a>
	        </div>

	        <div class="col-md-1 indxrw3col mt-2" id="indxrw3col5">
	          <div class="dropdown">
	            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
	              <i class="fa fa-bars"></i>
	            </button>
	            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	              <a class="dropdown-item" id="home" href="index.php">Home</a>
	              <a class="dropdown-item" id="about" href="aboutus.php">About</a>
	              <a class="dropdown-item" id="products" href="products.php">Products</a>
	              <a class="dropdown-item" id="contact" href="contactus.php">Contact</a>
	            </div>
	          </div>
	        </div>
	    </div>
	 </div>

