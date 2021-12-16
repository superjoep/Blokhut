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

function bl_header_customize($wp_customize){
 $wp_customize->add_section('bl-header-section', array(
     'title' => 'Header Text'
 ));
 $wp_customize->add_setting('bl-header-headline', array(
     'default' => 'example header'
 ));
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-header-headline-control', array(
    'label' => 'Headline',
    'section' => 'bl-header-section',
    'settings' => 'bl-header-headline'
 )));

$wp_customize->add_setting('bl-header-text', array(
    'default' => 'example text'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-header-text-control', array(
   'label' => 'text',
   'section' => 'bl-header-section',
   'settings' => 'bl-header-text', 
   'type' => 'textarea'
)));


$wp_customize->add_setting('bl-header-image');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-header-image', array(
   'label' => 'Image',
   'section' => 'bl-header-section',
   'settings' => 'bl-header-image', 
   'width' => 1920,
   'height' => 500
)));
}


add_action('customize_register', 'bl_header_customize');