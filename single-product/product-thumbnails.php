	<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

?>


<div class="product-slider">
	<div class="main-slider">
		<div class="custom-navigation-main main-nav">
			<a href="#" class="flex-prev"></a>
		</div>
		<div id="slider" class="flexslider">
			<ul class="slides">
				<!-- First image -->
		    	<li> <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'large'); ?>" /> </li>

				<!-- Other images -->
				<?php foreach ($attachment_ids as $image) { ?>
				<li>
					<img src="<?php echo wp_get_attachment_image_url($image, 'large'); ?>" />
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="custom-navigation-main main-nav">
			<a href="#" class="flex-next"></a>
		</div>
	</div>
	<div class="browser-carousel" >
		<div class="custom-navigation">
			<a href="#" class="flex-prev"></a>
		</div>
		<div id="carousel" class="flexslider">
			<ul class="slides"> <!-- First image --> <li>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'tiny_square_thumb'); ?>" />
				</li>
				<!-- Other images -->
				<?php foreach ($attachment_ids as $image) { ?>
				<li>
					<img src="<?php echo wp_get_attachment_url($image, 'tiny_square_thumb'); ?>" />
				</li>
				<?php } ?>
			</ul>
		</div>
		
		<div class="custom-navigation">
			<a href="#" class="flex-next"></a>
		</div>
	</div>
</div>	
<?php
wp_enqueue_script('product-slider',trailingslashit( get_template_directory_uri() ) . 'assets/product-slider.js',array('jquery'),false,true );
wp_enqueue_style('product-slider',trailingslashit( get_template_directory_uri() ) . 'assets/product-slider.css');
