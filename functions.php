<?php

/*
Theme Name: AK's Theme For 170
Author: Adam Kozie
Author URI: http://www.adamkozie.com
Description: A theme built on my staging area when in WEB170.
Version: 1.0
*/



function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );














?>