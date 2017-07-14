jQuery(document).ready(function($) {
  var $hidden_el = $('#ap_mini_cart'); 
  //hide the paras
  $hidden_el.hide();
  
  var $tar_els = $('#cart_svg, #ap_mini_cart_trigger .item_count, #ap_mini_cart_trigger .amount, #down_arrow');

  $($tar_els).click(function(event) {
      event.preventDefault();
      $hidden_el.slideToggle('slow');

   
  })
}); // jquery noConflict
