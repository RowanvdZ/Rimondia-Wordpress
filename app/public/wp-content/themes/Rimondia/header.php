<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php wp_head(); ?>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Rimondia B.V.</title>
	<!-- <meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">

	<link rel="stylesheet" href="/styles.css">
	<link rel="stylesheet" href="assets/css/versions.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link href="assets/css/hamburger.css" rel="stylesheet">

	<script src="assets/js/modernizer.js"></script> -->

	<!-- [if lt IE 9]> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <![endif] -->

</head>

<body class="host_version">
	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav id="navbar-display" class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="container-fluid navbar-custom">

				<a class="navbar-brand" href="">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/rimondia_logo.jpg" alt="" />
				</a>
				<button class="hamburger hamburger--collapse" type="button" id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" id="home"><a class="nav-link nav-link-ltr" href="">Home</a></li>
						<li class="nav-item" id="over-ons"><a class="nav-link nav-link-ltr" href="">Over ons</a></li>
						<li class="nav-item" id="monstername"><a class="nav-link nav-link-ltr" href="">Monstername </a>
						</li>
						<!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Hosting
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="hosting.html">Web Hosting </a>
                                <a class="dropdown-item" href="hosting.html">WordPress Hosting </a>
                                <a class="dropdown-item" href="hosting.html">Cloud Server </a>
                                <a class="dropdown-item" href="hosting.html">Reseller Package </a>
                                <a class="dropdown-item" href="hosting.html">Dedicated Hosting </a>
                            </div>
                        </li> -->
						<li class="nav-item" id="werkwijze"><a class="nav-link nav-link-ltr" href="">Werkwijze</a></li>
						<li class="nav-item" id="vacatures"><a class="nav-link nav-link-ltr" href="">Vacatures</a></li>
						<li class="nav-item" id="contact"><a class="nav-link nav-link-ltr" href="">Contact</a></li>
					</ul>
				</div>


			</div>
			<div class="progress"></div>
		</nav>

	</header>