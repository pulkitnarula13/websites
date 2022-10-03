<?php
if ( ! function_exists( 'theme_himanigupta' ) ) :
 
    function theme_himanigupta() {
      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'custom-logo' , array(
        'height'      => 800,
        'width'       => 800,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
      ) );


      register_nav_menus( array(
       'menu-header'  => 'Header Menu',
       'menu-footer'    => 'Footer Menu',
      ) );
   }
 
endif;
 
add_action('after_setup_theme', 'theme_himanigupta');
function theme_himanigupta_custom_logo_setup() {
   $defaults = array(
       'height'               => 60,
       'width'                => 50,
       'unlink-homepage-logo' => false, 
   );

   
   add_action('after_setup_theme', 'theme_himanigupta_custom_logo_setup');
}
 
function theme_himani_scripts_styles(){
   wp_enqueue_style('theme_himani_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style('theme_himani_googlefonts' ,'https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&family=Poppins', array(), null );
   wp_enqueue_style('theme_himani_style_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
 
add_action('wp_enqueue_scripts', 'theme_himani_scripts_styles');
