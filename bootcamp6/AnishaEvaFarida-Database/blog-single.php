<?php
  require("db.php");
  require("functions.php");

  $blog_id = $_GET["id"]; 

  $query = "SELECT * FROM blog_posts WHERE id = $blog_id";

  $blog = getData($query)[0];
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

						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
							data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="fa fa-bars"></span>
						</button>

						<div class="collapse navbar-collapse text-center" id="navbarsExample09">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item @@project active"><a class="nav-link" href="index.php">Blog</a>
								</li>
								<li class="nav-item @@project"><a class="nav-link" href="blog-new.php">Add Blog</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</header>
	<!-- Header Close -->

	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">News details</span>
						<h1 class="text-capitalize mb-4 text-lg">Blog Details</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section blog-wrap bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12 mb-5">
							<div class="single-blog-item">
								<img loading="lazy" src="<?php echo $blog["image"] ?>" alt="blog" class="img-fluid rounded">

								<div class="blog-item-content bg-white p-5">
									<h2 class="mt-3 mb-4"><?php echo $blog["title"] ?></h2>
									<p class="lead mb-4"><?php echo $blog["body"] ?></p>
								</div>
							</div>
						</div>

						<div class="col-lg-12 mb-5">
							<div class="comment-area card border-0 p-5">
								<h4 class="mb-4">Comments</h4>
								<ul class="comment-tree list-unstyled">
									<li class="mb-5">
										<div class="comment-area-box">
											<h5 class="mb-1">Philip W</h5>
											<span>United Kingdom</span>
											<div class="comment-content mt-3">
												<p>Some consultants are employed indirectly by the client via a
													consultancy staffing company, a
													company that provides consultants on an agency basis. </p>
											</div>
										</div>
									</li>

									<li>
										<div class="comment-area-box">
											<h5 class="mb-1">Philip W</h5>
											<span>United Kingdom</span>

											<div class="comment-content mt-3">
												<p>Some consultants are employed indirectly by the client via a
													consultancy staffing company, a
													company that provides consultants on an agency basis. </p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-12">
							<form class="contact-form bg-white rounded p-5" id="comment-form">
								<h4 class="mb-4">Write a comment</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" name="name" id="name"
												placeholder="Name:">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text" name="mail" id="mail"
												placeholder="Email:">
										</div>
									</div>
								</div>


								<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
									placeholder="Comment"></textarea>

								<input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
									id="submit_contact" value="Submit Message">
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

				<!-- Google Map -->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"
					defer></script>
				<script src="plugins/google-map/map.js" defer></script>

				<script src="js/script.js"></script>

</body>

</html>