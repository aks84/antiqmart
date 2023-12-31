<?php
/**
 * Antiqmart Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package antiqmart
 */

function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/custom-styles.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
