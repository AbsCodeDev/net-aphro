<?php 

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_after_shop_loop_item_title', 'ml_add_rating', 5);

function ml_add_rating() {
       if (function_exists('wp_review_show_total')) wp_review_show_total();
}

?>
