<?php 
function ml_change_empty_cart_button_url() {
	//redirect to homepage
	return get_site_url();
}
add_filter( 'woocommerce_return_to_shop_redirect', 'ml_change_empty_cart_button_url' );
?>
