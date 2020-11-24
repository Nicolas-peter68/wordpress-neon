<?php 
require get_template_directory() . '/bootstrap-navwalker.php';
function montheme_register_assets() {
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_register_style('style', get_bloginfo('stylesheet_url'),'',false, 'all');
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js',['popper','jquery'],false,true);
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',[],false,true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js',[],false,true);
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );
add_action('wp_enqueue_scripts', 'montheme_register_assets');
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );
function montheme_menu_class($classes)
{
   $classes[] ='nav-item';
   return $classes;
}

function montheme_menu_link_class($attrs)
{
   $attrs['class'] ='nav-link';
   return $attrs;
}

add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_link_class');
register_sidebar( array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
  ) );