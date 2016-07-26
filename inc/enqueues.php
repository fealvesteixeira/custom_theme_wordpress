<?php

/*
 * Include to enqueue scripts for WordPress Unius Theme
 *
 *
 */

 function theme_styles(){
    wp_enqueue_style( 'bootstrap-styles',  get_template_directory_uri() . '/public/assets/css/min/bootstrap.min.css');
    //wp_enqueue_style( 'bootstrap-theme-styles',  get_template_directory_uri() . '/public/assets/css/min/bootstrap-theme.min.css');
    //wp_enqueue_style( 'bxslider-styles',  get_template_directory_uri() . '/public/assets/css/min/jquery.bxslider.css');
    //wp_enqueue_style( 'fontawesome-styles',  get_template_directory_uri() . '/public/assets/css/min/font-awesome.min.css');
    wp_enqueue_style( 'styles',  get_template_directory_uri() . '/public/assets/css/min/main.min.css');
 }
 add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts(){
  wp_deregister_script( 'jquery' );
  wp_enqueue_script('jquery', get_template_directory_uri() . '/public/assets/js/jquery-1.12.3.min.js', '', '',false);
  //wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/public/assets/js/min/jquery-migrate-1.2.1.min.js', '', '',false);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/public/assets/js/bootstrap.min.js', '', '',false);
  //wp_enqueue_script('bxslider', get_template_directory_uri() . '/public/assets/js/min/jquery.bxslider.min.js', '', '',false);
  wp_enqueue_script('main-jquery', get_template_directory_uri() . '/public/assets/js/main.js', '', '',false);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/*add_action('wp_enqueue_script', 'wpmask_enqueue_maskedinput');

function wpmask_enqueue_maskedinput(){
  if( is_page('franquias') ) // o script será carregado apenas na página franquias
      wp_enqueue_script('masked-input'.get_template_directory_uri().'/public/assets/min/js/jquery.maskedinput.min.js', array('jquery'));
}

*/
