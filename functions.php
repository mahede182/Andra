<?php 

	$dom = 'andrea';

/*
**	the basic setup
**	@package setup
*/
	function andrea_setup(){
		add_theme_support( 'custom-header' );
		add_theme_support('automatic_feed_links');
		add_theme_support('post-thumbnails');

		add_image_size( 'andrea featured image', 750, 410, true );//for medium size image
		add_image_size( 'andrea full width image', 1140, 625, true );//for 100% width
		add_image_size('andrea small image', 60, 60, true);//for small thumbnail

		add_theme_support('html5',array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
			'caption',
		));

		add_theme_support('post-formats',array(
			'image','audio','video'
		));

		add_theme_support( 'custom-background',apply_filters( 'andrea_custom_bg', array(
			'default-color' => 'F2F2F2'
		) ) );
		add_theme_support('title-tag');
		add_theme_support('widgets');

		
	}

add_action( 'after_setup_theme','andrea_setup' );

/*
		nav menus
		*/
		if(!function_exists('nav_menus_link')){
			function nav_menus_link(){
				register_nav_menus( array(
			'primary' => __( 'primary Menu',$dom),
			'footer-links' => __( 'Footer links',$dom )
		) );

			}
add_action('after_setup_theme','nav_menus_link');
		}

/*

get link css and js file

*/
function link_css_js(){

	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/open-iconic-bootstrap.min.css');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owl',get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific',get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style('aos',get_template_directory_uri().'/css/aos.css');
    wp_enqueue_style('ionicons',get_template_directory_uri().'/css/ionicons.min.css');
    wp_enqueue_style('datepicker',get_template_directory_uri().'/css/bootstrap-datepicker.css');
    wp_enqueue_style('timepicker',get_template_directory_uri().'/css/jquery.timepicker.css');
    wp_enqueue_style('flaticon',get_template_directory_uri().'/css/flaticon.css');
    wp_enqueue_style('icomoon',get_template_directory_uri().'/css/icomoon.css');
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'font-poppins','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style('font-lora','https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap');
    wp_enqueue_style('font-abril','https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap');
/*

lets strat scripts link

array('jquery') that means after the jquery file.

*/
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('jquerymig',get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'27062020',true);
    wp_enqueue_script('waypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('stellar',get_template_directory_uri().'/js/jquery.stellar.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('aos',get_template_directory_uri().'/js/aos.js',array('jquery'),'27062020',true);
    wp_enqueue_script('animateNumber',get_template_directory_uri().'/js/jquery.animateNumber.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('scrollax',get_template_directory_uri().'/js/scrollax.min.js',array('jquery'),'27062020',true);
    wp_enqueue_script('google',get_template_directory_uri().'/js/google-map.js',array('jquery'),'27062020',true);
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array('jquery'),'27062020',true);
    wp_enqueue_script('googleapis','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',array('jquery'),'27062020',true);

}
add_action('wp_enqueue_scripts','link_css_js');

function primary_menu_massage(){
	echo "Some thing Wrong ! pleaze check your location";
}

function andrea_sidebar(){
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => __( 'Right Sidebar', 'andrea' ),
		'id'            => 'rSidebar',
		'description'   => 'this is Right sidebar',
		'class'         => 'sidebar-box',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="sidebar-heading">',
		'after_title'   => '</h3>',
	);
	
	register_sidebar( $args );
	
}
add_action('after_setup_theme','andrea_sidebar');




//cmb link

require_once('framework/init.php');
require_once('framework/andrea.php');


 ?>