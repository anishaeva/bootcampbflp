<?php
require("db.php");
require("functions.php");

if (isset($_POST["submit-content"])) {
	if (addData($_POST) > 0) {
		echo "
        <script>
		alert('Blog successfully added');
		document.location.href = 'index.php';
        </script>
		";
	}  else {
		echo "
			<script>
			  alert('Failed to add the blog');
			  document.location.href = 'index.php';
			</script>
		  ";
	}
}
?>

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
	<title>ReputaCorp | Blog</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Html5 Agency Template v1.0">

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

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
							Reputa<span>Corp</span>
						</a>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</header>
	<!-- Header Close -->

	<section class="section blog-wrap bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">

						<div class="col-lg-12">
							<form class="contact-form bg-white rounded p-5" id="comment-form" action="" method="POST" enctype="multipart/form-data">
								<h4 class="mb-4">New Blog</h4>
								<div class="form-group">
									<input class="form-control" type="file" name="image" id="image" placeholder="image">
								</div>
								<div class="form-group">

									<input class="form-control" type="text" name="title" id="title" placeholder="title" required>
								</div>
								<textarea class="form-control mb-3" name="content" id="content" cols="30" rows="5" placeholder="content" required></textarea>
								<button class="btn btn-outline-primary btn-round-full" type="submit" name="submit-content" id="submit_content">Publish Blog</button>
							</form>
						</div>
					</div>
				</div>

				<!-- !-Scroll to top -->
				<div id="scroll-to-top" class="scroll-to-top">
					<span class="icon fa fa-angle-up"></span>
				</div>


				<!-- 
Essential Scripts
=====================================-->
				<!-- Main jQuery -->
				<script src="plugins/jquery/jquery.min.js"></script>
				<!-- Bootstrap 4.3.1 -->
				<script src="plugins/bootstrap/bootstrap.min.js"></script>
				<!--  Magnific Popup-->
				<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
				<!-- Slick Slider -->
				<script src="plugins/slick/slick.min.js"></script>
				<!-- Counterup -->
				<script src="plugins/counterup/jquery.waypoints.min.js"></script>
				<script src="plugins/counterup/jquery.counterup.min.js"></script>

				<!-- Google Map
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
				<script src="plugins/google-map/map.js" defer></script> -->

				<script src="js/script.js"></script>

</body>

</html>