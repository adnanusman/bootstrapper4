<?php

// Enqueue Styles and Scripts
function load_scripts() {
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Main Configuration Function for Theme
function bootstrapper_config() {
    // Enable the Menu
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        )
    );

    $header_image = array (
        'height' => 450,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $header_image);
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'image', 'video' ) );
    
    add_image_size( 'blog-thumbnail', 275, 275 ); 
    add_image_size( 'medium', 500, 334 );
}

add_action('after_setup_theme', 'bootstrapper_config', 0);