<?php
	 register_nav_menus( array(
		 'primary' => __( 'Primary Menu'),
		 'secondary' => __( 'Secondary Menu'),
		 ) );
	register_sidebar( array(
	    'id'          => 'right-sidebar',
	    'name'        => __( 'Right Sidebar'),
	    'description' => __( 'This sidebar is located above on the right.'),
) );

	function responsive_scripts_basic()
		{
		//register scripts for our theme
			wp_register_script('foundation-mod', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), true );
			wp_register_script('foundation-main', get_template_directory_uri() . '/js/foundation.js', true );
			wp_register_script('foundation-app', get_template_directory_uri() . '/js/jquery.js', true );
			wp_enqueue_script( 'foundation-mod' );
			wp_enqueue_script( 'foundation-main' );
			wp_enqueue_script( 'foundation-app' );
		}
		add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );

		function responsive_styles()
		{
		    //register styles for our theme
		    wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.css', array(), 'all' );
		    wp_register_style( 'foundation-appstyle', get_template_directory_uri() . '/css/app.css', array(), 'all');
		    wp_enqueue_style( 'foundation-style' );
		    wp_enqueue_style( 'foundation-appstyle' );
		}
		add_action( 'wp_enqueue_scripts', 'responsive_styles' );
?>