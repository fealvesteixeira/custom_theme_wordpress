<?php
/**
 * @package WordPress
 * @subpackage Theme_Unius
 * @since Theme Unius 1.0
 */

  /*if ( ! isset( $content_width ) ) {
	$content_width = 660;
  }*/

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Theme Unius 1.0
 */

define( 'THEME_PATH', get_template_directory() . '/' );

define( 'THEME_INC', THEME_PATH . 'inc/' );

// Include the customizer functionality
require_once THEME_INC . 'customizer.php';

//Include the enqueues
require_once THEME_INC . 'enqueues.php';

//Include the theme_functions
require_once THEME_INC . 'theme_functions.php';
