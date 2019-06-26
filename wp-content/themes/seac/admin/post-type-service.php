<?php
function register_post_type_service_init() {
  $labels = array(
    'name' 					=> _x( 'Services','post type general name','pwd'),
    'singular_name' 		=> _x( 'Service','post type general name','pwd'),
    'add_new' 				=>  __( 'Add New','pwd'),
    'add_new_item' 			=>  __( 'Add New Service','pwd'),
    'edit_item' 			=>  __( 'Edit Service','pwd'),
    'new_item' 				=>  __( 'New Service','pwd'),
    'all_items' 			=>  __( 'All Services','pwd'),
    'view_item' 			=>  __( 'View Service','pwd'),
    'search_items' 			=>  __( 'Search Services','pwd'),
    'not_found' 			=>  __( 'No services found','pwd'),
    'not_found_in_trash' 	=>  __( 'No services found in Trash', 'pwd'),
    'menu_name' 			=>  __( 'Services','pwd')
  );
  $args = array(
    'labels' 				=> $labels,
    'public' 				=> true,
    'publicly_queryable' 	=> true,
    'show_ui' 				=> true, 
    'show_in_menu' 			=> true, 
    'query_var' 			=> true,
    'rewrite' 				=> array( 'slug' => 'service' ),
    'capability_type' 		=> 'page',
    'has_archive' 			=> true, 
    'hierarchical' 			=> true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-hammer',
    'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt','page-attributes' )
  ); 
  register_post_type( 'service', $args );
}
add_action( 'init', 'register_post_type_service_init' );
?>