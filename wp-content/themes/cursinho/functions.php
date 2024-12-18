<?php
/**
 * Summary of fancy_lab_scripts
 * 
 * @link http://developer.wordpress.org/themes/basics/theme-functions/
 *
 *  @package facy-lan
 */

/**
  * enqueue scripts and styles.
  */

function fancy_lab_scripts(){
    wp_enqueue_script("botstrap-js", get_template_directory_uri() . '/inc/bootstrap.min.js' , array('jquery'), '5.3', true );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5,3', 'all');
    wp_enqueue_style('facy-lab-style', get_stylesheet_uri(), array(), 'filemtime(get_template_directory() . /style.css', 'all');
}
add_action('wp_enqueue_scripts' , 'fancy_lab_scripts');


function fancy_lab_config(){
  register_nav_menus(
    array(
      'fancy_lab_main_menu' =>'Fancy Lab Main Menu',
      'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu'
    )
    );

    add_theme_support('woocommerce', array(
      'thumbnail_image_width' => 255,
      'single_image_width'     => 255,
      'product_grid'           => array(
          'default_rows'      => 10,
          'min_rows'          => 5,
          'max_rows'          => 10,
          'default_columns'   => 1,
          'min_columns'       => 1,
          'max_columns'       => 1,
      )
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    
  if (! isset( $content_width)){
    $content_width = 600;
  }
}
add_action('after_setup_theme', 'fancy_lab_config', 0);
