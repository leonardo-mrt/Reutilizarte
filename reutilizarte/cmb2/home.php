<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');


function cmb2_fields_home() {
  $cmb=new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título Introdução',
    'id' => 'titulo_introducao',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Quote Introdução',
    'id' => 'quote_introducao',
    'type' => 'textarea',
  ]);

  $cmb->add_field([
    'name' => 'Texto: Por que reutilizar?',
    'id' => 'texto_pqreutilizar',
    'type' => 'textarea',
  ]);

  $cmb->add_field([
    'name' => 'Imagem: Por que reutilizar? (400 x 250)',
    'id' => 'img_pqreutilizar',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $artigos_principais = $cmb->add_field([
    'name' => 'Principais Artigos',
    'id' => 'artigos_principais',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Artigo {#}',
      'sortable' => true,
      'add_button' => 'Adicionar Post',
    ],
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Imagem - Artigo (280x204)',
    'id' => 'img',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Categoria - Artigo',
    'desc' => 'Insira o nome da categoria em que o artigo está',
    'id' => 'categoria',
    'type' => 'text',
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Título - Artigo',
    'desc' => 'Título do artigo',
    'id' => 'titulo',
    'type' => 'textarea',
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Autor - Artigo',
    'desc' => "Nome do autor",
    'id' => 'autor',
    'type' => 'text',
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Data da Postagem - Artigo',
    'desc' => 'Data em que foi postado [MES/ANO]',
    'id' => 'data',
    'type' => 'text',
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'Texto - Artigo',
    'desc' => 'Início do artigo (primeiras linhas)',
    'id' => 'texto',
    'type' => 'textarea',
  ]);

  $cmb->add_group_field($artigos_principais, [
    'name' => 'URL - Artigo',
    'id' => 'url',
    'type' => 'text_url',
  ]);
}
?>