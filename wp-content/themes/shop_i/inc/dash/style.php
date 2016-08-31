<?php

add_action('wp_head','theme_style');

function theme_style(){
	?>
	<style>
		#page {background-color: <?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'site_background','#3dc7ba' ); ?>;}
		
		#header {background-color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'header_background','#ffffff' ); ?>;}
		#header .f01 {color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'header_text_01','#337ab7' ); ?>;}
		#header .f02 {color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'header_text_02','#cd2b27' ); ?>;}
	
		#nav .navbar-default, #nav .navbar-default li.open ul, #nav .navbar-default li:hover ul, #nav .navbar-default li:hover ul li a, #nav .navbar-default li.open ul a{background-color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'nav_background','#4ccfc1' ); ?>;}
		#nav .navbar-default a{color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'nav_color','#ffffff' ); ?>;}
		#nav .navbar-default li:hover a, #nav .navbar-default li.active a, #nav .navbar-default li.open a, #nav .navbar-default li:hover ul li:hover a{background-color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'nav_hover_background','#38c1b2' ); ?>;}
		
		#footer {background-color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'footer_bg','#E5DEE5' ); ?>;color:<?php echo bellaAdminPageFramework::getOption( 'Theme_Option', 'footer_text','#444444' ); ?>;}
		


	</style>
	<?php
}