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

    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'custom-post-type-name',
        ));


function bl_header_customize($wp_customize){
 $wp_customize->add_section('bl-Home-section', array(
     'title' => 'Home Page'
 ));
 $wp_customize->add_setting('bl-header-headline', array(
     'default' => 'example header'
 ));
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-header-headline-control', array(
    'label' => 'Headline',
    'section' => 'bl-Home-section',
    'settings' => 'bl-header-headline'
 )));

$wp_customize->add_setting('bl-header-text', array(
    'default' => 'example text'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-header-text-control', array(
   'label' => 'Headline description',
   'section' => 'bl-Home-section',
   'settings' => 'bl-header-text', 
   'type' => 'textarea'
)));


$wp_customize->add_setting('bl-header-image');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-header-image', array(
   'label' => 'Headline Background Image',
   'section' => 'bl-Home-section',
   'settings' => 'bl-header-image', 
   'width' => 1920,
   'height' => 500
)));
$wp_customize->add_setting('bl-Main-text', array(
    'default' => 'example text'
));
//main information
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-Main-text-control', array(
    'label' => 'Main description',
    'section' => 'bl-Home-section',
    'settings' => 'bl-Main-text', 
    'type' => 'textarea'
 )));
//main images
//image 1
$wp_customize->add_setting('bl-main-image');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-main-image', array(
   'label' => 'Main description image 1',
   'section' => 'bl-Home-section',
   'settings' => 'bl-main-image', 
   'width' => 400,
   'height' => 270
)));
//image 2
$wp_customize->add_setting('bl-main-image2');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-main-image2', array(
   'label' => 'Main description image 2',
   'section' => 'bl-Home-section',
   'settings' => 'bl-main-image2', 
   'width' => 210,
   'height' => 300
)));
//image 3
$wp_customize->add_setting('bl-main-image3');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-main-image3', array(
   'label' => 'Main description image 3',
   'section' => 'bl-Home-section',
   'settings' => 'bl-main-image3', 
   'width' => 420,
   'height' => 300
)));
// FAQ question 1 customizer settings
$wp_customize->add_setting('bl-question1-headline', array(
    'default' => 'example header'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question1-headline-control', array(
   'label' => 'Question 1',
   'section' => 'bl-Home-section',
   'settings' => 'bl-question1-headline'
)));
$wp_customize->add_setting('bl-question1-text', array(
   'default' => 'example text'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question1-text-control', array(
  'label' => 'Question 1 answer',
  'section' => 'bl-Home-section',
  'settings' => 'bl-question1-text', 
  'type' => 'textarea'
)));

// FAQ question 2 customizer settings
$wp_customize->add_setting('bl-question2-headline', array(
    'default' => 'example header'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question2-headline-control', array(
   'label' => 'Question 2',
   'section' => 'bl-Home-section',
   'settings' => 'bl-question2-headline'
)));
$wp_customize->add_setting('bl-question2-text', array(
   'default' => 'example text'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question2-text-control', array(
  'label' => 'Question 2 answer',
  'section' => 'bl-Home-section',
  'settings' => 'bl-question2-text', 
  'type' => 'textarea'
)));
// FAQ question 3 customizer settings
$wp_customize->add_setting('bl-question3-headline', array(
    'default' => 'example header'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question3-headline-control', array(
   'label' => 'Question 3',
   'section' => 'bl-Home-section',
   'settings' => 'bl-question3-headline'
)));
$wp_customize->add_setting('bl-question3-text', array(
   'default' => 'example text'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-question3-text-control', array(
  'label' => 'Question 3 answer',
  'section' => 'bl-Home-section',
  'settings' => 'bl-question3-text', 
  'type' => 'textarea'
)));






// informatie page
$wp_customize->add_section('bl-Information-section', array(
    'title' => 'Informatie Page'
));
$wp_customize->add_setting('bl-Information-text', array(
    'default' => 'example text'
 ));
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'bl-Information-text-control', array(
   'label' => 'Main Text',
   'section' => 'bl-Information-section',
   'settings' => 'bl-Information-text', 
   'type' => 'textarea'
 )));

 //info images
//image 1
$wp_customize->add_setting('bl-info-image');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-info-image', array(
   'label' => 'Main description image 1',
   'section' => 'bl-Information-section',
   'settings' => 'bl-info-image', 
   'width' => 400,
   'height' => 270
)));
//image 2
$wp_customize->add_setting('bl-info-image2');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-info-image2', array(
   'label' => 'Main description image 2',
   'section' => 'bl-Information-section',
   'settings' => 'bl-info-image2', 
   'width' => 210,
   'height' => 300
)));
//image 3
$wp_customize->add_setting('bl-info-image3');
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'bl-info-image3', array(
   'label' => 'Main description image 3',
   'section' => 'bl-Information-section',
   'settings' => 'bl-info-image3', 
   'width' => 420,
   'height' => 300
)));
}







add_action('customize_register', 'bl_header_customize');
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );