<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Theme from Scratch</title>
  <?php //Imprime los estilos de la funcion con este hook ?>
  <?php wp_head(); ?>
</head>
<?php 
  if (is_front_page()):
    $scratch_classes = array('scratch-class', 'my-class');
  else:
    $scratch_classes = array('not-scratch-class');
  endif;
?>
<body <?php body_class($scratch_classes); ?> >
<?php 
//Este hook muestra el primer menu creado
//wp_nav_menu();
?>
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
<!-- Se carga la imagen de la cabezera personalizada -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
