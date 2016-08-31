<?php
	
	/*********************
	SCRIPTS & ENQUEUEING
	*********************/

	// loading modernizr and jquery, and reply script

	function scripts_and_styles(){
	
		global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
		
		if (!is_admin()) {
		
			/* Style Set-Up	*/
			if( $GLOBALS['css'] != '' ){
				function twentythirteen_wp_styles() {
					$css=$GLOBALS['css'];
					foreach($css as $y=>$y_link) {wp_enqueue_style( $y, get_template_directory_uri().'/css/'.$y_link, array(), null );}
				}
				add_action( 'wp_enqueue_scripts', 'twentythirteen_wp_styles' );
			}
			
			/* Script Set-Up	*/
			function twentythirteen_wp_scripts() {
				if( $GLOBALS['js'] != '' ){
					$js=$GLOBALS['js'];
					foreach($js as $x=>$x_link) {
						echo "<script type='text/javascript' src='".get_template_directory_uri().'/js/'.$x_link."'></script>";
					}
				}
			}
			add_action( 'theme_footer', 'twentythirteen_wp_scripts' );
			
			// comment reply script for threaded comments
			if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
				  wp_enqueue_script( 'comment-reply' );
			}

			// ie-only style sheet
			wp_register_style( 'bella-ie-only', get_stylesheet_directory_uri() . '/css/ie.css', array(), '' );
			wp_enqueue_style( 'bella-ie-only' );
			$wp_styles->add_data( 'bella-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet
			
		}
		
	}
	
	/*********************
	CUSTOM LOGIN PAGE
	*********************/

	// calling your own login css so you can style it

	function bella_login_css() {
		wp_enqueue_style( 'bella_login_css', get_template_directory_uri() . '/css/login.css', false );
	}

	// changing the logo link from wordpress.org to your site
	function login_url() {  return home_url(); }

	// changing the alt text on the logo to show your site name
	function login_title() { return get_option( 'blogname' ); }

	// calling it only on the login page
	add_action( 'login_enqueue_scripts', 'bella_login_css', 10 );
	add_filter( 'login_headerurl', 'login_url' );
	add_filter( 'login_headertitle', 'login_title' );
		