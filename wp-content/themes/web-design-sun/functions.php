<?php


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';



//include files
require get_template_directory() . '/includes/enqueue-scripts-style.php';

//add theme support
require get_template_directory() . '/includes/theme-setting.php';

//register menus
require get_template_directory() . '/includes/menus.php';

//widgets
require get_template_directory() . '/includes/widgets/widgets-areas.php';

//widget latest-post
require get_template_directory() . '/includes/widgets/widget-latest-post.php';

//include files woocommerce
if ( class_exists( 'WooCommerce' ) ) {
  /*require get_template_directory() . '/includes/woocommerce.php';*/
  require get_template_directory() . '/woocommerce/wc-functions-remove.php';
  require get_template_directory() . '/woocommerce/wc-functions.php';
}