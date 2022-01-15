<?php 
define('YDIR',get_template_directory_uri());

/**
 * Proper way to enqueue scripts and styles.
 */
add_theme_support('menus');
add_theme_support( 'post-thumbnails');
	
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'Menus' => __( 'Menus','Ytech' ),
      'Footer' => __( 'Footer','Ytech' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

//***********************************************************************//

function ytech_styles() {
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
   wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
   wp_enqueue_style('style', get_stylesheet_uri());

   wp_enqueue_script( 'jquery');
}
add_action('wp_enqueue_scripts', 'ytech_styles');

require('inc/slider-function.php');

require('inc/servicos-function.php');

require('inc/casos-function.php');
