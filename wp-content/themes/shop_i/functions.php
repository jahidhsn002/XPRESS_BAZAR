<?php

require(get_template_directory().'/inc/setup/setup.php');
require(get_template_directory().'/inc/setup/theme-functions.php');

require(get_template_directory().'/inc/structure/template.php');


require(get_template_directory().'/inc/theme/class-wp_Walker_Nav_Menu.php');
require( get_template_directory().'/inc/library/admin-page-framework.php');
if ( ! class_exists( 'bellaAdminPageFramework' ) ) { return;}



if ( is_admin() ) {

	// Theme Options
	require( get_template_directory().'/inc/dash/option.php' );
	new Theme_Option;
	
}