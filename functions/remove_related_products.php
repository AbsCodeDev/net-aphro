<?php
//Remove related products details from single product detail page
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
?>
