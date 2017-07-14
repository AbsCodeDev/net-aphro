<?php //pagination at the top out of main product list container ?>
<?php remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20); ?>
<?php add_action( 'woocommerce_archive_description', 'woocommerce_pagination', 40 ); ?>
<?php add_action( 'woocommerce_archive_description', 'woocommerce_result_count', 45 ); ?>
<?php //pagination at the bottom out of main product list container ?>
<?php remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10); ?>
<?php add_action( 'woocommerce_after_main_content', 'woocommerce_pagination', 5 ); ?>
