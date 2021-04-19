<?php
// Template Name: Home
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- INÍCIO - INTRODUÇÃO -->
    <section class="introducao">
      <div class="container">
        <h1 class="grid-16"><?php echo get_post_meta(get_the_ID(), 'titulo_introducao', true);?></h1>
         <blockquote class="quote-externo">
           <p>
           <?php echo get_post_meta(get_the_ID(), 'quote_introducao', true);?>
           </p>
         </blockquote>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->

    <!-- INÍCIO - POR QUE REUTILIZAR? -->
    <article class="texto1_reutilizar">
      <div class="container">
        <div>
          <h2 class="grid-9 subtitulo-interno">Por que reutilizar?</h2>
          <p class="grid-9">
          <?php echo get_post_meta(get_the_ID(), 'texto_pqreutilizar', true);?>
          </p>
        </div>
        <img src=" <?php echo get_post_meta(get_the_ID(), 'img_pqreutilizar', true);?>" alt="Reutilizar" class="grid-7">
    </article>
    <!-- FIM - POR QUE REUTILIZAR? -->

    <!-- INÍCIO - PRINCIPAIS ARTIGOS -->
    <section class="artigos">

      <div class="container">
        <h2 class="grid-16 subtitulo-interno">Principais Artigos</h2>
      </div> 
      
      <!-- INÍCIO - ARTIGO 1 -->

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
    
    <!-- FIM - PRINCIPAIS ARTIGOS -->

<?php endwhile; else: endif; ?>    
<?php get_footer(); ?>
    
 