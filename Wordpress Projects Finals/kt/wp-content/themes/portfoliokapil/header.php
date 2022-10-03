<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title><?php bloginfo('name') ;?></title>
    <?php wp_head(); ?>
</head>
<body>
     <div id="page" class="page">

        <header class="site-header">

            
                 <div  class="site-descriptiion" >
                 <div class="h1-title"><a href="<?php echo home_url(); ?>" ><h1><?php bloginfo('name'); ?></h1></a>
                 <navbar class="menu-main">
                 <?php
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'container'      => 'nav',
						'container_class' => 'menu-container',
						'menu_class'      => 'main-menu',
            
					) );
					?>
                    </navbar>
                </div>
                 
                 <div class="logo"></div>
                
                

            

                
            </div>

           
          
</div>  
           
 
        </header>
        <div class="site-content">