<?php 
$theme_path = 'wp-content/themes/' . get_template() . '/woocommerce/functions';
$theme_path_admin = '../wp-content/themes/' . get_template() . '/woocommerce/functions';
if (!is_admin()) {
	
  $filepath= new SplFileInfo($theme_path);
} else {
  //filepath from admin
  
$filepath= new SplFileInfo($theme_path_admin);
}
req_php_files($filepath->getRealPath()); ?>
