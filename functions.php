<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support('menus');
register_nav_menu('header', 'En tête du menu');

function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    
      wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
      wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', false, 1, true);
  }

function montheme_menu_class($classes) {
$classes[] = 'nav-item';
return $classes;

}

function montheme_menu_link_class($attrs) {
    $attrs['class'] = 'btn btn-primary';
    return $attrs;
    
    }
  add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
  add_filter('nav_menu_css_class','montheme_menu_class');
  add_filter('nav_menu_link_attributes','montheme_menu_link_class');