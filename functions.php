<?php

register_nav_menus( array('primary' => 'Primary Navigation') );

add_theme_support( 'custom-header' );

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' ); 

if ( function_exists('register_sidebar') ){

   register_sidebar(array ( 	'name' => 'footer-1' ));
   register_sidebar(array ( 	'name' => 'footer-2' ));
   register_sidebar(array ( 	'name' => 'footer-3' ));
   register_sidebar(array ( 	'name' => 'impressie-galerij' ));
}
