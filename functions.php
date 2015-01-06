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

function blank_customize_register( $wp_customize ) {

	//Logo Uploader
	$wp_customize->add_section( 'blank_logo_section' , array(
	    'title'       => __( 'Logo', 'blank2015' ),
	    'priority'    => 36,
	    'description' => 'Upload a logo to replace the default site title in the header',
	) );
	$wp_customize->add_setting( 'blank_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'blank_logo', array(
	    'label'    => __( 'Logo', 'blank2015' ),
	    'section'  => 'blank_logo_section',
	    'settings' => 'blank_logo',
	) ) );

}

add_action( 'customize_register', 'blank_customize_register', 12 );