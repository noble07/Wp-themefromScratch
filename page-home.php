<?php get_header(); ?>

  <?php
    $lastBlog = new WP_Query('type=post&posts_per_page=1');
    if($lastBlog->have_posts()): while ($lastBlog->have_posts()): $lastBlog->the_post();
  ?>
      <?php get_template_part('content', get_post_format()); ?>
  
    <?php endwhile;
      wp_reset_postdata();
    ?>
  <?php endif; ?>

  <?php
    if(have_posts()): while (have_posts()): the_post(); ?>

      <?php //Se llama a un template (content-*) dependiendo del formato del post ?>
      <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile; ?>
  <?php endif;
    //Imprimir los otros 2 post no el último
    $args = array(
      'type' => 'post',
      'posts_per_page' => 2,
      'offset' => 1
    );
    $lastBlog = new WP_Query($args);
    if($lastBlog->have_posts()): while ($lastBlog->have_posts()): $lastBlog->the_post();
  ?>
    <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
      wp_reset_postdata();
    ?>
  <?php endif; ?>

  <hr>

  <?php
    //Imprimir solo los de la categoria tutorials (Para filtrar por el nombre de la categoria se utiliza category_name=slug de la categoria)
    $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=7');
    if($lastBlog->have_posts()): while ($lastBlog->have_posts()): $lastBlog->the_post();
  ?>
    <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
      wp_reset_postdata();
    ?>
  <?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>