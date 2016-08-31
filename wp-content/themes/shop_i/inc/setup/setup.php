<?php

/****************************************************************************************
================================	Theme Set Up	=====================================
*****************************************************************************************/

function theme_setup() {
	
	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'primary' 	=> __( 'Navigation Menu' ),  
			'secondary' 	=> __( 'Footer Site-map' )
		)
	);
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu' ) );

	// This theme uses custom image size for featured.
	add_theme_support( 'post-thumbnails' );
	
	// This feature enables WooCommerce support for a theme.
	add_theme_support( 'woocommerce' );
	
}
add_action( 'after_setup_theme', 'theme_setup' );

/****************************************************************************************
============================	Set Up Styles & Script	=================================
*****************************************************************************************/

function shop_i_head_02() {
	define( 'STYLE_DIRECTORY', get_template_directory_uri().'/css', true );
	define( 'SCRIPT_DIRECTORY', get_template_directory_uri().'/js', true );
	?>
	
	<link rel="stylesheet" href="<?php echo STYLE_DIRECTORY; ?>/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo STYLE_DIRECTORY; ?>/style.css" type="text/css">
	
	<?php
}
add_action( 'wp_head', 'shop_i_head_02', 10000 );

function shop_i_head_01() {
	?>
	
	<script src="<?php echo SCRIPT_DIRECTORY; ?>/bootstrap.min.js"></script>
	
	<?php
}
add_action( 'wp_footer', 'shop_i_head_01', 10000 );



/****************************************************************************************
================================	Theme Widget	=====================================
*****************************************************************************************/

function theme_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Main Sidebar Area' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4 class="h5 widgettitle">',
		'after_title' => '</h4><div class="content">',
	) );
	register_sidebar( array(
		'name'          => __( 'My Account' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.' ),
		'before_widget' => '<div id="%1$s" class="clearfix footer_widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4 class="h4 widgettitle">',
		'after_title' => '</h4><div class="content text-center">',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Subscription' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the footer section of the site.' ),
		'before_widget' => '<div id="%1$s" class="clearfix footer_widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4 class="h4 widgettitle">',
		'after_title' => '</h4><div class="content text-center">',
	) );

}
add_action( 'widgets_init', 'theme_widgets_init' );