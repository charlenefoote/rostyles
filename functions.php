<?php 

//---- Enqueue Styles & Scripts ----//


function theme_styles()  
{ 
  wp_register_style( 'style', 
  	get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_scripts() {
	
	wp_enqueue_script(
		'jquerylibrary',
		'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'
	);
	wp_enqueue_script(
		'waypoints',
		get_template_directory_uri() . '/js/waypoints.min.js',
		array( 'jquery' )
	);
	
	wp_enqueue_script(
		'scripts',
		get_template_directory_uri() . '/js/scripts.js',
		array( 'jquery' ),
		false,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//---- Thumbnail Support ----//

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // Normal post thumbnails
	add_image_size('slider', 350, 300, true );
	add_image_size('blog', 439, 9999, true );
	add_image_size('cart-thumbnail', 40, 40, true );
	add_image_size('small-post-thumbnail', 136, 96, true );
	add_image_size('widget-thumbnail', 260, 9999);
}

//---- Register Navs ----//

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Main Menu' ),
      'secondary' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//---- Register Sidebars ----//

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'footer-sidebar',
		'name' => 'Footer Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => 'Blog Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}

?>