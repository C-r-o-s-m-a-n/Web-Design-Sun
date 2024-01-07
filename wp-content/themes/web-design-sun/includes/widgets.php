<?php
if(!defined('ABSPATH')){
  exit;
}

function web_design_sun_widgets_init() {

  //footer info block
  /*register_sidebar(
    array(
      'name'          => esc_html__( 'Footer info', 'web-design-sun' ),
      'id'            => 'footer-info',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
      'before_sidebar' => '',
		  'after_sidebar'  => ''
    )
  );*/

  // recent posts
  register_sidebar(
    array(
      'name'          => esc_html__( 'Recent posts', 'web-design-sun' ),
      'id'            => 'recent-posts',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="footer-recent-post__title footer__title-block">',
      'after_title'   => '</h3>',
      'before_sidebar' => '<div class="footer-recent-post">',
		  'after_sidebar'  => '</div>'
    )
  );

  //out store
  register_sidebar(
    array(
      'name'          => esc_html__( 'Our stores', 'web-design-sun' ),
      'id'            => 'our-stores',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="footer-nav__title footer__title-block">',
      'after_title'   => '</h3>',
      'before_sidebar' => '<div class="footer-nav">',
      'after_sidebar'  => '</div>'
    )
  );

  //footer useful links
  register_sidebar(
    array(
      'name'          => esc_html__( 'Useful links', 'web-design-sun' ),
      'id'            => 'useful-links',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="footer-nav__title footer__title-block">',
      'after_title'   => '</h3>',
      'before_sidebar' => '<div class="footer-nav">',
      'after_sidebar'  => '</div>'
    )
  );

}
add_action( 'widgets_init', 'web_design_sun_widgets_init' );