<?php 

if (!wp_is_mobile()) {
	
  add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 16;' ), 20 );

} else {

  add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 10;' ), 20 );

}

?>
