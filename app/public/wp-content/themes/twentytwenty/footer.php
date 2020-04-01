<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Over ons</h3>
					</div>
					<p> Rimondia BV is onderdeel van de Van de Ridder Groep en houd zich bezig met monstername en
						diagnose, voornamelijk in de agrarische sector.
					</p>
				</div>
				<!-- end clearfix -->
			</div>
			<!-- end col -->

			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Snel navigeren
						</h3>
					</div>
					<ul class="footer-links">
						<li class="nav-item active" id="home"><a href="">Home</a></li>
						<li class="nav-item" id="over-ons"><a href="">Over ons</a></li>
						<li class="nav-item" id="monstername"><a href="">Monstername </a></li>
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
						<li class="nav-item" id="werkwijze"><a href="">Werkwijze</a></li>
						<li class="nav-item" id="vacatures"><a href="">Vacatures</a></li>
						<li class="nav-item" id="contact"><a href="">Contact</a></li>
					</ul>
					<!-- end links -->
				</div>
				<!-- end clearfix -->
			</div>
			<!-- end col -->

			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Contact</h3>
					</div>

					<ul class="footer-links">
						<li><a href="mailto:#">rimondia@vdro.nl</a></li>
						<li><a href="#">www.yoursite.com</a></li>
						<li>Kleine Kolonieweg 94, 8075 PC Elspeet</li>
						<li>0577-490340</li>
					</ul>
					<!-- end links -->
				</div>
				<!-- end clearfix -->
			</div>
			<!-- end col -->

		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
	<div class="container">
		<div class="footer-distributed">
			<div class="footer-left">
				<p class="footer-company-name">All Rights Reserved. &copy; 2020
					<a href="#"></a> Design By : <a href="#">Rowan</a></p>
			</div>

			<div class="footer-right">
				<ul class="footer-links-soi">
					<li>
						<p style="color: white;">Volg ons op facebook! &nbsp; </p>
					</li>
					<li><a target="_blank" href="https://www.facebook.com/Rimondia2015/"><i class="fa fa-facebook"></i></a></li>

				</ul>
				<!-- end links -->
			</div>
		</div>
	</div>
</footer>
<!-- end footer -->
</div>
<!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<!-- <script src="assets/js/all.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/timeline.min.js"></script> -->
<script>
	timeline(document.querySelectorAll('.timeline'), {
		forceVerticalMode: 700,
		mode: 'horizontal',
		verticalStartPosition: 'left',
		visibleItems: 4
	});
</script>
<?php wp_footer(); ?>
</body>

</html>