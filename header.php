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
<body>
<?php 
//Este hook muestra el primer menu creado
//wp_nav_menu();
?>
<?php wp_nav_menu(array(
  'theme_location' => 'primary'
)); ?>
