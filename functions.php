<?php
/**
 * Blank 2015 functions and definitions
 *
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Blank_2015
 * @since Blank 2015 1.0
 */

/**
 * Enqueue the style sheets.
 *
 * @since Blank 2015 1.0
 */

add_action( 'wp_enqueue_scripts', 'blank_2015_theme_styles' );
function blank_2015_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}