<?php
	//script files
	require_once(get_theme_file_path('inc/cross-scripts.php'));

	//after_setup_theme
	require_once(get_theme_file_path('inc/cross-after-setup-theme.php'));

	//widget_init
	require_once(get_theme_file_path('inc/cross-widget-init.php'));

	//Shortcode File
	require_once(get_theme_file_path('template-parts/cross-shortcode.php'));
	//visual composer element
	require_once(get_theme_file_path('inc/cross-vc.php'));

	
//excerpt length
	function wpdocs_custom_excerpt_length( $length ) {
	    return 18;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	function wpdocs_excerpt_more( $more ) {
	    return '';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );