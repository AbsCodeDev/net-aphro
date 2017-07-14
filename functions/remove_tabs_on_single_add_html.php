<?php
function remove_woocommerce_product_tabs( $tabs ) {		

  unset( $tabs['description'] );		
  unset( $tabs['reviews'] );			
  unset( $tabs['additional_information'] );			
  return $tabs;		}		

add_filter( 'woocommerce_product_tabs', 'remove_woocommerce_product_tabs', 98 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_product_description_tab' );

//rename tab
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 300 );
function woo_rename_tabs( $tabs ) {
	$tabs['description']['title'] = __( 'preparations' );
	return $tabs;
}

function woocommerce_product_description_tab() { 

  $pc= get_field('product_care');
  $apt= get_field('aphrodite_tips');
  $video = get_field('vid'); 

?>
<section class = "product_features_description row">
  <div class="boxed_content">
  <div class="cell">

  <h4>The <?php the_title(); ?></h4>

  <?php the_content(); ?>

    <?php  //wc_get_template( 'single-product/tabs/description.php' ); ?>
<?php if($pc){  ?>

  <h4>Product Care</h4>
  <p class = "tips">
    <?php echo $pc; ?>
  </p>

<?php } ?>

  </div> 
  <div class="cell">

<?php 

  $pf = 'product_features';

  if (have_rows($pf)): ?>
  <h4>Product Features</h4>
    <ul class = "content_list">
    <?php while(have_rows($pf)): the_row();

      $feature = get_sub_field('feature'); ?>
      <li><?php echo $feature; ?> </li>
      <?php endwhile; ?>

    </ul>
    <?php endif;
    ?>

<?php if($apt){  ?>

  <h4>Aphrodites Tips</h4>
  <p class = "tips">
    <?php echo $apt; ?>
  </p>

<?php } ?>

  </div>
  </div><!--boxed_content-->
</section>

<?php if ($video) { ?>
  
    <section class="ml_video">

      <div class = "wrapper">
	<h4 class = "video_title">Watch the <?php the_title(); ?> video</h4>
	<div class="boxed_content">
	  <?php  echo $video; ?>
	</div><!--boxed_content-->
      </div>

    </section>

<?php  } ?>

<?php //show reviews if exists 
if (function_exists('wp_review_show_total')): ?>
	<section class="reviews">
	  <div class="boxed_content">
	    <?php  echo do_shortcode('[wp-review]'); ?>
	  </div>
	</section>
	<section class="comments">
	  <div class="boxed_content">
	    <?php comments_template();  ?>
	  </div>
	</section>
<?php endif; ?> 
    <section class="up_sells">
      <div class="boxed_content">
<?php } ?>
