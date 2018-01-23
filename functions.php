<?php
/**
 * Beans Child
 *
 * @package BeansChild
 */

namespace BeansChild;

// Include Beans. Do not remove the line below.
require_once get_template_directory() . '/lib/init.php';

/**
 * Enqueue LESS and CSS style to the UIkit compiler.
 *
 * IMPORTANT: The function below enqueue both the style.less and style.css to the UIkit compiler. Remove one of the
 * two enqueuer according to your needs
 *
 * To make sure the compiler re-compile your LESS or CSS on the fly (on page reload), make sure to enable development
 * mode via the Admin->Appearance->Settings option.
 */
add_action( 'beans_uikit_enqueue_scripts', function() {
	// To remove if you are using style.css only.
	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.less', 'less' );

	// To remove if you are using style.less only.
	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.css', 'less' );
} );
