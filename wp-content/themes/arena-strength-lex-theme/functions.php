<?php

function arena_files() {
	wp_enqueue_style('arena_main_styles', get_theme_file_uri('/build/style-index.css'));
	wp_enqueue_style('footer_styles', get_theme_file_uri('/build/footer.css'));
	wp_enqueue_style('header_styles', get_theme_file_uri('/build/header.css'));
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'arena_files');


// this allows us to send iframes through the rest api
function custom_wpkses_post_tags( $tags, $context ) {	    

	$allowed_atts = [
		'align'      => [],
		'class'      => [],
		'type'       => [],
		'id'         => [],
		'dir'        => [],
		'lang'       => [],
		'style'      => [],
		'xml:lang'   => [],
		'src'        => [],
		'alt'        => [],
		'href'       => [],
		'rel'        => [],
		'rev'        => [],
		'target'     => [],
		'novalidate' => [],
		'type'       => [],
		'value'      => [],
		'name'       => [],
		'tabindex'   => [],
		'action'     => [],
		'method'     => [],
		'for'        => [],
		'width'      => [],
		'height'     => [],
		'data'       => [],
		'title'      => [],
	];

	$tags['form'] = $allowed_atts;

	// $tags['iframe'] = [
	// 	'src'             => true,
	// 	'height'          => true,
	// 	'width'           => true,
	// 	'frameborder'     => true,
	// 	'allowfullscreen' => true,
	// ];
	return $tags;
}

add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );
