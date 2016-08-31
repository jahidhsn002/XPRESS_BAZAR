<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="240">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="header">
		<div class="headcer_top">
			<div class="container">
					<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'a_link_01', home_url().'/?p=152' ); ?>">
						<span class="glyphicon glyphicon-earphone"></span> 
						+8801740588988
					</a>
					<a class="pull-left" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'a_link_02', home_url().'/?p=148' ); ?>">
						<img style="height:16px;position:relative;margin-top:-5px;" src="<?php echo get_template_directory_uri(); ?>/images/truck.png">
						Delivery Info
					</a>
					<a class="pull-right" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'a_link_03', home_url().'/?p=150' ); ?>">
						<span class="glyphicon glyphicon-shopping-cart"></span> 
						How To Order
					</a>
					<?php if ( is_user_logged_in() ) { ?>
						<?php echo '<a class="pull-right button" href="'. wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) ). '" ><span class="glyphicon glyphicon-log-out"></span> Log Out</a>'; ?>
						<a class="pull-right" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account'); ?>"><span class="glyphicon glyphicon-user"></span> <?php _e('My Account'); ?></a>
					<?php } else { ?>
						<a class="pull-right" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login'); ?>"><span class="glyphicon glyphicon-log-in"></span> <?php _e('Login'); ?></a>
						<a class="pull-right" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Register'); ?>"><span class="glyphicon glyphicon-user"></span> <?php _e('Register'); ?></a>
					<?php } ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php 
				$logo_link = bellaAdminPageFramework::getOption( 'Theme_Option', 'logo','' ); 
				if( !$logo_link || $logo_link == '' ){
					$logo_link = get_template_directory_uri()."/images/logo.png";
				}
				?>
				<figure class="col-xs-12 col-sm-6 col-md-3 header_logo text-left">
					<a href="<?php echo home_url(); ?>">
						<img class="logo" src="<?php echo $logo_link; ?>" alt="Logo">
					</a>
				</figure>
				<div class="col-xs-12 col-sm-6 col-md-3 text-right header_support">
					<p></p>
					<?php get_search_form(); ?>
					<p></p>
					<?php do_action('header'); ?>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center header_call">
					<a class="btn btn-info" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'a_link_04', home_url().'/?p=150' ); ?>" >
					<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'supp_01','Call To Order</br>+8801740588988' ); ?>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center header_consern">
					<a class="btn btn-info" href="<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'a_link_05', home_url().'/?p=179' ); ?>" >
					<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'supp_02','Visit</br>Our Concern' ); ?>
					</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<nav id="nav">
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php 
					$args = array('theme_location' => 'primary', 
						'container_class' => 'navbar-collapse collapse', 
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => '',
						'menu_id' => 'main-menu',
						'walker' => new wp_Walker_Nav_Menu()); 
					wp_nav_menu($args);
				?>
			</div>
		</div>
	</nav>