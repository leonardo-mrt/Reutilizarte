<?php

add_action('cmb2_admin_init', 'cmb2_fields_contato');


function cmb2_fields_contato() {
  $cmb=new_cmb2_box([
    'id' => 'contato_box',
    'title' => 'Contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Introdução',
    'id' => 'titulo_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Texto Contato',
    'id' => 'text',
    'type' => 'wysiwyg',
  ]);
  
}

?>