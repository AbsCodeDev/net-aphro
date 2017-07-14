<?php 
function remove_loop_button(){
  remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');




add_action('woocommerce_after_shop_loop_item','replace_add_to_cart', 10);

function replace_add_to_cart() {
  global $product;
  $link = $product->get_permalink();
    echo do_shortcode('<div class = "row"><a class = "cta_btn" href="'.$link.'" class="button addtocartbutton">View Product</a></div>');
}
?>
