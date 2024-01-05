<?php
if(!defined('ABSPATH')){
  exit;
}

//register logo
add_theme_support( 'custom-logo' );

//add thumbnail
add_theme_support('post-thumbnails');

//modificate the except
add_filter( 'excerpt_length', function(){
  return 24;
} );
add_filter( 'excerpt_more', function() {
  return '...';
} );