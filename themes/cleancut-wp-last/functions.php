<?php
	require_once("includes/wp-bootstrap-navwalker.php");

	// General theme setup
	function cc_theme_setup()
	{
		register_nav_menus([
			'primary' => 'Primary',
			'secondary' => 'Secondary'
		]);

		add_theme_support('post-thumbnails');

		add_theme_support('post-formats', [
			'aside',
			'gallery'
		]);
	}

	add_action('after_setup_theme', 'cc_theme_setup');


	
	// Widgetizing
	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div class="well animated fadeInRight sidebar-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);

		register_sidebar([
			'name' => 'Subnav',
			'id' => 'subnav',
			'before_widget' => '<div class="subnav">',
			'after_widget' => '</div>',
			'before_title' => '<div class="hide">',
			'after_title' => '</div>'
		]);

		register_sidebar([
			'name' => 'Bottom',
			'id' => 'bottom',
			'before_widget' => '<div class="section-a animated fadeInUp">',
			'after_widget' => '</div>',
			'before_title' => '<div class="hide">',
			'after_title' => '</div>'
		]);
	}

	add_action('widgets_init', 'init_widgets');


	// Set new excerpt length
	function set_excerpt_length()
	{
		return 20;
	}
	add_filter('excerpt_length', 'set_excerpt_length');


	// Remove [...] from the_excerpt()
	function new_excerpt_more($more) {
	    return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');



	// Get the parent page
	function get_top_parent()
	{
		global $post;
		if ($post->post_parent) {
			$ancestors = get_post_ancestors($post->ID);
			return $ancestors[0];
		}

		return $post->ID;
	}

	// Require customizer
	require_once("includes/customizer.php");