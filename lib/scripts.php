<?php

/* 
SCRIPTS.PHP
================
Styling and Scripts
*/

// Prints Ajax URL access at the header
function my_scripts() {
    if( !is_admin() ) {
        wp_deregister_script('jquery');
        //Add latest JQuery back into header. Comment this line out to remove JQuery alltogether
        wp_register_script('jquery', get_template_directory_uri(). '/bower_components/jquery/dist/jquery.min.js', false, '2.1.4');
        wp_enqueue_script('jquery');
    }
    // Javascripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', false, '3.4.4');

    // Stylesheet
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', false, '3.4.4');
    // wp_enqueue_style('fontawesome_4.3.0',     get_template_directory_uri() . '/assets/css/fa-4.3.0/css/font-awesome.4.3.0.min.css');    
    // wp_enqueue_style('fontawesome_3.2.1',     get_template_directory_uri() . '/assets/css/font-awesome.3.2.1.min.css'); 
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'my_scripts');
