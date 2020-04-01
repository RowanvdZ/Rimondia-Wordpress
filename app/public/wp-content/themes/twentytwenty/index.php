<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<!-- End header -->
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
	<!-- Indicators -->

	<ol class="carousel-indicators">
		<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleControls" data-slide-to="1"></li>
		<li data-target="#carouselExampleControls" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<div id="home" class="first-section" style="background-image:url('<?php get_template_directory() ?>img/busjes_rimondia.png');">
				<div class="dtab" style="z-index: 1213;">
					<div class="container rimondia-style-box ">
						<div class="row">
							<div class="col-md-12 col-sm-12 ">
								<div class="big-tagline">
									<h2>Rimondia B.V.</h2>
									<p class="lead">Rimondia BV is onderdeel van de Van de Ridder Groep en houd zich
										bezig met monstername en diagnose, voornamelijk in de agrarische sector.
									</p>
									<a href="" class="hover-btn-new" id="contact"><span>Contact </span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="" class="hover-btn-new" id="over-ons"><span>Over ons</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- end container -->
				</div>
			</div>
			<!-- end section -->
		</div>

		<div class="carousel-item">
			<div id="home" class="first-section" style="background-image:url('<?php get_template_directory() ?>img/slider-02.jpg');">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-left">
								<div class="big-tagline">
									<h2 data-animation="animated zoomInRight">Find the right
										<strong>Hosting</strong></h2>
									<p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive
										landing page template, you can promote your all hosting, domain and email
										services. </p>
									<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="#" class="hover-btn-new"><span>Read More</span></a>
								</div>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end container -->
				</div>
			</div>
			<!-- end section -->
		</div>
		<div class="carousel-item">
			<div id="home" class="first-section" style="background-image:url('<?php get_template_directory() ?>img/slider-03.jpg');">
				<div class="dtab">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company
									</h2>
									<p class="lead" data-animation="animated fadeInLeft">1 IP included with each
										server Your Choice of any OS (CentOS, Windows, Debian, Fedora) FREE Reboots
									</p>
									<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="#" class="hover-btn-new"><span>Read More</span></a>
								</div>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end container -->
				</div>
			</div>
			<!-- end section -->
		</div>
		<!-- Left Control -->
		<!-- <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> -->

		<!-- Right Control -->
		<!-- <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
	</div>
</div>
<div id="over-ons-section" class="section lb custom-about-us">
	<div class="container-fluid">
		<div class="section-title row text-left">
			<div class="col-md-8 offset-md-0">
				<h3>Over ons</h3>
				<!-- <p class="lead">Rimondia B.V.is onderdeel van de Van de Ridder Groep en houd zich bezig met monstername en diagnose, voornamelijk in de agrarische sector.</p> -->
			</div>
		</div>
		<!-- end title -->

		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">
					<!-- <h4>2018 BEST WEB HOSTING COMPANY</h4> -->
					<!-- <h2>Awards Winner Support Center</h2> -->
					<p>Al sinds 1992 is monstername een belangrijke specialisatie binnen de Van de Ridder
						organisatie. Zo belangrijk dat in 2006 is besloten deze specialisatie onder te brengen in
						een apart onafhankelijk bedrijf onder de naam Rimondia.</p>
					<p>In het verleden beperkte de dienstverlening zich tot het nemen van monsters voor de diverse
						opdrachtgevers, sinds 2006 bieden wij ook mogelijkheden om onderzoeken bij ons onder te
						brengen. Op deze manier kan Rimondia u een totaal
						pakket aanbieden, van planning en organisatie tot de uiteindelijke uitslag van het monster.
						Hierdoor kunnen wij het complete traject efficiënt uitvoeren en onze opdrachtgevers in een
						korte tijd van een uitslag en advies voorzien.</p>
					<!--   <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
				</div>
				<!-- end messagebox -->
			</div>
			<!-- end col -->

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="embed-responsive embed-responsive-16by9 wow fadeIn">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c8KcRWJMLNg?start=4" allowfullscreen></iframe>
				</div>
			</div>
			<!-- end col -->
		</div>
	</div>
	<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end section -->

