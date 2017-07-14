<?php 
/* Custom Shoping Cart in the top */
function ap_wc_print_mini_cart() {
    ?>
    <div id="ap_mini_cart">
	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>
	    <ul class="ap_minicart_products">
		<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
		$_product = $cart_item['data'];
		// Only display if allowed
		if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;
		// Get price
		$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
		$product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
		?>
		<li class="ap-mini-cart-product clearfix">
		    <div class="ap-mini-cart-thumbnail">
			<?php echo $_product->get_image(); ?>
		    </div>
		    <div class="ap-mini-cart-info">
			<a class="ap-mini-cart-title" href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
			    <h4><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?></h4>
			</a>
			<?php echo apply_filters( 'woocommerce_widget_cart_item_price', '<span class="woffice-mini-cart-price">' . __('Unit Price', 'YOURTHEME') . ':' . $product_price . '</span>', $cart_item, $cart_item_key ); ?>
			<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="ap-mini-cart-quantity">' . __('Quantity', 'woffice') . ':' . $cart_item['quantity'] . '</span>', $cart_item, $cart_item_key ); ?>
		    </div>
		</li>
		<?php endforeach; ?>
	    </ul><!-- end .ap-mini-cart-products -->
	<?php else : ?>
	    <p class="ap-mini-cart-product-empty"><?php _e( 'No products in the cart.', 'YOURTHEME' ); ?></p>
	<?php endif; ?>
	<?php if (sizeof( WC()->cart->get_cart()) > 0) : ?>

	<div class="ap_mini_cart_subtotal">
	  <?php _e( 'Cart Subtotal', 'YOURTHEME' ); ?>: <?php echo WC()->cart->get_cart_subtotal(); ?>
	</div>

	    <div class="btns">
		<a href="<?php echo WC()->cart->get_cart_url(); ?>" class="cart">

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
	<g>
		<g>
			<path fill="#ffffff" d="M13.768,28.129c-1.27,0-2.301-1.031-2.301-2.3s1.031-2.302,2.301-2.302c1.268,0,2.302,1.033,2.302,2.302
				S15.036,28.129,13.768,28.129z M13.768,24.294c-0.847,0-1.534,0.688-1.534,1.535s0.687,1.532,1.534,1.532
				c0.845,0,1.534-0.686,1.534-1.532S14.613,24.294,13.768,24.294z"/>
		</g>
		<g>
			<path fill="#ffffff" d="M20.666,28.129c-1.271,0-2.302-1.031-2.302-2.3s1.03-2.302,2.302-2.302c1.268,0,2.299,1.033,2.299,2.302
				S21.934,28.129,20.666,28.129z M20.666,24.294c-0.847,0-1.536,0.688-1.536,1.535s0.689,1.532,1.536,1.532
				c0.843,0,1.532-0.686,1.532-1.532S21.509,24.294,20.666,24.294z"/>
		</g>
	</g>
	<g>
		<path fill="#ffffff" d="M22.859,18.721H10.516c-0.182,0-0.34-0.129-0.374-0.306L8.326,9.596C8.302,9.482,8.331,9.368,8.405,9.277
			c0.072-0.088,0.181-0.142,0.296-0.142h19.082c0.129,0,0.249,0.064,0.32,0.172c0.072,0.108,0.082,0.246,0.031,0.363l-3.48,7.942
			c-0.474,0.818-0.918,1.088-1.786,1.107C22.867,18.721,22.861,18.721,22.859,18.721z M10.831,17.953h12.024
			c0.553-0.014,0.779-0.111,1.117-0.686l3.225-7.365H9.171L10.831,17.953z"/>
	</g>
	<g>
		<path fill="#ffffff" d="M23.516,21.713H12.842c-1.136,0-1.858-0.104-2.328-1.508c-0.038-0.17-2.69-12.829-2.985-13.896
			C7.294,5.465,6.396,5.456,6.386,5.456H5.435c-0.211,0-0.385-0.172-0.385-0.383c0-0.211,0.173-0.384,0.385-0.384h0.951
			c0.515,0,1.57,0.295,1.881,1.413c0.302,1.091,2.876,13.381,2.985,13.902c0.292,0.861,0.526,0.941,1.589,0.941h10.674
			c0.212,0,0.382,0.17,0.382,0.383C23.897,21.539,23.728,21.713,23.516,21.713z"/>
	</g>
	<g>
		<circle fill="#ffffff" cx="5.133" cy="5.133" r="1.133"/>
	</g>
</svg> View Cart 

		</a>
		<a href="<?php echo WC()->cart->get_checkout_url(); ?>" class="checkout">

<svg width="32px" height="22px" viewBox="0 0 32 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <polygon id="path-1" points="0.5 15.94 24.667 15.94 24.667 0.14 0.5 0.14 0.5 15.94"></polygon>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="credit_card">
            <g id="Group-22" transform="translate(3.000000, 3.000000)">
                <polygon id="Fill-19" fill="#ffffff" mask="url(#mask-2)" points="0.878 5.841 24.289 5.841 24.289 4.709 0.878 4.709"></polygon>
                <path d="M2.388,0.895 C1.765,0.895 1.255,1.403 1.255,2.028 L1.255,14.111 C1.255,14.737 1.765,15.244 2.388,15.244 L22.778,15.244 C23.401,15.244 23.911,14.737 23.911,14.111 L23.911,2.028 C23.911,1.403 23.401,0.895 22.778,0.895 L2.388,0.895 L2.388,0.895 Z M22.778,16 L2.388,16 C1.345,16 0.5,15.152 0.5,14.111 L0.5,2.028 C0.5,0.985 1.345,0.14 2.388,0.14 L22.778,0.14 C23.822,0.14 24.667,0.985 24.667,2.028 L24.667,14.111 C24.667,15.152 23.822,16 22.778,16 L22.778,16 Z" id="Fill-21" fill="#ffffff" mask="url(#mask-2)"></path>
            </g>
            <path d="M11.808,14.695 L6.898,14.695 C6.585,14.695 6.332,14.44 6.332,14.128 C6.332,13.817 6.585,13.562 6.898,13.562 L11.808,13.562 C12.121,13.562 12.374,13.817 12.374,14.128 C12.374,14.44 12.121,14.695 11.808,14.695" id="Fill-23" fill="#ffffff"></path>
        </g>
    </g>
</svg>

Checkout
		</a>
	    </div>
	<?php endif; ?>
    </div>
    <?php
}
