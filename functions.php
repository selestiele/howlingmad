<?php

function whiterabbit_styles() {
    //link the stylesheet
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
    wp_register_style('newston', get_template_directory_uri() . '/fonts/newston/stylesheet.css');
    wp_register_style('google-font', 'https://fonts.googleapis.com/css?family=Carrois+Gothic');
    wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/font-awesome/css/fontawesome-all.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '0.1');

    //enqueue the stylesheet
    wp_enqueue_style('normalize');
    wp_enqueue_style('newston');
    wp_enqueue_style('google-font');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'whiterabbit_styles');

// Add Menus
function whiterabbit_menus () {
    register_nav_menus(array (
        'primary-menu' => __('Primary', 'whiterabbit'),
        'social-menu' => __('Social', 'whiterabbit'),
        'footer-menu' => __('Footer', 'whiterabbit')
    ));

}
add_action('init', 'whiterabbit_menus');


?>


