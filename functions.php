<?php

function add_files() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js');
	wp_enqueue_script('my_scripts', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'add_files' );

function post_has_archive($args, $post_type) {
  if('post'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='products';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

add_theme_support('post-thumbnails');
add_theme_support('menus');
