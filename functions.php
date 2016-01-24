<?php

function theme_styles(){
		
		wp_enqueue_style( 'style', get_stylesheet_directory_uri());
		wp_enqueue_script( 'myjs',get_template_directory_uri() . '/js/myjs.js' , array('jquery')); 
    wp_enqueue_script( 'wow.min',get_template_directory_uri() . '/js/wow.min.js' , array('jquery')); 

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_theme_support( 'post-thumbnails' ); 
add_action( 'init', 'create_post_type' );
function create_post_type() {
  // register_post_type( 'photos',
  //   array(
  //     'labels' => array(
  //       'name' => __( 'Photos' ),
  //       'singular_name' => __( 'Photos' ),
        
  //     ),
  //     'public' => true,
  //     'has_archive' => true,
  //     'hierarchical' => true,
  //     'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
  //     'taxonomies' => array('category'),
       
  //         'rewrite' => array( 'slug' => 'photos' ),
  //   )
  // );
  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' ),
        
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
      'taxonomies' => array('category'),
       
          'rewrite' => array( 'slug' => 'news' ),
    )
  );
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Events' ),
        
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
      'taxonomies' => array('category'),
       
          'rewrite' => array( 'slug' => 'events' ),
    )
  );
  // register_post_type( 'music',
  //   array(
  //     'labels' => array(
  //       'name' => __( 'Music' ),
  //       'singular_name' => __( 'Music' ),
        
  //     ),
  //     'public' => true,
  //     'has_archive' => true,
  //     'hierarchical' => true,
  //     'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
  //     'taxonomies' => array('category'),
       
  //         'rewrite' => array( 'slug' => 'music' ),
  //   )
  // );
    register_post_type( 'photos',
    array(
      'labels' => array(
        'name' => __( 'Photos' ),
        'singular_name' => __( 'Photos' ),
        
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
      'taxonomies' => array('category'),
       
          'rewrite' => array( 'slug' => 'photos' ),
    )
  );
register_post_type( 'music',
    array(
      'labels' => array(
        'name' => __( 'Music' ),
        'singular_name' => __( 'Music' ),
        
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array('title','editor','page-attributes','thumbnail','templates','custom-fields'),
      'taxonomies' => array('category'),
       
          'rewrite' => array( 'slug' => 'music' ),
    )
  );
}
add_action( 'init', 'create_post_type' );
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Homepage Sidebar',
'id' => 'homepage-sidebar',
'description' => 'Appears as the sidebar on the custom homepage',
'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}





