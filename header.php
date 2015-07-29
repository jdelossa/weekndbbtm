<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<meta name=”robots” content=”noindex, nofollow” />
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/favicon.ico" />
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/bower_components/font-awesome/css/font-awesome.min.css"/>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

            <div class="header-fixed-top">
                <div class="container">
                    <a href="http://theweeknd.co/BeautyBehindTheMadness" target="_blank"><p class="small">Pre-order Now</p></a>
                    <div class="pull-right">
                        <a href="https://twitter.com/theweeknd/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/abelxo" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="http://theweeknd.com" target="_blank">
                        <span class="xo"></span>
                    </a>
                </div>
            </div>

			<div class="navbar navbar-static-top">
				<div class="container">

					<div class="navbar-header">
                       <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>"
                       href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/tw.png" alt="The Weeknd Beauty Behind The Madness"/></a>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->

		</header> <!-- end header -->

		<div class="container">