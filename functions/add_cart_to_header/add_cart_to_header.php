<?php add_action ('ml_header_meta', 'ml_cart_header'); 
function ml_cart_header() {
  if (!is_admin()): ?>
    <div id = "ap_mini_cart_trigger" class="cell cart_contents_wrapper">
    <?php $ml_cart_contents = WC()->cart->cart_contents_count; ?>
	<a class = "cart_contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
	  <?php echo '<span class="item_count">' . sprintf (WC()->cart->cart_contents_count ) . '</span>' ?>
	  
<svg version="1.1" id="cart_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
	<g>
		<g>
			<path fill="#801576" d="M13.768,28.129c-1.27,0-2.301-1.031-2.301-2.3s1.031-2.302,2.301-2.302c1.268,0,2.302,1.033,2.302,2.302
				S15.036,28.129,13.768,28.129z M13.768,24.294c-0.847,0-1.534,0.688-1.534,1.535s0.687,1.532,1.534,1.532
				c0.845,0,1.534-0.686,1.534-1.532S14.613,24.294,13.768,24.294z"/>
		</g>
		<g>
			<path fill="#801576" d="M20.666,28.129c-1.271,0-2.302-1.031-2.302-2.3s1.03-2.302,2.302-2.302c1.268,0,2.299,1.033,2.299,2.302
				S21.934,28.129,20.666,28.129z M20.666,24.294c-0.847,0-1.536,0.688-1.536,1.535s0.689,1.532,1.536,1.532
				c0.843,0,1.532-0.686,1.532-1.532S21.509,24.294,20.666,24.294z"/>
		</g>
	</g>
	<g>
		<path fill="#801576" d="M22.859,18.721H10.516c-0.182,0-0.34-0.129-0.374-0.306L8.326,9.596C8.302,9.482,8.331,9.368,8.405,9.277
			c0.072-0.088,0.181-0.142,0.296-0.142h19.082c0.129,0,0.249,0.064,0.32,0.172c0.072,0.108,0.082,0.246,0.031,0.363l-3.48,7.942
			c-0.474,0.818-0.918,1.088-1.786,1.107C22.867,18.721,22.861,18.721,22.859,18.721z M10.831,17.953h12.024
			c0.553-0.014,0.779-0.111,1.117-0.686l3.225-7.365H9.171L10.831,17.953z"/>
	</g>
	<g>
		<path fill="#801576" d="M23.516,21.713H12.842c-1.136,0-1.858-0.104-2.328-1.508c-0.038-0.17-2.69-12.829-2.985-13.896
			C7.294,5.465,6.396,5.456,6.386,5.456H5.435c-0.211,0-0.385-0.172-0.385-0.383c0-0.211,0.173-0.384,0.385-0.384h0.951
			c0.515,0,1.57,0.295,1.881,1.413c0.302,1.091,2.876,13.381,2.985,13.902c0.292,0.861,0.526,0.941,1.589,0.941h10.674
			c0.212,0,0.382,0.17,0.382,0.383C23.897,21.539,23.728,21.713,23.516,21.713z"/>
	</g>
	<g>
		<circle fill="#801576" cx="5.133" cy="5.133" r="1.133"/>
	</g>
</svg>
	  

	  
<?php echo WC()->cart->get_cart_total(); ?>
	
<span id = "down_arrow">
  <svg width="33px" height="24px" viewBox="0 0 33 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="arrow_down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g fill="#801576">
    <path d="M29.385,7.29 C29.385,8.149 29.057,9.01 28.4,9.666 L16,22.066 L3.6,9.666 C2.287,8.354 2.287,6.226 3.6,4.914 C4.912,3.602 7.039,3.602 8.351,4.914 L16,12.562 L23.649,4.914 C24.961,3.602 27.088,3.602 28.4,4.914 C29.057,5.57 29.385,6.43 29.385,7.29" id="Fill-161"></path>
    </g>
    </g>
  </svg>
</span>
	
	</a>

	<?php ap_wc_print_mini_cart(); ?>
    </div>
<?php endif; }
