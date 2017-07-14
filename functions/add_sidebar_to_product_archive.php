<?php  add_action( 'ml_add_sidebar_filter_hook', 'add_sidebar_to_product_archive', 5 );
function add_sidebar_to_product_archive() { 
  //select the sidebar from custom field within wp addmin
  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;  
  $product_sidebar= get_field('sidebar', $taxonomy . '_' . $term_id);

if( $product_sidebar): ?>
  <section class = "filters">
	<?php foreach( $product_sidebar as $ps ): ?>

		<?php dynamic_sidebar( $ps ); ?>

	<?php endforeach; ?>
  </section>

  <?php elseif(is_search()): ?>
  <section class = "filters">
    <?php dynamic_sidebar('product_default_sidebar'); ?>
  </section>
  <?php elseif(is_cart()): 

  //do nothing

  else: ?>
  <section class = "filters">
    <?php dynamic_sidebar('product_default_sidebar'); ?>
  </section>
<?php endif; } ?>
<?php  function ml_open_shop_wrapper() { 

  if (!is_cart()) {
    echo '<section class = "ml_products"><div class="container">';
    do_action('ml_add_sidebar_filter_hook'); 
  }
}

function ml_close_shop_wrapper() { 
  if (!is_cart()) {
    echo '</div></section><!--close wrap-->';
  }
}

add_action('woocommerce_before_shop_loop', 'ml_open_shop_wrapper', 40);
add_action('woocommerce_after_shop_loop', 'ml_close_shop_wrapper', 40);

?>
