<?php
// Template Name: Modelo Categoria (pg1)
?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- INÍCIO - INTRODUÇÃO -->
    <style type="text/css">
      .interna-cat-embalagens{
        background: url("<?php echo get_field('img_introducao'); ?>") no-repeat center;
        background-size: cover;
        margin-top: 79px;
      }
      .destaques p {margin-bottom:-28px}
      .destaques-dir img{margin-bottom:0}
      .destaques-dir img:nth-of-type(1){margin-bottom:0px}

      /* Mudar CSS Apenas no OPERA*/
      @media all and (-webkit-min-device-pixel-ratio:10000), not all and (-webkit-min-device-pixel-ratio:0) {
       .destaques-dir p{margin-bottom: -2px}
      }
      
      </style>
      
    <section class="introducao-interna interna-cat-embalagens">
      <div class="container">
        <h1 class="grid-16"><?php echo get_field('titulo_introducao')?></h1>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->

    <!-- INÍCIO - DESTAQUES -->
    <section class="container destaques">

        <div class="grid-8 destaques-esq">
          <div>
          <a href="<?php echo get_field('url_destaque_1')?>"><img src="<?php echo get_field('img_destaque_1');?>" alt="destaque-1"></a>
          <p><?php echo get_post_meta(get_the_ID(), 'text_destaque_1', true);?>[...]</p>
          </div>
        </div>

        <div class="grid-8 destaques-dir">
          <div>
            <div>
              <a href="<?php echo get_field('url_destaque_2')?>"><img src="<?php echo get_field('img_destaque_2');?>" alt=""></a>
              <p><?php echo get_post_meta(get_the_ID(), 'text_destaque_2', true);?>[...]</p>
            </div>
            <div>
              <a href="<?php echo get_field('url_destaque_3')?>"><img class="destaque-3" src="<?php echo get_field('img_destaque_3');?>" alt="destaque-3"></a>
              <p><?php echo get_post_meta(get_the_ID(), 'text_destaque_3', true);?>[...]</p>
            </div>
          </div>
        </div>
    </section>
    <!-- FIM - DESTAQUES -->
    
    <!-- INÍCIO - PRINCIPAIS ARTIGOS -->
    <section class="artigos">

      <div class="container">
        <h2 class="grid-16 sub-interno-cat">Artigos</h2>
      </div> 
      
      <ul>
        <?php
          $artigos_principais = get_field('artigos_principais');
          if (isset($artigos_principais)) { foreach ($artigos_principais as $artigos_p) { 
        ?>
    
        <li>
          <div class="container mod-artigo">
            <div class="img-artigo">
              <a href="<?php echo $artigos_p['url']; ?>">
                <img src="<?php echo $artigos_p['img']; ?>" alt="Imagem" class="grid-5">
              </a>
            </div>

            <div class="text-artigo grid-11">
              <h3 class="categoria-artigo"><?php echo $artigos_p['categoria']; ?></h3>
              <a href="<?php echo $artigos_p['url']; ?>"><h2 class="titulo-artigo"><?php echo $artigos_p['titulo']; ?> </h2></a>
              <p class="autor-artigo">Por <?php echo $artigos_p['autor']; ?> em <?php echo $artigos_p['data']; ?></p>
              <p class="previa-artigo"><?php echo $artigos_p['texto']; ?> [...]</p>
              <a href="<?php echo $artigos_p['url']; ?>" class="btn-leia_mais">leia mais</a>
            </div>
          </div>
        </li>
        <?php } } ?>
        
      </ul>
      <nav class="container nav-cat-pgs">
        <ul class="grid-16">
        <?php
          $numero_paginas = get_field('numero_paginas');
          if (isset($numero_paginas)) { foreach ($numero_paginas as $npagina) { 
        ?>
          <li><a class="nav-cat-pgs nav-cat-pgs-ativo" href="<?php echo $npagina['link_pagina']; ?>" ><?php echo $npagina['numero_pagina'];?></a></li>
        </ul>
        <?php } } ?>
      </nav>
    </section>
    <!-- FIM - ARTIGO 5 -->
    
    <!-- FIM - PRINCIPAIS ARTIGOS -->


<?php endwhile; else: endif; ?>
<?php get_footer(); ?>