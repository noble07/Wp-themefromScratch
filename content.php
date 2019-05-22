<h3><?php the_title(); ?></h3>
<!-- Se carga la imagen destacada del post -->
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Plublicado el <?php the_time('F j, Y'); ?> a las <?php the_time('g:i a'); ?>, en <?php the_category(); ?></small>
<p><?php the_content(); ?></p>
<hr>