<?php

function theme_name_scripts() {
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('bottom', get_template_directory_uri() . '/css/bottom.css');
    wp_enqueue_style('partners', get_template_directory_uri() . '/css/partners.css');
    wp_enqueue_style('portfolio-slider', get_template_directory_uri() . '/css/portfolio-slider.css');
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');
?>