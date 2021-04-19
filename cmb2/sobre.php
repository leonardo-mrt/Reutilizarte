<?php

add_action('cmb2_admin_init', 'cmb2_fields_sobre');


function cmb2_fields_sobre() {
  $cmb = new_cmb2_box([
    'id' => 'sobre_box',
    'title' => 'Sobre',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Introdução',
    'id' => 'titulo_introducao',
    'desc' => 'Título da página',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Texto Sobre',
    'id' => 'text',
    'desc' => 'Texto sobre o grupo',
    'type' => 'wysiwyg',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Equipe',
    'id' => 'img',
    'type' => 'file',
  ]);

}
?>