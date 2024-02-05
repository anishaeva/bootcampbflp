<?php
  require("db.php");
  require("functions.php");

  $query = "SELECT * FROM blog_posts";

  $blogs = getData($query);
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
            <span class="text-white">Our blog</span>
            <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">Our blog</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog-wrap bg-gray">
    <div class="container">
      <div class="row">
        <?php
        foreach ($blogs as $blog) {
        ?>
        <div class="col-lg-6 col-md-6 mb-5">
          <div class="blog-item">
            <img loading="lazy" src="<?php echo $blog["image"] ?>" alt="blog" class="img-fluid rounded">
            <span><a type="button" class="btn btn-outline-danger btn-sm float-right px-2 py-1" href="blog-delete.php?id=<?php echo $blog["id"] ?>" onclick="return confirm('Delete it?')">Delete</a></span>
            <div class="blog-item-content bg-white p-5">
              <h3 class="mt-3 mb-3"><a href="blog-single.php?id=<?php echo $blog["id"] ?>"><?php echo $blog["title"] ?></a></h3>
              <p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
                pariatur repudiandae!</p>

              <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>

  <!--Scroll to top-->
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>

  <script src="js/script.js"></script>

</body>

</html>