<?php
/*****Define Constants******/
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/assets/img"); 
define( 'CSS', TEMPPATH. "/assets/css"); 
define( 'JS', TEMPPATH. "/assets/js"); 

/*****Register Nav Menu******/
register_nav_menus( array(
	'home' => 'Home Page Menu',
	'footer' => 'Footer Menu',
	'cart' => 'Shopping Cart Menu',
) );

/*****Register Sidebar******/

if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'dir' ),
		'before_widget' => '<section class="bfc section"><div class="bfc item">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
?>