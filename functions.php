<?php
/*-----------------------------------------------------------------------------------*/
/* This file will be referenced every time a template/page loads on your Wordpress site
/* This is the place to define custom fxns and specialty code
/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'CUSTOM_THEME', 1.0 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

// Register Custom Navigation Walker
require_once('includes/wp-bootstrap-navwalker.php');

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
	'primary'	=>	__( 'Primary Menu', 'ct' ), // Register the Primary menu
	// Copy and paste the line above right here if you want to make another menu, 
	// just change the 'primary' to another name
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enable Carbon Fields Plugin - Install plugin here: https://carbonfields.net/zip/v3.2.1/
/*-----------------------------------------------------------------------------------*/

function crb_load() {
	require_once dirname(__FILE__) . '/includes/post-meta.php';
}
add_action( 'after_setup_theme', 'crb_load' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function ct_scripts()  { 

  wp_enqueue_style('ct-font-awesome', get_template_directory_uri() . '/app/stylesheets/vendors/font-awesome.min.css');
  wp_enqueue_style('ct-owl-carousel-style', get_template_directory_uri() . '/app/stylesheets/vendors/owl.carousel.min.css');
  wp_enqueue_style('ct-fancybox-style', get_template_directory_uri() . '/app/stylesheets/vendors/jquery.fancybox.min.css');
  wp_enqueue_style('ct-raleway-style', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	wp_enqueue_style('ct-main-style', get_template_directory_uri() . '/app/stylesheets/main.css');

  wp_enqueue_script('ct-jquery', get_template_directory_uri() . '/app/javascripts/vendors/jquery.min.js');
  wp_enqueue_script('ct-owl-carousel', get_template_directory_uri() . '/app/javascripts/vendors/owl.carousel.min.js');
  wp_enqueue_script('ct-fancybox', get_template_directory_uri() . '/app/javascripts/vendors/jquery.fancybox.min.js');
  wp_enqueue_script('ct-match-height', get_template_directory_uri() . '/app/javascripts/vendors/jquery.matchHeight-min.js');
	wp_enqueue_script('ct-bootstrap-js', get_template_directory_uri() . '/app/javascripts/vendors/bootstrap.min.js');
	wp_enqueue_script('ct-main-script', get_template_directory_uri() . '/app/javascripts/main.js');

}
add_action( 'wp_enqueue_scripts', 'ct_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
