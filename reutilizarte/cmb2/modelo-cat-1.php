<?php 

add_action('cmb2_admin_init', 'cmb2_fields_categoria');


function cmb2_fields_categoria() {
  $cmb = new_cmb2_box([
    'id' => 'categoria_box',
    'title' => 'Categoria',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-modelo-cat-1.php',
    ],
  ]); 
  
  $cmb->add_field([
    'name' => 'Título Introdução',
    'id' => 'titulo_introducao',
    'desc' => 'Título da Categoria',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Introdução',
    'id' => 'img_introducao',
    'desc' => 'Imagem do background do titulo (1400x250)',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Destaque 1',
    'id' => 'img_destaque_1',
    'desc' => 'Imagem do Destaque 1 (esquerda)',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Texto Destaque 1',
    'id' => 'text_destaque_1',
    'desc' => 'Texto do Destaque 1 (esquerda)',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'URL Destaque 1',
    'id' => 'url_destaque_1',
    'desc' => 'URL do Destaque 1 (direita)',
    'type' => 'text_url',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Destaque 2',
    'id' => 'img_destaque_2',
    'desc' => 'Imagem do Destaque 2 (direita)',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Texto Destaque 2',
    'id' => 'text_destaque_2',
    'desc' => 'Texto do Destaque 2 (direita)',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'URL Destaque 2',
    'id' => 'url_destaque_2',
    'desc' => 'URL do Destaque 2 (direita)',
    'type' => 'text_url',
  ]);

  $cmb->add_field([
    'name' => 'Imagem Destaque 3',
    'id' => 'img_destaque_3',
    'desc' => 'Imagem do Destaque 3 (direita)',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_field([
    'name' => 'Texto Destaque 3',
    'id' => 'text_destaque_3',
    'desc' => 'Texto do Destaque 3 (direita)',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'URL Destaque 3',
    'id' => 'url_destaque_3',
    'desc' => 'URL do Destaque 3 (direita)',
    'type' => 'text_url',
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

  $numero_paginas = $cmb->add_field([
    'name' => 'Páginas',
    'id' => 'numero_paginas',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Página {#}',
      'add_button' => 'Adicionar Número de Página',
    ],
  ]);

  $cmb->add_group_field($numero_paginas, [
    'name' => 'Numero',
    'id' => 'numero_pagina',
    'type' => 'text',
  ]);

  $cmb->add_group_field($numero_paginas, [
    'name' => 'Link da página',
    'id' => 'link_pagina',
    'type' => 'text_url',
  ]);

}
?>
