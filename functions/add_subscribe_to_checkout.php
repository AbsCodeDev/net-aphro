<?php  

/**
 * Update the user meta with field value
 **/
add_action('woocommerce_checkout_update_user_meta', 'my_custom_checkout_field_update_user_meta');
 
function my_custom_checkout_field_update_user_meta( $user_id ) {
	if ($user_id && $_POST['subscribeUpdates']) update_user_meta( $user_id, 'subscribeUpdates', esc_attr($_POST['subscribeUpdates']) );
}
 
/**
 * Update the order meta with field value
 **/

	add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');
 
	function my_custom_checkout_field_update_order_meta( $order_id ) {

		if ($_POST['subscribeUpdates']) update_post_meta( $order_id, 'Subscribed for Product Updates', esc_attr($_POST['subscribeUpdates']));

	}
 
/**
 * Add the field to order emails
 **/

add_filter('woocommerce_email_order_meta_keys', 'my_custom_checkout_field_order_meta_keys');
 
function my_custom_checkout_field_order_meta_keys( $keys ) {

	$keys[] = 'Subscribed for Product Updates';

	return $keys;
}


/**
* Add the field to the checkout
**/
add_action('woocommerce_after_checkout_billing_form', 'my_custom_checkout_field');

function my_custom_checkout_field( $checkout ) {

	echo '<div id="subscribe"><h2>'.__('Product Updates').'</h2>';
	$checked = $checkout->get_value( 'my_checkbox1' ) ? $checkout->get_value( 'my_checkbox1' ) : 1;

	woocommerce_form_field( 'subscribeUpdates', array(
	'type'          => 'checkbox',
	'class'         => array('checkout_subscribe form-row-wide'),
	'default' => 1,
	'label'         => __('I wish to receive regular product updates from Aphrodite'."'s Pleasure"),
	), $checkout->get_value( 'subscribeUpdates' ));

	echo '</div>';

}
?>
