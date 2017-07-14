<?php function add_html_below_add_to_cart() { 

  $additional_message= get_field('additional_message');
  if($additional_message){ echo "<div class='additional_message'>".$additional_message."</div>"; } 

  echo '<ul class = "content_list product_features"> 
    <li>Discreet Shipping & Billing</li> 
    <li>Free Shipping over $50</li> </ul>';
} 
add_action('woocommerce_single_product_summary','add_html_below_add_to_cart', 35);
?>
