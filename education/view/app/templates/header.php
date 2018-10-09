<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Education Center</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/bootstrap.min.css" />
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/owl.theme.default.css" />
	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/magnific-popup.css" />
	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/font-awesome.min.css">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/style.css" />
	<!-- My Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="view/app/templates/resourses/css/mystyle.css"/>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		
		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<p style="font-size: 20px;margin-top: 9%;">Education Center</p>
						</a>
					</div>
					<!-- /Logo -->
					<!-- Collapse nav button -->
					<div class="nav-collapse">	<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>
				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.php#home">Home</a>
					</li>
					<li class="has-dropdown"><a href="#">Tracks</a>
						<ul class="dropdown">
							<?php 
							include_once('Model/adminModel.php');
							$admin = new adminModal();
							$admin -> displayCategory();
							?>
						</ul>
					</li>
					<li><a href="index.php#exam">Exams</a>
					</li>
					<li><a href="index.php#search">Search</a>
					</li>
					<li><a href="index.php#about">About</a>
					</li>
					<li><a href="index.php#contact">Contact</a>
					</li>
					<!--                                        <li><a href="#search"><i class="fa fa-search"></i></a></li>-->
				</ul>
				<!-- /Main navigation -->
			</div>
		</nav>
		<!-- /Nav -->
		