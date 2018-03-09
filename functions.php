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
    add_theme_support( 'title_tag' );
    
    add_image_size( 'blog-thumbnail', 275, 275 ); 
    add_image_size( 'medium', 500, 334 );
}

add_action('after_setup_theme', 'bootstrapper_config', 0);

add_action('widgets_init', 'bootstrapper_sidebars');

function bootstrapper_sidebars() {
    register_sidebar( array(
        'name' => 'Home Sidebar',
        'id' => 'home-sidebar',
        'description' => 'Sidebar on homepage',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>'
        )
    );
    register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'Sidebar on Blog Pages',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widget-title">',
        'after_title' => '</p>'
        )
    );

    register_sidebar( array(
        'name' => 'Service Area 1',
        'id' => 'service-area-1',
        'description' => 'Service Areas',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<p class="service-area-title">',
        'after_title' => '</p>'
        )
    );
    register_sidebar( array(
        'name' => 'Service Area 2',
        'id' => 'service-area-2',
        'description' => 'Service Areas',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<p class="service-area-title">',
        'after_title' => '</p>'
        )
    );
    register_sidebar( array(
        'name' => 'Service Area 3',
        'id' => 'service-area-3',
        'description' => 'Service Areas',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<p class="service-area-title">',
        'after_title' => '</p>'
        )
    );
}