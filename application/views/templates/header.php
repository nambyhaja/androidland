<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $titre; ?></title>
    </head>
    <body class="stretched">
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        <!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url() ?>assets/images/logo-dark.png"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="AndroidLand logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url() ?>assets/images/logo-dark@2x.png"><img src="<?php echo base_url() ?>assets/images/logo@2x.png" alt="AndroidLand logo"></a>
                        <h1 class="hidden">AndroidLand</h1>
					</div><!-- #logo end -->
                    
                    <!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
                        <ul>
                            <li class="current"><a href="#"><div>Accueil</div></a></li>
                            <li><a href="#"><div>Univers</div></a>
                                <ul>
                                    <li><a href="#"><div>Ouest sauvage américain</div></a></li>
                                    <li><a href="#"><div>Egypte ancienne</div></a></li>
                                    <li><a href="#"><div>Monde des dinosaures</div></a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Rechercher...">
							</form>
						</div><!-- #top-search end -->
                    </nav>
                </div>
            </div>
        </header>
    
    