<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support('menus');
register_nav_menu('header', 'En tête du menu');
register_nav_menu('footer', 'En pied de page');



function create_posttypes() {
    register_post_type('vegetarien', [
        'labels' => [
            'name' => __( 'Végétariens' ),
            'singular_name' => __( 'Vegetarien' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'commande/vegetarien/'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
    register_post_type('restaurants', [
        'labels' => [
            'name' => __( 'Restaurants' ),
            'singular_name' => __( 'Restaurant' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'commande/restaurant/'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
    register_post_type('halal', [
        'labels' => [
            'name' => __( 'Halal' ),
            'singular_name' => __( 'Halal' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'commande/halal/'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
    register_post_type('Fastfoods', [
        'labels' => [
            'name' => __( 'Fastfoods' ),
            'singular_name' => __( 'Fastfoods' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'commande/fastfoods/'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
    register_post_type('Courses', [
        'labels' => [
            'name' => __( 'Courses' ),
            'singular_name' => __( 'Courses' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'commande/courses/'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
}







function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
      wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
      wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', false, 1, true);
  }
  add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
  

function montheme_menu_class($classes) {
$classes[] = 'nav-item';
return $classes;

}

function montheme_menu_link_class($attrs) {
    $attrs['class'] = 'btn btn-primary';
    return $attrs;
    
    }
  add_action('init', 'create_posttypes');
  add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
  add_filter('nav_menu_css_class','montheme_menu_class');
  add_filter('nav_menu_link_attributes','montheme_menu_link_class');