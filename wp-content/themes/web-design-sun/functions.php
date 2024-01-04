<?php

//include files
require get_template_directory() . '/includes/enqueue-scripts-style.php';

//add theme support
require get_template_directory() . '/includes/theme-setting.php';

//register menus
require get_template_directory() . '/includes/menus.php';

//widgets
require get_template_directory() . '/includes/widgets.php';

//iclude files woocommerce
if ( class_exists( 'WooCommerce' ) ) {
  /*require get_template_directory() . '/includes/woocommerce.php';*/
  require get_template_directory() . '/woocommerce/wc-functions-remove.php';
  require get_template_directory() . '/woocommerce/wc-functions.php';
}