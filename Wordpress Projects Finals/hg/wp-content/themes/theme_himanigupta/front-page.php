<?php get_header(); ?>
<section class="section-solatSystem">
<?php

$category_query = new WP_Query (
  array (
      'category_name'     =>  'solar-system'
  )
);

if ( $category_query -> have_posts() ) :
  while ( $category_query -> have_posts() ) :
    $category_query -> the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none');
endif;
?>
</section>
<?php get_footer(); ?>
