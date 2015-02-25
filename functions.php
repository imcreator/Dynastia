<?php

/*****Sidebars!******/

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_image_size( 'postsize', 200, 200, true );

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'name' => 'sidebar 1',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
    ));

   register_sidebar(array(
   'name' => 'footer sidebar 1',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

}

/* Rejestracja Menu */

function register_menu() {
	register_nav_menu('hodowla-menu', __('Hodowla Menu'));
}
add_action('init', 'register_menu');

function limit_posts_per_page() {
   if ( is_home() )
      return 3;
}
add_filter('pre_option_posts_per_page', 'limit_posts_per_page');

?>