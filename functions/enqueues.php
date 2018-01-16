<?php

function bootsrap_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/theme/css/bootstrap.min.css', false, '4.0.0-beta.2', null);
	wp_enqueue_style('bootstrap-css');

  wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
	wp_enqueue_style('b4st-css');

	/* Scripts */

	wp_register_script('font-awesome', get_template_directory_uri() . '/theme/js/all.js', false, '5.0.2', null);
	wp_enqueue_script('font-awesome');

  wp_register_script('modernizr',  get_template_directory_uri() . '/theme/js/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

	wp_register_script('jquery-3.2.1', get_template_directory_uri() . '/theme/js/jquery.min.js', false, '3.2.1', true);
	wp_enqueue_script('jquery-3.2.1');

	wp_register_script('parallax',  get_template_directory_uri() . '/theme/js/parallax.min.js', false, '1.12.3', true);
	wp_enqueue_script('parallax');

	wp_register_script('popper',  get_template_directory_uri() . '/theme/js/popper.min.js', false, '1.12.3', true);
	wp_enqueue_script('popper');

  wp_register_script('bootstrap-js', get_template_directory_uri() . '/theme/js/bootstrap.min.js', false, '4.0.0-beta.2', true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
	wp_enqueue_script('b4st-js');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bootsrap_enqueues', 100);