<div id="monstername-section" class="section lb">
	<div class="container-fluid">
		<div class="section-title row text-left">
			<div class="col-md-8 offset-md-0">
				<h3>Monstername</h3>
				<p class="lead">Naast het afnemen van bloed uisque eget nisl id nulla sagittis auctor quis id.
					Aliquam quis vehicula enim, non aliquam </p>
			</div>
		</div>
		<!-- end title -->

		<div class="row align-items" id="switch-elements">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="post-media wow fadeIn">
					<img src="<?php get_template_directory() ?>img/about_02.jpg" alt="" class="img-fluid img-rounded">
				</div>
				<!-- end media -->
			</div>
			<!-- end col -->
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">
					<!-- <h4>2018 BEST WEB HOSTING COMPANY</h4> -->
					<h2>Bloedafname</h2>
					<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam
						risus. Sed a tellus quis mi rhoncus dignissim.</p>

					<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
						bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
						montes, nascetur ridiculus mus. Sed vitae rutrum
						neque. </p>

					<!-- <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
				</div>
				<!-- end messagebox -->
			</div>
			<!-- end col -->
		</div>
		<div style="padding-top: 30px;"></div>
		<div class="row align-items">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="message-box">
					<h2>Overige monsters</h2>
					<h4 style="color: black">Ruwvoermonster</h4>
					<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
						bibendum.
					</p>
					<h4 style="color: black">Watermonsters</h4>
					<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
						bibendum.
					</p>
					<h4 style="color: black">Melkmonsters</h4>
					<p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
						bibendum.
					</p>


					<!-- <a href="#" class="hover-btn-new"><span>Learn More</span></a> -->
				</div>
				<!-- end messagebox -->
			</div>
			<!-- end col -->

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<div class="post-media wow fadeIn">
					<img src="<?php get_template_directory() ?>img/about_03.jpg" alt="" class="img-fluid img-rounded">
				</div>
				<!-- end media -->
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
<!-- end section -->


<section id="werkwijze-section" class="page-section">
	<div class="container-fluid">
		<div class="section-title row text-left">
			<div class="col-lg-12 offset-lg-0">
				<h3>Werkwijze</h3>
				<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
					lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
			</div>
		</div>
		<!-- end title -->
		<div class="timeline">
			<div class="timeline__wrap">
				<div class="timeline__items">
					<div class="timeline__item">
						<div class="timeline__content img-bg-01 wow fadeInDown">
							<h2>1. Order verwerken</h2>
							<p>De order komt binnen en wordt verwerkt in het systeem.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-02 wow fadeInUp">
							<h2>2. Afspraak maken</h2>
							<p>Er wordt contact opgenomen met de klant om een afspraak in te plannen.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-03 wow fadeInDown">
							<h2>3. Voorbereiden bezoek</h2>
							<p>I&R data wordt in de handhelds geladen en de voorraad in de busjes wordt gecheckt.
							</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-04 wow fadeInUp">
							<h2>4. Monstername</h2>
							<p>Van elk kalf wordt het oormerknummer geregistreerd en vervolgens bloed afgenomen.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-01">
							<h2>5. Reiniging</h2>
							<p>Na de werkzaamheden worden alle gebruikte materialen grondig gereinigd en ontsmet.
							</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-02">
							<h2>6. Gekoeld transport</h2>
							<p>De bloedmonsters gaan gekoeld terug naar Rimondia.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-03">
							<h2>7. Analyseren monsters</h2>
							<p>In het laboratorium worden de boedmonsters geanalyseerd op HB en serumijzer.</p>
						</div>
					</div>
					<div class="timeline__item">
						<div class="timeline__content img-bg-04">
							<h2>8.Resultaten verwerken</h2>
							<p>De resultaten worden samengevoegd en teruggekoppeld naar de klant.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- 
    <div id="over-ons" class="section wb">
        <div class="container">
            <div class="row text-center">

                <div class="col-lg-12">
                    
                </div>
                <div class="col-lg-12">
                    <div class="customwidget text-left">
                        <h1>Over ons </h1>
                        <p>With our awesome domain name search form, you can search any domain names with tons of
                            extensions.</p>
                        <p>Pursuing high quality standards, my greatest efforts are focused on producing semantic,
                            SEO-friendly, valid and clean code. In order to stay effective and relevant in this
                            constantly evolving sphere I always try to be in touch with the latest news and recent
                            approaches in programming.</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> 20k Domains Sold in 2017</li>
                            <li><i class="fa fa-check"></i> 4k Website Created</li>
                        </ul> -->
