<?php 

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );

function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    
      wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
      wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', false, 1, true);
  }
  add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');