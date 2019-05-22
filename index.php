<?php get_header(); ?>
  <?php
    if(have_posts()): while (have_posts()): the_post(); ?>

      <?php //Se llama a un template (content-*) dependiendo del formato del post ?>
      <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile; ?>
  <?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>