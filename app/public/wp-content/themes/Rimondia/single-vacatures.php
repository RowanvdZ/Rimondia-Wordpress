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
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


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
						<li class="nav-item" id="home"><a class="nav-link nav-link-ltr" href="">Home</a></li>
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
						<li class="nav-item active" id="vacatures"><a class="nav-link nav-link-ltr" href="">Vacatures</a></li>

					</ul>
				</div>


			</div>
			<div class="progress"></div>
		</nav>

	</header>
	<?php
	// Start the Loop.
	while (have_posts()) : the_post();
		$meta = get_post_meta($post->ID, 'your_fields', true)
	?>

		<div id="monstername-section" class="section lb">
			<div class="container-fluid">

				<!-- end title -->
				<div class="row align-items">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="message-box">
							<div class="section-title row text-left"> <?php
																		if (strlen(get_the_title()) > 30) { ?>
									<h3 style="font-size: 35px"><?php the_title() ?> </h3> <?php
																						} else { ?>
									<h3><?php the_title() ?> </h3> <?php } ?>
								<p style="color:black"><?php the_content();
														?></p>

							</div>

							<!-- <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
						</div>
						<!-- end messagebox -->
					</div>
					<!-- end col -->

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="post-media wow fadeIn">
							<img src="<?php echo $meta['image'] ?>" alt="" class="img-fluid img-rounded">
						</div>
						<!-- end media -->
					</div>


					<!-- end col -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</div>
		<div id="over-ons-section" class="section lb custom-about-us">
			<div class="container-fluid">

				<!-- end title -->

				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="message-box">
							<!-- <h4>2018 BEST WEB HOSTING COMPANY</h4> -->
							<h2 style="font-size: 32px">Wat wij jou bieden</h2>
							<br>
							<ul class="live type2">
								<li>I have never seen anything like this</li>
								<li>This is most certainly cool, and it can also work on long texts inside the list-item elements, which spans over multiple lines</li>
								<li>Un-ordered lists are fun to play with</li>
								<li>Firefox sure does animate this effect nicely</li>
								<li>This is so simple</li>
							</ul>

							<!-- <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
						</div>
						<!-- end media -->
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="message-box">
							<h2 style="font-size: 33px">Hier herken jij jezelf in</h2>

							<br>
							<ul class="live type2">
								<li>I have never seen anything like this</li>
								<li>This is most certainly cool, and it can also work on long texts inside the list-item elements, which spans over multiple lines</li>
								<li>Un-ordered lists are fun to play with</li>
								<li>Firefox sure does animate this effect nicely</li>
								<li>This is so simple</li>
							</ul>

							<!-- <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
						</div>
						<!-- end messagebox -->

					</div>

				</div>
			</div>
			<!-- end row -->
		</div>
		<div id="over-ons-section" class="section lb ">
			<div class="container-fluid">

				<!-- end title -->

				<div class="row align-items-center">
					<div class="container">
						<h2 class="text-center" style="font-size: 33px">Heb je interesse?</h2>
						<div class="pricing-table-sign-up">
							<a href="mailto: rimondia@vdro.nl" class="hover-btn-new viewVacature"><span>Neem contact op</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- end c
				</div>
			</div>
		</div>
		<!-- end container -->
		</div>

		<div id="main-content" class="main-content">

			<div id="primary" class="content-area">


				<div id="content" class="site-content" role="main">

				</div><!-- #content -->
			</div><!-- #primary -->
		</div><!-- #main-content -->

	<?php

	endwhile;
	?>
	<?php get_footer(); ?>