<?php

/**
 * Enqueue scripts and styles.
 */
function theme_scripts()
{
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array());
	wp_style_add_data('theme-style', 'rtl', 'replace');

	wp_enqueue_style('general', get_template_directory_uri() . '/css/style.min.css');

	wp_deregister_script('jquery');

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
