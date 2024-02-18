<?php
/*
* My Theme Function
*/

//Theme title
add_theme_support('title-tag');

// Theme jQuery and CSS file calling
function ar_css_js_file_calling(){
    wp_enqueue_style('ar-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}

add_action('wp_enqueue_scripts', 'ar_css_js_file_calling');



// ---   Theme Function
function ar_customizar_register($wp_customize){
    $wp_customize -> add_section('ar_header_area', array(
        'title' => __('Header Area', 'abdurrazzak'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize -> add_setting('ar_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'ar_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested change or upload your logo you can change it',
        'setting' => 'ar_logo',
        'section' => 'ar_header_area',
    ) ));
}

add_action('customize_register', 'ar_customizar_register');