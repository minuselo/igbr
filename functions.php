<?php

function freshy_style_incl() {
	wp_enqueue_style('freshy_styles', get_stylesheet_uri());

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js');
	wp_enqueue_script('jquery');


	wp_enqueue_script('freshy_script_main', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
	wp_enqueue_script('freshy_script_active', get_template_directory_uri() . '/js/active.js', array(), '1.0', true);
	wp_enqueue_script('freshy_script_slider', get_template_directory_uri() . '/js/slider.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'freshy_style_incl');

