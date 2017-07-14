<?php function add_html_product_archive_after_product_loop() {

  $features= 'includes/features';
  get_template_part($features); 

  $connect= 'includes/connect';
  get_template_part($connect); 

}

add_action( 'woocommerce_after_main_content', 'add_html_product_archive_after_product_loop', 10 );

?>
