<?php function add_html_before_single_product() {
  echo '<section class = "title_price"><div class = "row">';
} 
add_action('woocommerce_before_single_product', 'add_html_before_single_product', 5);
?>
