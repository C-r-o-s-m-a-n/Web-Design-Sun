<?php
if(!defined('ABSPATH')){
  exit;
}

function web_design_sun_widgets_init() {
  //footer info
  register_sidebar(
    array(
      'name'          => esc_html__( 'footer-info', 'web-design-sun' ),
      'id'            => 'footer-info',
      'description'   => esc_html__( 'Add widgets here.', 'web-design-sun' ),
      /*'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',*/
    )
  );

  //footer our stores
  register_sidebar(
    array(
      'name'          => esc_html__( 'footer-our-stores', 'web-design-sun' ),
      'id'            => 'footer-our-stores',
      'description'   => esc_html__( 'Add list here.', 'web-design-sun' ),
      /*'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      ,*/
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>'
    )
  );
}
add_action( 'widgets_init', 'web_design_sun_widgets_init' );