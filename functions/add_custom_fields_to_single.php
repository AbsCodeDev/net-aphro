<?php add_action('woocommerce_single_product_summary', 'product_single_summary', 1);
function product_single_summary() {
  global $wp_query;
  global $post;
  $postid = $wp_query->post->ID;
  $brand = get_post_meta($postid, 'Product_Brand', true);
  $excerpt = get_the_excerpt( $post );
  $colors = get_post_meta($postid, 'Product_Colors', true); ?>
  <div class="brand_info">
      <h2><?php echo $excerpt;  ?> </h2> 
      <?php if($brand){ echo "<div class = 'brand'><dt>Brand </dt> <dd itemprop = 'brand'>".$brand."</dd></div>"; } 
	//if($colors) { echo "<br />Colors: <span itemprop = 'color'>".$colors."</span>"; }
	// what is acf_colors? } else { echo ' <span itemprop = "color">Colors:</span> ' .  $acf_colours = get_field('acf_colors'); } 
  ?>
  </div>
  <?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?>
<?php } ?>
