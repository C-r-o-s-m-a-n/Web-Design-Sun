<?php
if(!defined('ABSPATH')){
  exit;
}

//register menus
register_nav_menus(
  array(
    'header_nav' => esc_html__( 'Header Menu', 'web-design-sun'),
    'footer_stores' => esc_html__( 'Footer list stores', 'web-design-sun'),
    'footer_useful_link' => esc_html__( 'Footer useful link', 'web-design-sun'),
  )
);

function add_inscription_to_menu_item($items, $menu) {
  if ($menu->menu->term_id === 30){
    foreach ($items as $item) {
      $item_id = $item->ID;
      $inscription = get_field('global-menu-item-inscription', $item_id);
      $bg_color = $inscription['global-menu-item-inscription_bg-color'] ?: 'transparent';

      if (array_filter($inscription)){
        $item->classes[] = 'header-nav-inscription';
        $item->title .= '<span style="background-color: '.$bg_color.'">
                        <span style="border: 3px solid transparent; border-left: 5px solid '.$bg_color.'; border-top: 3px solid '.$bg_color.';"></span>'
          .esc_html($inscription['global-menu-item-inscription_text']). '</span>';
      }
    }
  }

  return $items;
}

add_filter('wp_nav_menu_objects', 'add_inscription_to_menu_item', 10, 2);