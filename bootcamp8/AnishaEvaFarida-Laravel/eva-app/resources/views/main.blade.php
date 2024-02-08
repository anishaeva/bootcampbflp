<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Contact Management</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Html5 Agency Template v1.0">

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>

	<!-- Header Start -->
	<div id="navbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg px-0 py-4">
						<a class="navbar-brand" href="#">
							Contact<span> Management</span>
						</a>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</header>
	<!-- Header Close -->


			<div class="container-fluid">
				@yield('container')
			</div>


	<!-- End of Content Wrapper -->

	<!-- Footer Start -->
	<footer class="footer section">
		<div class="container">
			<div class="footer-btm pt-4">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							Copyright &copy; 2024, Designed &amp; Developed by <a>Eva
								with Themefisher</a>
						</div>
					</div>
					<div class="col-lg-6 text-left text-lg-right">
						<ul class="list-inline footer-socials">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f mr-2"></i>Facebook</a>
							</li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
							<li class="list-inline-item"><a href="#"><i
										class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->




				<!-- 
Essential Scripts
=====================================-->
				<!-- Main jQuery -->
				<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
				<!-- Bootstrap 4.3.1 -->
				<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
				<!--  Magnific Popup-->
				<script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
				<!-- Slick Slider -->
				<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
				<!-- Counterup -->
				<script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
				<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

				<!-- Google Map
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
				<script plugins/google-map/map.jssrc="" defer></script> -->

				<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>