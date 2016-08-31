<?php
// Main Template
get_header(); ?>
<div class="container">
	<div class="row">
	<div id="theme_slider" class="text-center col-xs-12">
		<?php echo do_shortcode("[metaslider id=129]"); ?>
	</div>
	<main id="main" class=" col-xs-12 col-md-9 home pull-right">
		<div class="text-center home_slider">
		<?php 
			$args = apply_filters( 'storefront_recent_products_args', array(
				'limit' 			=> 6,
				'columns' 			=> 6,
				'title'				=> __( bellaAdminPageFramework::getOption( 'Theme_Option', 'fav_title','Favourite Products' ) ),
				) );

			echo '<section class="storefront-product-section storefront-recent-products">';

			echo '<h2 style="margin-top:0px;" class="h5 text-left home title">' . esc_attr( $args['title'] ) . '</h2>';
			
			echo'<div class="page">';
			
			echo'<p></p>';
			
			echo '<div class="left_button" onclick="left_button_slide()"><img src="'.get_template_directory_uri().'/images/slider/right.png"></div>';
			
			echo '<div class="right_button" onclick="right_button_slide()"><img src="'.get_template_directory_uri().'/images/slider/left.png"></div>';
			
			
			echo do_shortcode( '[product_category category='.bellaAdminPageFramework::getOption( 'Theme_Option', 'fav_cat','hoodies' ).' per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );
			
			echo '</div>';
			
			echo '</section>';
		?>
		</div>
	<script>
		
		var slide_count = '-600px';
		
		function left_button_slide(){
			if(jQuery("#main .home_slider ul.products").css('margin-left') == slide_count){
				jQuery("#main .home_slider ul.products").animate({'margin-left':'0px'});
			}else{
				jQuery("#main .home_slider ul.products").animate({'margin-left':'-=200px'});
			}
		};
		function right_button_slide(){
			if(jQuery("#main .home_slider ul.products").css('margin-left') == '0px'){
				jQuery("#main .home_slider ul.products").animate({'margin-left': slide_count});
			}else{
				jQuery("#main .home_slider ul.products").animate({'margin-left':'+=200px'});
			}
		};
	</script>
		<div class="text-center home_not_slider">
		<?php 
			$args = apply_filters( 'storefront_on_sale_products_args', array(
				'limit' 			=> 6,
				'columns' 			=> 6,
				'title'				=> __( bellaAdminPageFramework::getOption( 'Theme_Option', 'ons_title','On Sale' ) ),
				) );

			echo '<section class="storefront-product-section home_cc storefront-on-sale-products">';

			echo '<h2 class="h5 text-left home title">' . esc_attr( $args['title'] ) . '</h2>';
			
			echo'<div class="page">';
			
			echo'<p></p>';
			
			echo do_shortcode( '[product_category category='.bellaAdminPageFramework::getOption( 'Theme_Option', 'ons_cat','hoodies' ).' per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );

			echo '</div>';
			
			echo '</section>';
		?>
		</div>
		<div class="text-center home_not_slider">
		<?php 
			$args = apply_filters( 'storefront_on_sale_products_args', array(
				'limit' 			=> 6,
				'columns' 			=> 6,
				'title'				=> __( bellaAdminPageFramework::getOption( 'Theme_Option', 'ons2_title','On Sale' ) ),
				) );

			echo '<section class="storefront-product-section home_cc storefront-on-sale-products">';

			echo '<h2 class="h5 text-left home title">' . esc_attr( $args['title'] ) . '</h2>';
			
			echo'<div class="page">';
			
			echo'<p></p>';
			
			echo do_shortcode( '[product_category category='.bellaAdminPageFramework::getOption( 'Theme_Option', 'ons2_cat','hoodies' ).' per_page="' . intval( $args['limit'] ) . '" columns="' . intval( $args['columns'] ) . '"]' );

			echo '</div>';
			
			echo '</section>';
		?>
		</div>
	</main>
	<aside id="sidebar" class="col-xs-12 col-md-3">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
