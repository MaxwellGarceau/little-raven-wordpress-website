<?php

function little_raven_files()
{
    wp_enqueue_script('scrolling-nav-js', get_theme_file_uri('js/scrolling-nav.js'), null, '1.0', true);
    wp_enqueue_script('little-raven-js', get_theme_file_uri('js/script.js'), null, '1.0', true);
    wp_enqueue_style('normalize', get_theme_file_uri('/vendor/normalize.css'));
    wp_enqueue_style('saira-condensed-font', 'https://fonts.googleapis.com/css?family=Saira+Condensed');
    wp_enqueue_style('bootstrap', get_theme_file_uri('/vendor/bootstrap/css/bootstrap.css'));
    wp_enqueue_style('little_raven_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'little_raven_files');

function little_raven_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'little_raven_features');
