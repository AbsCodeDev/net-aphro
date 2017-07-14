<?php function ml_section_wrappers() {

  	
    echo '<section class = "main_single_prod"> <div class="boxed_content">';




} ?>
<?php add_action('woocommerce_before_single_product', 'ml_section_wrappers', 0); ?>
