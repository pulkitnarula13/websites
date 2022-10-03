<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'portfoliokapil' ) ) :
 
   function portfoliokapil() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     register_nav_menus( array(
      'primary-menu' => 'Primary Menu',
      'menu-social' => 'Social Menu',
      'menu-footer' => 'Secondary Menu'
      
      
   ) );
   }
 
endif;
 
add_action('after_setup_theme', 'portfoliokapil');
 
function THEMENAME_scripts_styles(){
   wp_enqueue_style('THEMENAME_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style( 'portfoliokapil_style-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
   wp_enqueue_style( 'portfoliokapil_style_google_fonts', 'https://fonts.googleapis.com/css2?family=Shalimar&family=Lato',  array(), null);
   wp_enqueue_style( 'portfoliokapil_style-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
  
}
 
add_action('wp_enqueue_scripts', 'THEMENAME_scripts_styles');