<?php
/*Se imprimen los estilos y los scripts mediante estos hooks*/
function scratch_script_enqueue() {
  //Se ponen en cola los estilos
  wp_enqueue_style('customstyle', get_template_directory_uri().'/library/css/style.css', array(), '1.0.0', 'all');
  //Se ponen en cola los scripts
  wp_enqueue_script('customscript', get_template_directory_uri().'/library/js/app.js', array(), '1.0.0', true);

}
//Hook para ejecutar la función cuando Wordpress pone en cola a los scrips
add_action( 'wp_enqueue_scripts', 'scratch_script_enqueue');

/*
  Las caracteristicas del tema se tiene que activar 'after_setup_theme' o 'init'
*/
function scratch_theme_setup(){
  //Se añade la caracteristica de menu
  add_theme_support('menus');
  //add_theme_support se utiliza para añadir caracteristicas al administrador

  //Se crea un Custom menu
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secundary', 'Footer Navigation');
}

add_action('init', 'scratch_theme_setup');

//Se utiliza el hook para agregar la funcionalidad de insertar imagenes de fondo personalizadas
add_theme_support('custom-background');
//Se utiliza el hook para agregar la funcionalidad de insertar imagenes de cabecera personalizadas
add_theme_support('custom-header');
//Se utiliza el hook para agregar la funcionalidad de insertar imagenes destacadas en los post
add_theme_support('post-thumbnails');