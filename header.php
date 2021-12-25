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

		* {
			padding: 0;
			margin:  0;
			box-sizing: border-box;
		}

		.container-fluid {
			max-width: 100%;
			/*background-color: rgb(208, 213, 221);*/
		}

		.myContainer {
			width: 95%;
			margin: auto;
			
		}

		a:link {
			text-decoration: none;
		}

		#r1 {
			max-height: 60px;
			background-color: rgb(208, 213, 221);
		}

		#r1c1 h5 {
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

		#banner {
			width: 100%;
			margin: auto;
			min-height: 450px;
			margin-top: 20px;
		}

		#r3c1  {
			background: url("images/skinsol_logo.png");
			background-size: cover;
			background-repeat: none;
			background-blend-mode: lighten;
		}

		#r4c1 {
			transition: transform 0.5s;
		}

		#r4c1:hover {
			transform: translateY(-10px);
		}

		#r9 {
			min-height: 300px;
			background-color: rgb(208, 213, 221);
			padding-top: 10px;
		}

		#r11 {
			min-height: 50px;
			border-top: 3px solid white;
			background-color: rgb(208, 213, 221);
			padding-top: 10px;
		}

		.title-div {
			color: rgb(90, 90, 90);
			text-decoration-line: underline;
		}

		/* -------Whatsapp ---------*/
		.whatsapp {
			position: fixed;
			bottom: 2%;
			right: 1%;
			height: 70px;
			width: 6%;

		}
		.whatsapp img {
			width: 80%;
			border-radius: 50%;
			opacity: 1;
		}

	</style>

</head>

<body>
	<div class="container-fluid">
		
		<div class="myContainer">
		
			<!-- Row 1 -->
			<div class="row cnt-row" id="r1">

				<div class="col-md-5 r1c" id="r1c1">
					<a href="index.php"><h5><img src="images/header_logo.png" width="150" height="60" class="mx-4"> <span class="header_span1">SKIN</span><span class="header_span2">SOL</span> SKINCARE </h5></a>
				</div>

				<div class="col-md-3 r1c mt-2" id="r1c2">
					<input type="text" name="pagesearch" id="pagesearch" placeholder="Search" class="form-control">
				</div>

				<div class="col-md-1 r1c mt-3 text-center" id="r1c3">
					<a href="cart.php"><i class="fa fa-cart-plus" id="home-cart"></i></a>
				</div>

				<div class="col-md-2 r1c mt-3" id="r1c4">
					<a href="login.php">Log In / </a>
					<a href="signup.php">Sign Up</a>
				</div>

				<div class="col-md-1 r1c mt-2" id="r1c5">
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
