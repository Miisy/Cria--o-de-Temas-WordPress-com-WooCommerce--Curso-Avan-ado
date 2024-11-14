<?php

function fancy_lab_scripts(){
    wp_enqueue_script("botstrap-js", get_template_directory_uri() . '/inc/bootstrap.min.js' , array('jquery'), '5.3', true );
    wp_enqueue_style('bootstrap-css', get_stylesheet_uri() . '/inc/bootstrap.min.css', array(), '5,3', 'all');
    wp_enqueue_style('facy-lab-style', get_stylesheet_uri(), array(), 'filemtime(get_template_directory() . /style.css', 'all');
}
add_action('wp_enqueue_scripts' , 'fancy_lab_scripts');