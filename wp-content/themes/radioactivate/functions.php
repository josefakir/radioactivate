<?php 
define("THEME_DIR", get_template_directory_uri());
function enqueue_styles() {
	wp_register_style( 'style',THEME_DIR.'/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'camera',THEME_DIR.'/css/camera.css', array(), '1', 'all' );
	wp_enqueue_style( 'camera' );
}
function enqueue_scripts(){
	wp_enqueue_script( 'jquery' );
	wp_register_script('jquery.mobile.customized.min',THEME_DIR.'/js/jquery.mobile.customized.min.js', array('jquery'), '1', false );
	wp_enqueue_script( 'jquery.mobile.customized.min' );
	wp_register_script('camera',THEME_DIR.'/js/camera.js', array('jquery'), '1', false );
	wp_enqueue_script( 'camera' );
	wp_register_script('jquery-ui',THEME_DIR.'/js/jquery-ui.js', array('jquery'), '1', false );
	wp_enqueue_script( 'jquery-ui' );
	wp_register_script('header-slider',THEME_DIR.'/js/header-slider.js', array('jquery','camera'), '1', false );
	wp_enqueue_script( 'header-slider' );
	wp_register_script('script',THEME_DIR.'/js/script.js', array('jquery'), '1', false );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_theme_support( 'post-thumbnails' );


/* POST TYPE BANNERS */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'bannershome',
    array(
      'labels' => array(
        'name' => __( 'Banners Home' ),
        'singular_name' => __( 'Banner Home' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'thumbnail','title','editor' )
    )
  );
}
?>