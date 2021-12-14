<?php

function load_stylesheets()
    {

        wp_register_style('style', get_template_directory_uri() . '/style.css', 
        array(), false, 'all');
        wp_enqueue_style('style');

    }
add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
    {
        wp_register_script('customjs', get_template_directory_uri() . 'js/scripts.js', ' ', 1, true);
        wp_enqueue_script('customjs');

    }
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(
    array(
            'top-menu' => __('Top Menu', 'theme'),
            
    )
    );