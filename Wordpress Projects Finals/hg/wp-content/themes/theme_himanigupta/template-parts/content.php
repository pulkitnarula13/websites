<?php ?>
<article <?php post_class(); ?>>

  <h3 class="entry-title"> 
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>

  <div class="entry-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>

  <div class="entry-content">
    <?php
      if ( !is_single() ) :
        the_excerpt();
      else :
        the_content();
      endif;
    ?>
  </div> <!-- end of entry-content -->
</article>