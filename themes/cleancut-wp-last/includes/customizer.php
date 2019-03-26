<?php
	function cc_customize_register($wp_customize)
	{
		// Add section
		$wp_customize->add_section('showcase', [
			'title' => __('Showcase', 'cc'),
			'description' => sprintf(__('Options for home page showcase')),
			'priority' => 130
		]);


		// Custom background
		// Custom background setting
		$wp_customize->add_setting('showcase_background', [
			'default' => get_template_directory_uri() . '/img/showcase.jpg'
		]);

		// Custom background control
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'showcase_background',
				[
					'label' => __('Background Image', 'cc'),
					'section' => 'showcase',
					'settings' => 'showcase_background'
				]
			)
		);


		/*------------------------------------------------------------------------------*/
		// Setting for the showcase heading
		$wp_customize->add_setting('showcase_heading', [
			'default' => __('Showcase Heading', 'cc'),
			'type' => 'theme_mod'
		]);

		// Control for the showcase heading
		$wp_customize->add_control('showcase_heading', [
			'label' => 'Showcase Heading',
			'section' => 'showcase',
			'priority' => 20
		]);

		/*------------------------------------------------------------------------------*/
		// Setting for the showcase text
		$wp_customize->add_setting('showcase_text', [
			'default' => __('Showcase Text'),
			'type' => 'theme_mod'
		]);

		// Control for the showcase text
		$wp_customize->add_control('showcase_text', [
			'label' => 'Showcase Text',
			'section' => 'showcase',
			'priority' => 20
		]);

		/*------------------------------------------------------------------------------*/
		// Add setting for the first button text
		$wp_customize->add_setting('first_button', [
			'default' => _x('Facebook', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the first button text
		$wp_customize->add_control('first_button', [
			'label' => __('First Button Text', 'cc'),
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the first button url
		$wp_customize->add_setting('first_button_url', [
			'default' => 'https://www.facebook.com',
			'type' => 'theme_mod'
		]);

		// Add control for the first button url
		$wp_customize->add_control('first_button_url', [
			'label' => 'First Button URL',
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the first button icon
		$wp_customize->add_setting('first_button_icon', [
			'default' => 'fa fa-facebook',
			'type' => 'theme_mod'
		]);

		// Add control for the first button icon
		$wp_customize->add_control('first_button_icon', [
			'label' => 'First Button Icon',
			'section' => 'showcase',
			'priority' => 20
		]);


		/*----------------------------------------------------------*/

		// Add setting for the second button text
		$wp_customize->add_setting('second_button', [
			'default' => _x('Twitter', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the second button text
		$wp_customize->add_control('second_button', [
			'label' => __('Second Button Text', 'cc'),
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the second button url
		$wp_customize->add_setting('second_button_url', [
			'default' => 'https://www.twitter.com',
			'type' => 'theme_mod'
		]);

		// Add control for the second button url
		$wp_customize->add_control('second_button_url', [
			'label' => 'Second Button URL',
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the second button icon
		$wp_customize->add_setting('second_button_icon', [
			'default' => 'fa fa-twitter',
			'type' => 'theme_mod'
		]);

		// Add control for the second button icon
		$wp_customize->add_control('second_button_icon', [
			'label' => 'Second Button Icon',
			'section' => 'showcase',
			'priority' => 20
		]);



		/*----------------------------------------------------------*/
		// Add setting for the second button text
		$wp_customize->add_setting('third_button', [
			'default' => _x('LinkedIn', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the second button text
		$wp_customize->add_control('third_button', [
			'label' => __('Third Button Text', 'cc'),
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the second button url
		$wp_customize->add_setting('third_button_url', [
			'default' => 'https://www.linkedin.com',
			'type' => 'theme_mod'
		]);

		// Add control for the second button url
		$wp_customize->add_control('third_button_url', [
			'label' => 'Third Button URL',
			'section' => 'showcase',
			'priority' => 20
		]);


		// Add setting for the second button icon
		$wp_customize->add_setting('third_button_icon', [
			'default' => 'fa fa-linkedin',
			'type' => 'theme_mod'
		]);

		// Add control for the second button icon
		$wp_customize->add_control('third_button_icon', [
			'label' => 'Third Button Icon',
			'section' => 'showcase',
			'priority' => 20
		]);















		/*-------------------------------------------------------------------------------------------*/
		// Banner section
		$wp_customize->add_section('banner', [
			'title' => __('Banner', 'c'),
			'description' => sprintf(__('Options for the banner area', 'cc')),
			'priority' => 140
		]);


		// Banner background setting
		$wp_customize->add_setting('banner_background', [
			'default' => get_template_directory_uri() . '/img/showcase.jpg'
		]);

		// Banner background control
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'banner_background',
				[
					'label' => __('Background Image', 'cc'),
					'section' => 'banner',
					'settings' => 'banner_background'
				]
			)
		);

		// Banner text setting
		$wp_customize->add_setting('banner_text', [
			'default' => 'Our social links',
			'type' => 'theme_mod'
		]);

		// Banner text control
		$wp_customize->add_control('banner_text', [
			'label' => 'Banner Text',
			'section' => 'banner',
			'priority' => 20
		]);





		// Add setting for the first button text
		$wp_customize->add_setting('first_banner_button', [
			'default' => _x('Facebook', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the first button text
		$wp_customize->add_control('first_banner_button', [
			'label' => __('First Button Text', 'cc'),
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the first button url
		$wp_customize->add_setting('first_banner_button_url', [
			'default' => 'https://www.facebook.com',
			'type' => 'theme_mod'
		]);

		// Add control for the first button url
		$wp_customize->add_control('first_banner_button_url', [
			'label' => 'First Button URL',
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the first button icon
		$wp_customize->add_setting('first_banner_button_icon', [
			'default' => 'fa fa-facebook',
			'type' => 'theme_mod'
		]);

		// Add control for the first button icon
		$wp_customize->add_control('first_banner_button_icon', [
			'label' => 'First Button Icon',
			'section' => 'banner',
			'priority' => 20
		]);


		/*----------------------------------------------------------*/

		// Add setting for the second button text
		$wp_customize->add_setting('second_banner_button', [
			'default' => _x('Twitter', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the second button text
		$wp_customize->add_control('second_banner_button', [
			'label' => __('Second Button Text', 'cc'),
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the second button url
		$wp_customize->add_setting('second_banner_button_url', [
			'default' => 'https://www.twitter.com',
			'type' => 'theme_mod'
		]);

		// Add control for the second button url
		$wp_customize->add_control('second_banner_button_url', [
			'label' => 'Second Button URL',
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the second button icon
		$wp_customize->add_setting('second_banner_button_icon', [
			'default' => 'fa fa-twitter',
			'type' => 'theme_mod'
		]);

		// Add control for the second button icon
		$wp_customize->add_control('second_banner_button_icon', [
			'label' => 'Second Button Icon',
			'section' => 'banner',
			'priority' => 20
		]);



		/*----------------------------------------------------------*/
		// Add setting for the second button text
		$wp_customize->add_setting('third_banner_button', [
			'default' => _x('LinkedIn', 'cc'),
			'type' => 'theme_mod'
		]);

		// Add control for the second button text
		$wp_customize->add_control('third_banner_button', [
			'label' => __('Third Button Text', 'cc'),
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the second button url
		$wp_customize->add_setting('third_banner_button_url', [
			'default' => 'https://www.linkedin.com',
			'type' => 'theme_mod'
		]);

		// Add control for the second button url
		$wp_customize->add_control('third_banner_button_url', [
			'label' => 'Third Button URL',
			'section' => 'banner',
			'priority' => 20
		]);


		// Add setting for the second button icon
		$wp_customize->add_setting('third_banner_button_icon', [
			'default' => 'fa fa-linkedin',
			'type' => 'theme_mod'
		]);

		// Add control for the second button icon
		$wp_customize->add_control('third_banner_button_icon', [
			'label' => 'Third Button Icon',
			'section' => 'banner',
			'priority' => 20
		]);














		/*----------------------------------------------------------*/
		// Add section for misc
		$wp_customize->add_section('misc', [
			'title' => 'Misc',
			'description' => sprintf(__('Misc settings options')),
			'priority' => 130
		]);


		// Add setting for the animation
		$wp_customize->add_setting('animation', [
			'default' => '1'
		]);

		// Add control for the animation
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'animation',
				[
					'label' => __('Enable animation', 'cc'),
					'section' => 'misc',
					'settings' => 'animation',
					'type' => 'checkbox'
				]
			)
		);
	}

	add_action('customize_register', 'cc_customize_register');