<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>

<div class="my_cc_account">
	
	<?php do_action( 'woocommerce_before_my_account' ); ?>
	<div class="row">
		<div class="col-sm-6">
			<h4>Welcome <?php printf( $current_user->display_name ); ?></h4>
			<h5>
				<?php 
				printf(
					__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
					$current_user->display_name,
					wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
				);
				?>
			</h5>
			<?php echo 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details';?>
			<div>
				<?php echo '<a class="button" href="'. wc_customer_edit_account_url(). '" >Edit Your Account Details</a>'; ?>
			</div>
		</div>
		<div class="col-sm-6 widzert">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
	</div>
	<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

	<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

	<?php wc_get_template( 'myaccount/my-address.php' ); ?>

	<?php do_action( 'woocommerce_after_my_account' ); ?>

</div>