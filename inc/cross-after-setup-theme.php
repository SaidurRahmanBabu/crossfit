<?php
	if ( ! function_exists( 'crossfit_setup' ) ) :
		
		function crossfit_setup() {
			load_theme_textdomain('crossfit', get_template_directory().'/languages' );

			//All theme supports file
			require_once('cross-theme-support.php');

			//Crossfit Theme Menus
			register_nav_menus(array(
				'main-menu' 		=> __('Main Menu', 'suites'),
				'footer-menu1'		=> __('Footer Menu 1', 'suites'),
				'footer-menu2'		=> __('Footer Menu 2', 'suites')
			));
			//footer menu class
			function add_menuclass($ulclass) {
			  return preg_replace('/<ul /', '<ul class="list-unstyled"', $ulclass);
			}
			add_filter('wp_nav_menu','add_menuclass');
			
		
		}
		add_action( 'after_setup_theme', 'crossfit_setup');

	endif;