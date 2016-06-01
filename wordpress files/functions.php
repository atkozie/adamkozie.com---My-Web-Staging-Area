<?php

/*
Theme Name: AK's Theme For 170
Author: Adam Kozie
Author URI: http://www.adamkozie.com
Description: A theme built on my staging area when in WEB170.
Version: 1.0
*/


//register menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )));
}
add_action( 'init', 'register_my_menus' );


//register sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));


//blog post image thumbnails
add_theme_support( 'post-thumbnails' );


//page excerpts
add_post_type_support( 'page', 'excerpt' );


?>