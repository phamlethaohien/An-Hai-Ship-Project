<?php get_header(); ?>

<main id="main">
  <?php
  if( have_posts() ) {
    while( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/archive/content', 'archive' );
    }
  }
  ?>
</main>

<?php get_footer(); ?>