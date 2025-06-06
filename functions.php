<?php

function neom_child_theme_enqueue_styles() {
	// Najpierw styl motywu nadrzędnego
	wp_enqueue_style(
		'neom-city-parent-style',
		get_template_directory_uri() . '/style.css'
	);

	// Teraz styl motywu potomnego
	wp_enqueue_style(
		'neom-city-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'neom-city-parent-style' ),
		wp_get_theme()->get('Version')
	);

	// Styl inline z kolorami (jeśli chcesz nadpisać kolory)
	// $custom_css = '
    // :root {
    // }';
	// wp_add_inline_style( 'neom-city-child-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'neom_child_theme_enqueue_styles', 20 );


// Hook the enqueue styles function with a higher priority.
add_action( 'wp_enqueue_scripts', 'neom_child_theme_enqueue_styles', 20 );
