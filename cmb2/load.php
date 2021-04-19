<?php

//Funções de Ajuda
function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}

//Carrega os campos personalizados do CMB2
require_once (get_template_directory() . "/cmb2/home.php");
require_once (get_template_directory() . "/cmb2/sobre.php");


//Pro Style.css funcionar

   add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
  function my_theme_enqueue_styles() {
   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
 }
 add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>
