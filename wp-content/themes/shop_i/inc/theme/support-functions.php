<?php 

	// remove WP version from scripts
	function remove_wp_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	
	// A better title
	// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
	function rw_title( $title, $sep, $seplocation ) {
	  global $page, $paged;

	  // Don't affect in feeds.
	  if ( is_feed() ) return $title;

	  // Add the blog's name
	  if ( 'right' == $seplocation ) {
		$title .= get_bloginfo( 'name' );
	  } else {
		$title = get_bloginfo( 'name' ) . $title;
	  }

	  // Add the blog description for the home/front page.
	  $site_description = get_bloginfo( 'description', 'display' );

	  if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " {$sep} {$site_description}";
	  }

	  // Add a page number if necessary:
	  if ( $paged >= 2 || $page >= 2 ) {
		$title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
	  }

	  return $title;

	} // end better title
	
	// remove WP version from RSS
	function rss_version() { return ''; }
	
	// remove injected CSS for recent comments widget
	function remove_wp_widget_recent_comments_style() {
		if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
			remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
		}
	}
	
	// remove injected CSS from recent comments widget
	function remove_recent_comments_style() {
		global $wp_widget_factory;
		if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
			remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
		}
	}
	
	// remove injected CSS from gallery
	function gallery_style($css) {
		return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
	}
	
	/*********************
	RANDOM CLEANUP ITEMS
	*********************/

	// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
	function filter_ptags_on_images($content){
		return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
