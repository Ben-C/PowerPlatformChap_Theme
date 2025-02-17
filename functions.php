<?php

function ppc_theme_support()
{
    // adds dynamic title tags
    add_theme_support('title-tag');
    add_theme_support(
        'custom-logo',
        array(
            'height' => 200,
            'width' => 200
        )
    );
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 600, 1000, true);
    add_image_size('banner-image', 500, 500, false);
    add_filter('show_admin_bar', '__return_false');
}
add_action('after_setup_theme', 'ppc_theme_support');

function ppc_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('ppc_main_theme_style', get_theme_file_uri('style.css'), array('ppc_main_theme_bootstrap'), $version, 'all');
    wp_enqueue_style('ppc_main_theme_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('ppc_main_theme_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'ppc_register_styles');

function ppc_register_scripts()
{
    wp_enqueue_script('ppc_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('ppc_bootstrap_popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
}
add_action('wp_enqueue_scripts', 'ppc_register_scripts');

function wpb_list_categories() { 
 
    // define category list parameneters
    $args = array (
    'echo'          => false,
    'title_li'      => '',
    'hide_empty'    => 0
    ); 
     
    // get categories list
    $display_cats = wp_list_categories($args); 
     
    //display custom categories list
    return $display_cats;
    }
     
    // create shortcode
    add_shortcode('custom_categories_list','wpb_list_categories');

?>