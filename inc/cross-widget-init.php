<?php
	if(! function_exists('suite_widget')):

		function suite_widget(){
			//footer About Text
			register_sidebar(array(
				'id'						=> 'footer_about',
				'name'					=> __('Footer About', 'crossfit'),
				'description'		=> __('Footer Text With Button', 'crossfit'),
				'before_title'	=> '<h3 class="footer-heading mb-4 text-white">',
				'after_title' 	=> '</h3>',
				'before_widget' => '',
				'after_widget'	=> ''
			));
			
			//footer Menu 1
			register_sidebar(array(
				'id'						=> 'footer_menu_one',
				'name'					=> __('Footer Menu 1', 'crossfit'),
				'description'		=> __('Footer First Menu', 'crossfit'),
				'before_title'	=> '<h3 class="footer-heading mb-4 text-white">',
				'after_title' 	=> '</h3>',
				'before_widget' => '',
				'after_widget'	=> ''
			));
			
			//footer menu 2
			register_sidebar(array(
				'id'						=> 'footer_menu_two',
				'name'					=> __('Footer Menu 2', 'crossfit'),
				'description'		=> __('Footer Second Menu', 'crossfit'),
				'before_title'	=> '<h3 class="footer-heading mb-4 text-white">',
				'after_title' 	=> '</h3>',
				'before_widget' => '',
				'after_widget'	=> ''
			));
			
			//footer licence
			register_sidebar(array(
				'id'						=> 'footer_licence',
				'name'					=> __('Footer Licence', 'crossfit'),
				'description'		=> __('Footer Licence Text', 'crossfit'),
				'before_title'	=> '',
				'after_title' 	=> '',
				'before_widget' => '',
				'after_widget'	=> ''
			));



			//Custom widget
			require_once('cross-custom-wiget.php');

		}
		add_action('widgets_init', 'suite_widget');

	endif;