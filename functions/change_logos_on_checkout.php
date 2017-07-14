<?php 
//paypal
function paypal_checkout_icon() {
return 'http://aphroditespleasure.com.au/wp-content/themes/ap1/assets/svg/ecom_logos.svg'; 
}
add_filter( 'woocommerce_paypal_icon', 'paypal_checkout_icon' );

//payflow pro
add_filter( 'woocommerce_paypal_pro_payflow_icon', 'custom_woocommerce_paypal_pro_icon' );

function custom_woocommerce_paypal_pro_icon() {
return 'http://aphroditespleasure.com.au/wp-content/themes/ap1/assets/svg/ecom_logos.svg'; 
}
?>
