<?php 
if(!function_exists('godream_theme_setup')){
	function godream_theme_setup(){
		add_theme_support( 'custom-logo' );

		register_nav_menu('primary-menu',__('Primary Menu'));

		add_theme_support('custom-background');

		add_theme_support( 'post-thumbnails' );

		register_sidebar( array(
			'name'          => 'Right Sidebar',
			'id'            => 'right-sidebar',
			'description'   => 'this is right sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		));
	}
	}
	add_action( 'after_setup_theme', 'godream_theme_setup' );

function itc_enqueue_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style('main-style',get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/css/all.css' );
	/*wp_enqueue_style( 'jquery-ui.css', get_template_directory_uri() . '/libs/css/jquery-ui.css' );*/
	/*wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );*/
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
	wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_script( 'jquery-3.4.1',get_template_directory_uri().'/js/jquery-3.4.1.min.js');
	/*wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array(), '1.0.0', true );*/
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/owlcarousel/dist/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery.countTo.js', get_template_directory_uri() . '/js/jquery.countTo.js', array(), '1.0.0', true );
	/*wp_enqueue_script( 'jquery-ui.js', get_template_directory_uri() . '/libs/js/jquery-ui.js', array(), '', true );*/
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'itc_enqueue_scripts');