<!-- end list 
                        <a href="#" class="hover-btn-new"><span>Hosting Packages</span></a>
                    </div>
                </div>

            </div>
        </div> 
    </div>end section -->
<div class="section cl custom-paralax">
	<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?php get_template_directory() ?>img/busjes_rimondia_dark.png');">
		<div class="container-fluid">

			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-hosting"></i></span>
					<p class="stat_count">1200000</p>
					<h3>Monsters gemeten</h3>
				</div>
				<!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-domain-registration"></i></span>
					<p class="stat_count">240000</p>
					<h3>Kalveren totaal</h3>
				</div>
				<!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-mail"></i></span>
					<p class="stat_count">5000</p>
					<h3>Diertjens</h3>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>
	<!-- end section -->
</div>

<div id="vacatures-section" class="section lb">
	<div class="container-fluid">
		<div class="section-title text-center">
			<h3>Vacatures</h3>
			<p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. </p>
		</div>



		<hr class="invis">

		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div class="tab-pane active fade show" id="tab1">
						<div class="row text-center">
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>Buitendienstmedewerker</h2>
										<h2> &nbsp;</h2>
										<h3>8 uur per week</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p>Wij zijn op zoek naar een gemotiveerde, punctueel en positief
											ingestelde medewerker, die ervaring heeft met administratief werk en
											gewend is aan het werken met computers (excel, outlook, enz.).
										</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new"><span>Bekijk vacature</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>Paraveterinair dierenartsassistent</h2>
										<h3>40 uur per week</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p>Wij zijn op zoek naar een gemotiveerde, punctueel en positief
											ingestelde medewerker, die ervaring heeft met administratief werk en
											gewend is aan het werken met computers (excel, outlook, enz.).
										</p>
									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new"><span>Bekijk vacature</span></a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="pricing-table pricing-table-highlighted">
									<div class="pricing-table-header grd1">
										<h2>Allround medewerker bedrijfsbureau</h2>
										<h3>36 uur per week</h3>
									</div>
									<div class="pricing-table-space"></div>
									<div class="pricing-table-features">
										<p>Wij zijn op zoek naar een gemotiveerde, punctueel en positief
											ingestelde medewerker, die ervaring heeft met administratief werk en
											gewend is aan het werken met computers (excel, outlook, enz.).
										</p>


									</div>
									<div class="pricing-table-sign-up">
										<a href="#" class="hover-btn-new"><span>Bekijk vacature</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div id="testimonials" class="parallax section db parallax-off"
        style="background-image:url('<?php get_template_directory() ?>img/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. </p>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                        </div>

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                        </div>
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_03.png" alt="" class="img-fluid ">
                                <h4>Venanda Mercy </h4>
                            </div>
                        </div>
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                        </div>

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                        </div>

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php get_template_directory() ?>img/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<div class="parallax section dbcolor">
	<div class="container">
		<div class="row logos">
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_01.png" alt="" class="img-repsonsive"></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_02.png" alt="" class="img-repsonsive"></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_03.png" alt="" class="img-repsonsive"></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_04.png" alt="" class="img-repsonsive"></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_05.png" alt="" class="img-repsonsive"></a>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
				<a href="#"><img src="<?php get_template_directory() ?>img/logo_06.png" alt="" class="img-repsonsive"></a>
			</div>
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</div>
<!-- end section -->

<?php
get_footer();
