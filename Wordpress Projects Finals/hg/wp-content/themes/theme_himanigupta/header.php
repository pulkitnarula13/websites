<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="site-branding">
  
    <?php the_custom_logo(); ?>
  
      <h1 class="site-title">
        <a href="<?php home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>

  
  </div> <!-- .site-branding ends here -->

  <div class="site-navigation">
  <?php 
        wp_nav_menu( array(
            'theme_location'    => 'menu-header',
            'container'         => 'nav',
            'container_class'   => 'menu-container',
            'menu_class'        => 'main-menu circleBehind'
        ) ); 
    ?>

  </div> <!-- .site-navigation ends here -->

</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">