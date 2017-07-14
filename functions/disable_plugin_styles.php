<?php 

//disable quantity increment css

add_action( 'wp_print_styles', 'deregister_my_styles', 100 );
 
function deregister_my_styles() {

	//wp_deregister_style( 'wcqi-css' );

}


?>
