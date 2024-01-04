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
    <a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'web-design-sun' ); ?>">
      <?php
      $item_count_text = sprintf(
      /* translators: number of items in the mini cart. */
        _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'web-design-sun' ),
        WC()->cart->get_cart_contents_count()
      );
      ?>
      <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
    </a>
    <?php
  }
}