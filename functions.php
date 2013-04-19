<?php

// Text domain constant
define('EMY_TEXT_DOMAIN', 'emycss3photodark');

if (!isset($content_width))
    $content_width = 960;

/**
 * Setup Translation
 */
function crucial_setup()
{
    load_theme_textdomain(EMY_TEXT_DOMAIN, get_template_directory() . '/lang');
}

add_action('after_setup_theme', 'crucial_setup');

/**
 * JavaScript
 */
function emy_enqueue_script()
{
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-1.5.min.js');
    wp_enqueue_script('jquery.easing-sooper', get_template_directory_uri() . '/js/jquery.easing-sooper.js', array('jquery'));
    wp_enqueue_script('jquery.jquery.sooperfish', get_template_directory_uri() . '/js/jquery.sooperfish.js', array('jquery'));
    wp_enqueue_script('jquery.jquery.kwicks', get_template_directory_uri() . '/js/jquery.kwicks-1.5.1.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'emy_enqueue_script');

/**
 * Register main menu
 */
register_nav_menus(array('emy_top_menu' => 'Main Menu'));

/**
 * Rigister Right Sidebar Widget Area
 */
register_sidebar(array(
    'name' => __('Right sidebar', EMY_TEXT_DOMAIN),
    'id' => 'right-sidebar',
    'description' => 'Right sidebar',
    'class' => '',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
));

/**
 * Register Footer Widget Area
 */
register_sidebar(array(
    'name' => __('Footer', EMY_TEXT_DOMAIN),
    'id' => 'footer-sidebar',
    'description' => 'Footer',
    'before_widget' => '',
    'after_widget' => '',
));
