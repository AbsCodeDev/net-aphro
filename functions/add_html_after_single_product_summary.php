<?php function add_html_after_single_product_summary() {
  echo '</div><!--boxed_content--></section><!--main_single_prod section--> ';
}

function add_html_after_upsells() {
  echo '</div><!--boxed_content--></section><!--upsells section--> ';
}

add_action('woocommerce_after_single_product_summary', 'add_html_after_single_product_summary', 5);
add_action('woocommerce_after_single_product_summary', 'add_html_after_upsells', 50);

?>
