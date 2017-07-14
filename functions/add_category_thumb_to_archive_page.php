<?php 
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
function add_class_to_term_description() {

	    //outputs a description only on the parent page of product category

	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    $term_description = term_description();

	    //// vars for brand header image
	    $queried_object = get_queried_object(); 
	    $taxonomy = $queried_object->taxonomy;
	    $term_id = $queried_object->term_id;  
	    $banner_image = get_field('brand_header_img', $taxonomy . '_' . $term_id);
	    echo '<section class="term_description row"><article class = "boxed_content"><div class="cell cat_img">';
	    if ($image) {
	      echo '<img src="' . $image . '" alt="" />';
	    }
	    if($banner_image) {
	      echo '<img src="' . $banner_image . '" alt="" />';
	    }
	    echo '</div><!--close image cell--><div class="cell description">' . $term_description. '</div></article></section>';
}
add_filter( 'woocommerce_archive_description', 'add_class_to_term_description', 30 ); ?>


