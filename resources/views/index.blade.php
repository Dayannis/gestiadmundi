<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Gestiadmundi Siglo XXI</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/one.style.css">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="assets/css/footers/footer-v7.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/pace/pace-flash.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
	<link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

	<!-- Style Switcher -->
	<link rel="stylesheet" href="assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/one.dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">

	<!--=== Header ===-->
	<nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#intro">
					<span>G</span>estiadmundi Siglo XXI C.A.
					<!-- <img src="assets/img/logo1.png" alt="Logo"> -->
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li class="page-scroll home">
							<a href="#body">Home</a>
						</li>
						<li class="page-scroll">
							<a href="#about">Nosotros</a>
						</li>
						<li class="page-scroll">
							<a href="#services">Servicios</a>
						</li>
						<li class="page-scroll">
							<a href="#contact">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!--=== End Header ===-->

	<!-- Intro Section -->
	<section id="intro" class="intro-section">
		<div class="fullscreenbanner-container">
			<div class="fullscreenbanner">
				<ul>
					<!-- SLIDE 1 -->
					<li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
						<!-- MAIN IMAGE -->
						<img src="assets/img/planet.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

						<!-- LAYERS -->
						<div class="tp-caption rs-caption-1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="800"
						data-start="2000"
						data-easing="Back.easeInOut"
						data-endspeed="300">
						Gestiadmundi Siglo XXI C.A
					</div>

					<!-- LAYER -->
					<div class="tp-caption rs-caption-2 sft"
					data-x="center"
					data-hoffset="0"
					data-y="200"
					data-speed="1000"
					data-start="3000"
					data-easing="Power4.easeOut"
					data-endspeed="300"
					data-endeasing="Power1.easeIn"
					data-captionhidden="off"
					style="z-index: 6">
					Brindamos la mejor atencion y servicio a fin de satisfacer sus requerimientos.
				</div>

				<!-- LAYER -->
				<div class="tp-caption rs-caption-3 sft"
				data-x="center"
				data-hoffset="0"
				data-y="360"
				data-speed="800"
				data-start="3500"
				data-easing="Power4.easeOut"
				data-endspeed="300"
				data-endeasing="Power1.easeIn"
				data-captionhidden="off"
				style="z-index: 6">
				<span class="page-scroll"><a href="#services" class="btn-u btn-brd btn-brd-hover btn-u-light">Servicios</a></span>
				<span class="page-scroll"><a href="#contact" class="btn-u btn-brd btn-brd-hover btn-u-light">Contacto</a></span>
			</div>
		</li>

		
</ul>
<div class="tp-bannertimer tp-bottom"></div>
<div class="tp-dottedoverlay twoxtwo"></div>
</div>
</div>
</section>
<!-- End Intro Section -->

<!--  About Section -->
<section id="about" class="about-section section-first">
	@include('about')
</section>
<!--  About Section -->

<!-- Services Section -->
<section id="services">
	@include('services')
</section>
<!-- End Services Section -->

<!-- Contact Section -->
<section id="contact" class="contacts-section">
	@include('contact')
</section>
<!-- End Contact Section -->
<div class="copyright-section">
			<p> Gestiadmundi Siglo XXI <br>J–404343539<br></p>
			<ul class="social-icons">
				<li><a href="#" data-original-title="Facebook" class="social_facebook rounded-x"></a></li>
				<li><a href="#" data-original-title="Twitter" class="social_twitter rounded-x"></a></li>
				<li><a href="#" data-original-title="Goole Plus" class="social_googleplus rounded-x"></a></li>
				<li><a href="#" data-original-title="Linkedin" class="social_linkedin rounded-x"></a></li>
			</ul>
			<span class="page-scroll"><a href="#intro"><i class="fa fa-angle-double-up back-to-top"></i></a></span>
		</div> 

	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/jquery.easing.min.js"></script>
	<script src="assets/plugins/pace/pace.min.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/counter/waypoints.min.js"></script>
	<script src="assets/plugins/counter/jquery.counterup.min.js"></script>
	<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<!-- JS Page Level-->
	<script src="assets/js/one.app.js"></script>
	<script src="assets/js/forms/login.js"></script>
	<script src="assets/js/forms/contact.js"></script>
	<script src="assets/js/plugins/pace-loader.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>
	<script src="assets/js/plugins/revolution-slider.js"></script>
	<script src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initParallaxBg();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			RevolutionSlider.initRSfullScreen();
		});
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
		<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
		<![endif]-->

	<!--[if lt IE 10]>
		<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
		<![endif]-->
	</body>
	</html>
