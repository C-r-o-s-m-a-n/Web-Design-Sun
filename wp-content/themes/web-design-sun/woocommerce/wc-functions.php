<?php
if(!defined('ABSPATH')){
  exit;
}

if ( ! function_exists( 'web_design_sun_woocommerce_cart_link' ) ) {
  /**
   * Cart Link.
   *
   * Displayed a link to the cart including the number of items present and the cart total.
   *
   * @return void
   */
  function web_design_sun_woocommerce_cart_link() {
    ?>
		<?php $item_count = WC()->cart->get_cart_contents_count()?>
	  <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'web-design-sun' ); ?>"  class="header-cart">
		  <div class="header-cart-icon">
			  <i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/cart.svg"></i>
			  <div class="header-cart-icon__counter">
                <?php echo esc_html($item_count)?>
			  </div>
		  </div>
		  <div class="header-cart__total-price">
            <?php echo wp_kses_data( WC()->cart->get_cart_subtotal() )?>
		  </div>
	  </a>
    <?php
  }
}