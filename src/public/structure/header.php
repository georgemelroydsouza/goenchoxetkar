<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="Rice Transplanter, rice seedlings, paddy field, Goa farming, Goan farmers, Rotary Tilling, Mechanised seeding of paddy in trays, Walk behind transplanter for smaller and difficult fields, Ride-on Rice transplanter for large fields, Weed control measures, Nursery management, Field preparation, farm production, farmer, farm management, farm technology, modern farming, soil sensor, crop production, pest management, soil management, precision farming, real-time sensor"/>
  <meta name="description" content="Working with local Goan farmers to introduce mordern technology farming"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <!-- Title -->
  <title>Goencho Xetkar - Farm Services | <?=$pageSubTitle?></title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css?x=<?=time()?>">
  <?php
  if ($menuActive=='gallery') {
	?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<link rel="stylesheet" href="gallery.css" media="screen">
	<?php
  }
  ?>
</head>

<body>
  <!-- Preloader -->
  <!-- div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </-->

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@goenchoxetkar.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: info@goenchoxetkar.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+91 30882782"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +91 9130882782 / +91 9850482858</span></a>&nbsp;&nbsp;&nbsp;
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="/home.php" ><img class="site-logo" src="img/core-img/goencho_xetkar_logo.png" alt="Goencho Xetkar"></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <!-- li <?=($menuActive=='home') ? 'class="active"' : ''?>><a href="/home.php">Home</a></!-->
                  <li <?=($menuActive=='about') ? 'class="active"' : ''?>><a href="/about.php">About</a></li>
				  <li <?=($menuActive=='news') ? 'class="active"' : ''?>><a href="/news.php">News</a></li>
                  <li <?=($menuActive=='technology') ? 'class="active"' : ''?>><a href="/technology.php">Technology</a></li>
				  <li <?=($menuActive=='farming_queries') ? 'class="active"' : ''?>><a href="https://docs.google.com/forms/d/e/1FAIpQLSckWLYXQFUEa1r0iZOZKsT0T19yMPW0smGBnuts71Lqb5x_TA/viewform" target="_blank">Bookings</a></li>
				  <li <?=($menuActive=='gallery') ? 'class="active"' : ''?>><a href="/gallery.php">Gallery</a></li>
                  <li <?=($menuActive=='contact') ? 'class="active"' : ''?>><a href="/contact.php">Contact</a></li>
                </ul>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->
