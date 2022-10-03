<?php 

get_header(); 
?>


<div class="Profile-img">  
<div class="image-kapil"></div>




 <div class="signature"></div>


<h2>WEB AND MOBILE APPLICATION DEVELOPER</h3>


</div>
<div class="bigcont">
</div>
<div  id="info"class="h3-heading"><h3>INFORMATION</h3></div>

<div class="post-images">


<?php

if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.
        ?>
        <div class="cont">
        <a  href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
        <div class="heading3"><h3><?php the_title(); ?></h3></div>
      </div>
        <?php
      endif;
    endwhile;
  endif;
  

?>


</div>
<?php
get_footer();
?>