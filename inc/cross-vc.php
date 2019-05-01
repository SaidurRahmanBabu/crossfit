<?php
	function crossfit_vc_element(){

		//Section Home page slider
		vc_map(array(
			'name' 										=> __('Slider', 'crossfit'),
			'description' 						=> __('Home Page Slider', 'crossfit'),
			'base' 										=> 'homeslider',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name'  => 'homepage_slider_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Slider Contents', 'crossfit'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Title', 'crossfit'),
							'description' => __('Slider Title Text', 'crossfit')
						),
						
						array(
							'param_name' 	=> 'sub_title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Sub Title', 'crossfit'),
							'description' => __('Slider Sub Title Text', 'crossfit')
						),
						
						array(
							'param_name' 	=> 'image',
							'type' 				=> 'attach_image',
							'heading' 		=> __('Image', 'crossfit'),
							'description' => __('Slider Image', 'crossfit')
						),

					)//group params
				)
			)
		));
		//end of Home page slider

		// //Section Hotel Feature
		vc_map(array(
			'name' 										=> __('Exercises', 'crossfit'),
			'description' 						=> __('Exercises Content', 'crossfit'),
			'base' 										=> 'hotel_feature',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'section_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('Section Title', 'crossfit')
				),

				array(
					'param_name'  => 'feature_group',
					'type' 				=> 'param_group',
					'heading' 		=> __('Crossfit Exercises', 'crossfit'),
					'value' 			=> '',
					'params' 			=> array(
						array(
							'param_name' 	=> 'title',
							'type' 				=> 'textfield',
							'heading' 		=> __('Exercise Name', 'crossfit'),
							'description' => __('Exercise name', 'crossfit')
						),
						
						array(
							'param_name' 	=> 'icon',
							'type' 				=> 'iconpicker',
							'heading' 		=> __('Feature Icon', 'crossfit'),
							'description' => __('Exercise Feature Icon', 'crossfit')
						),

						array(
							'param_name' 	=> 'text',
							'type' 				=> 'textarea',
							'heading' 		=> __('Text', 'crossfit'),
							'description' => __('Description of the exercise', 'crossfit')
						),

						array(
							'param_name' 	=> 'button',
							'type' 				=> 'textfield',
							'heading' 		=> __('Button text', 'crossfit'),
							'description' => __('Read More/view More etc', 'crossfit')
						),

					)//group params
				)
			)
		));
		// //end of hotel feature

		// //Section About
		vc_map(array(
			'name' 										=> __('Club', 'crossfit'),
			'description' 						=> __('Club Content', 'crossfit'),
			'base' 										=> 'about',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'class',
					'type' 				=> 'textfield',
					'heading' 		=> __('Class', 'crossfit'),
					'description' => __('Use class "order-lg-2" to change the direction of the image left to right', 'crossfit')
				),

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('About Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'crossfit'),
					'description' => __('About Image', 'crossfit')
				),

				array(
					'param_name' 	=> 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button', 'crossfit'),
					'description' => __('Button Text', 'crossfit')
				),

				array(
					'param_name' 	=> 'content',
					'type' 				=> 'textarea_html',
					'heading' 		=> __('Text', 'crossfit'),
					'description' => __('About Text', 'crossfit')
				),

			)
		));
		// //end of about section


		// //Section Trainer
		vc_map(array(
			'name' 										=> __('Trainer', 'crossfit'),
			'description' 						=> __('Trainer Details', 'crossfit'),
			'base' 										=> 'trainer',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('About Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Name', 'crossfit'),
					'description' => __('Trainer Name', 'crossfit')
				),

				array(
					'param_name' 	=> 'bg_image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Background Image', 'crossfit'),
					'description' => __('Trainer Background Image', 'crossfit')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'crossfit'),
					'description' => __('Trainer Image', 'crossfit')
				),

				array(
					'param_name' 	=> 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button', 'crossfit'),
					'description' => __('Button Text', 'crossfit')
				),

				array(
					'param_name' 	=> 'content',
					'type' 				=> 'textarea_html',
					'heading' 		=> __('Text', 'crossfit'),
					'description' => __('Trainer Text', 'crossfit')
				),

			)
		));
		// //end of about section

		// //Section CTA Countdown
		// vc_map(array(
		// 	'name' 										=> __('CTA Countdown', 'crossfit'),
		// 	'description' 						=> __('Cta countdown timer', 'crossfit'),
		// 	'base' 										=> 'cta',
		// 	'icon' 										=> '',
		// 	'show_settings_on_create' => true,
		// 	'category' 								=> __('crossfit Content', 'crossfit'),
		// 	'params' 									=> array(

		// 		array(
		// 			'param_name' 	=> 'title',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Title', 'crossfit'),
		// 			'description' => __('Gallery Title', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'image',
		// 			'type' 				=> 'attach_image',
		// 			'heading' 		=> __('Image', 'crossfit'),
		// 			'description' => __('Upload Image', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'button',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Button Text', 'crossfit'),
		// 			'description' => __('Button Text', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'countdown_caption',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Caption', 'crossfit'),
		// 			'description' => __('Caption For Countdown Timer', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'year',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Year', 'crossfit'),
		// 			'description' => __('Year In Number', 'crossfit'),
		// 			'value'				=> '2019'
		// 		),

		// 		array(
		// 			'param_name' 	=> 'month',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Month', 'crossfit'),
		// 			'description' => __('Month In Number', 'crossfit'),
		// 			'value'				=> '9'
		// 		),

		// 		array(
		// 			'param_name' 	=> 'day',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Day', 'crossfit'),
		// 			'description' => __('Day In Number', 'crossfit'),
		// 			'value'				=> '10'
		// 		),

		// 	)
		// ));
		// //end of cta countdown section

		// //Section Gallery
		// vc_map(array(
		// 	'name' 										=> __('Gallery', 'crossfit'),
		// 	'description' 						=> __('Image Gallery', 'crossfit'),
		// 	'base' 										=> 'gallery',
		// 	'icon' 										=> '',
		// 	'show_settings_on_create' => true,
		// 	'category' 								=> __('crossfit Content', 'crossfit'),
		// 	'params' 									=> array(

		// 		array(
		// 			'param_name' 	=> 'title',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Title', 'crossfit'),
		// 			'description' => __('Gallery Title', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'image',
		// 			'type' 				=> 'attach_images',
		// 			'heading' 		=> __('Image Gallery', 'crossfit'),
		// 			'description' => __('Upload Images', 'crossfit')
		// 		),

		// 	)
		// ));
		// //end of gallery section

		//Section Header Image
		vc_map(array(
			'name' 										=> __('Header', 'crossfit'),
			'description' 						=> __('Page Header Image And Text', 'crossfit'),
			'base' 										=> 'header',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('Page Header Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'sub_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Sub Title', 'crossfit'),
					'description' => __('Page Header Sub Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'crossfit'),
					'description' => __('Upload Image', 'crossfit')
				),

			)
		));
		// //end of Header Image

		//Section popular program
		vc_map(array(
			'name' 										=> __('Popular Program', 'crossfit'),
			'description' 						=> __('From The Recent Blog Post', 'crossfit'),
			'base' 										=> 'events',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('Section Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'category_name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Category Name', 'crossfit'),
					'description' => __('Name separate with comma (,)', 'crossfit')
				),

				array(
					'param_name' 	=> 'post_limit',
					'type' 				=> 'textfield',
					'heading' 		=> __('Select Post Limit', 'crossfit'),
					'description' => __('Select Post Limit', 'crossfit')
				),

			)
		));
		// //end of popular program

		// //Section Room
		// vc_map(array(
		// 	'name' 										=> __('Our Rooms', 'crossfit'),
		// 	'description' 						=> __('Category Name Has To Be "room"', 'crossfit'),
		// 	'base' 										=> 'room',
		// 	'icon' 										=> '',
		// 	'show_settings_on_create' => true,
		// 	'category' 								=> __('crossfit Content', 'crossfit'),
		// 	'params' 									=> array(

		// 		array(
		// 			'param_name' 	=> 'title',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Title', 'crossfit'),
		// 			'description' => __('Section Title', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'category_name',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Category Name', 'crossfit'),
		// 			'description' => __('Name separate with comma (,)', 'crossfit')
		// 		),

		// 		array(
		// 			'param_name' 	=> 'post_limit',
		// 			'type' 				=> 'textfield',
		// 			'heading' 		=> __('Select Post Limit', 'crossfit'),
		// 			'description' => __('Select Post Limit', 'crossfit')
		// 		),

		// 	)
		// ));
		// //end of room section

		// //Section testimonial
		vc_map(array(
			'name' 										=> __('Testimonial', 'crossfit'),
			'description' 						=> __('Write Category Names to show', 'crossfit'),
			'base' 										=> 'testimonial',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Crossfit Content', 'crossfit'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'crossfit'),
					'description' => __('Section Title', 'crossfit')
				),

				array(
					'param_name' 	=> 'category_name',
					'type' 				=> 'textfield',
					'heading' 		=> __('Category Name', 'crossfit'),
					'description' => __('Name separate with comma (,)', 'crossfit')
				),

				array(
					'param_name' 	=> 'post_limit',
					'type' 				=> 'textfield',
					'heading' 		=> __('Number', 'crossfit'),
					'description' => __('Post Number How many to show', 'crossfit')
				),

			)
		));
		//end of testimonial section

	} //end functcrossfit crossfit_vc_element
	add_action('vc_before_init', 'crossfit_vc_element');