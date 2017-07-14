<?php  

	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

	function price_in_title_row() {

	if ( ! defined( 'ABSPATH' ) ) {
	      exit; // Exit if accessed directly
	}
	global $product;
	?>

	<div class="price_in_title_row" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		<h3><?php echo $product->get_price_html(); ?></h3>
		<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
		<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
		<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
	</div>

	<?php echo '</div></section>'; //close title price section

	}

	add_action('woocommerce_before_single_product', 'price_in_title_row', 50);

?>
