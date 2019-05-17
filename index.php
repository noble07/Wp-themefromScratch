<?php get_header(); ?>
  <?php
    if(have_posts()): while (have_posts()): the_post();?>

      <h3><?php the_title(); ?></h3>
      <small>Plublicado el <?php the_time('F j, Y'); ?> a las <?php the_time('g:i a'); ?>, en <?php the_category(); ?></small>
      <p><?php the_content(); ?></p>
      <hr>

    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>