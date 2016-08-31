<?php

/* upbootwp_breadcrumbs function */

function woo_breadcrumbs() {

	$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '&nbsp;&#47;&nbsp;',
			'wrap_before' => '<nav class="breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();

		if ( $args['home'] ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}

		$args['breadcrumb'] = $breadcrumbs->generate();

		wc_get_template( 'global/breadcrumb.php', $args );
}

/* Theme Cart */

function header_cart() {
	?>
	<div class="col-xs-12 text-right">
		<span class="site_cart count">
			<a data-toggle="collapse" href="#cart" class="btn btn-xs" aria-expanded="true">
				<img src="<?php echo get_template_directory_uri(); ?>/images/cart.png">				
			</a>			<?php 				echo wp_kses_data( 					sprintf(						_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ),						WC()->cart->get_cart_contents_count() 					)				);			?>
			<?php echo wp_kses_data( WC()->cart->get_cart_total() ); ?>
		</span>
		<div id="cart" class="panel-collapse collapse" aria-expanded="true">
			<div class="panel-body">
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</div>
		</div>
	</div>
	<?php
}

/* content Product */

function woo_product(){					
					if ( ! defined( 'ABSPATH' ) ) {
						exit; // Exit if accessed directly
					}

					global $product, $woocommerce_loop;

					// Store loop count we're currently on
					if ( empty( $woocommerce_loop['loop'] ) )
						$woocommerce_loop['loop'] = 0;

					// Store column count for displaying the grid
					if ( empty( $woocommerce_loop['columns'] ) )
						$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

					// Ensure visibility
					if ( ! $product || ! $product->is_visible() )
						return;

					// Increase loop count
					$woocommerce_loop['loop']++;

					// Extra post classes
					$classes = array();
					if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
						$classes[] = 'first';
					if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
						$classes[] = 'last';
					?>
					<div class="col-xs-4">
						<article class="site_item">
						<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

						<a href="<?php the_permalink(); ?>">

							<?php
								/**
								 * woocommerce_before_shop_loop_item_title hook
								 *
								 * @hooked woocommerce_show_product_loop_sale_flash - 10
								 * @hooked woocommerce_template_loop_product_thumbnail - 10
								 */
								do_action( 'woocommerce_before_shop_loop_item_title' );
							?>

							<h3><?php the_title(); ?></h3>

							<?php
								/**
								 * woocommerce_after_shop_loop_item_title hook
								 *
								 * @hooked woocommerce_template_loop_rating - 5
								 * @hooked woocommerce_template_loop_price - 10
								 */
								do_action( 'woocommerce_after_shop_loop_item_title' );
							?>

						</a>

						<?php

							/**
							 * woocommerce_after_shop_loop_item hook
							 *
							 * @hooked woocommerce_template_loop_add_to_cart - 10
							 */
							do_action( 'woocommerce_after_shop_loop_item' ); 

						?>

					</article>
					</div>
<?php
}



function woo_single_product(){	

	?>

	<?php
		/**
		 * woocommerce_before_single_product hook
		 *
		 * @hooked wc_print_notices - 10
		 */
		 do_action( 'woocommerce_before_single_product' );

		 if ( post_password_required() ) {
			echo get_the_password_form();
			return;
		 }
	?>

	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
			/**
			 * woocommerce_before_single_product_summary hook
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="summary entry-summary">

			<?php
				/**
				 * woocommerce_single_product_summary hook
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>

		</div><!-- .summary -->

		<?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
		<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->

	<?php do_action( 'woocommerce_after_single_product' ); 

}

