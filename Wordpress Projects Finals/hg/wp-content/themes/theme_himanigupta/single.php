<?php 
get_header();
?>
</main>
<article <?php post_class(); ?>>
  <h1 class="entry-title"> 
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h1>

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
  </div>
</article>
<?php 
get_footer();
?>