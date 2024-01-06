<?php
if(!defined('ABSPATH')){
  exit;
}

//Enqueue scripts and styles

function web_design_sun_style() {
  wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/libs/slick/slick-theme.css');
  wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/libs/slick/slick.css');
  wp_enqueue_style('web-design-sun-style', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,500&family=Marcellus&display=swap', array(), null);

  wp_style_add_data('google-fonts', 'preconnect', 'https://fonts.googleapis.com');
  wp_style_add_data('google-fonts', 'preconnect', 'https://fonts.gstatic.com');
}
add_action( 'wp_enqueue_scripts', 'web_design_sun_style' );

function web_design_sun_scripts() {
  wp_enqueue_script('slick.min.js', get_stylesheet_directory_uri() . '/assets/libs/slick/slick.min.js', array('jquery'), null, true);
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'web_design_sun_scripts' );