<?php

register_nav_menus( array('primary' => 'Primary Navigation') );

add_theme_support( 'custom-header' );

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' ); 

function widget_registration($name, $id, $description){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description
    ));
}
 
function multiple_widget_init(){
    widget_registration('Footer widget 1', 'footer-sidebar-1', 'left');
    widget_registration('Footer widget 2', 'footer-sidebar-2', 'center');
    widget_registration('Footer widget 3', 'footer-sidebar-3', 'right');
}
 
add_action('widgets_init', 'multiple_widget_init');
