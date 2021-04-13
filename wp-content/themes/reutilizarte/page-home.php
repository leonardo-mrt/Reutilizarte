<?php
// Template Name: Home
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- INÍCIO - INTRODUÇÃO -->
    <section class="introducao">
      <div class="container">
        <h1 class="grid-16">reutilize - reduza - recicle</h1>
         <blockquote class="quote-externo">
           <p>
             "Não existe jogar fora, todo lixo que você produz continua em algum lugar do mundo"
           </p>
         </blockquote>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->

    <!-- INÍCIO - POR QUE REUTILIZAR? -->
    <article class="texto1_reutilizar">
      <div class="container">
        <div>
          <h2 class="grid-9 subtitulo-interno">por que reutilizar?</h2>
          <p class="grid-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. Quis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis elementum nibh tellus molestie nunc non. Augue lacus viverra vitae congue eu. Amet massa vitae tortor condimentum. Libero justo laoreet sit amet. Sed augue lacus viverra vitae. Sagittis eu volutpat odio facilisis mauris sit amet. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Donec et odio pellentesque diam volutpat commodo. Ipsum faucibus vitae aliquet nec ullamcorper sit. Turpis egestas maecenas pharetra convallis posuere morbi leo urna.
          </p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?> /img/Home/home-img-00.jpg" alt="Reutilizar" class="grid-7">
    </article>
    <!-- FIM - POR QUE REUTILIZAR? -->

    <!-- INÍCIO - PRINCIPAIS ARTIGOS -->
    <section class="artigos">

      <div class="container">
        <h2 class="grid-16 subtitulo-interno">Principais Artigos</h2>
      </div> 
      
      <!-- INÍCIO - ARTIGO 1 -->
      <div class="container mod-artigo">
        <div class="img-artigo">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/home/home-img-1.jpg" alt="Artigo 1" class="grid-5"></a>
        </div>

        <div class="text-artigo grid-11">
          <h3 class="categoria-artigo">CATEGORIA</h3>
          <a href=""><h2 class="titulo-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor </h2></a>
          <p class="autor-artigo">Publicado por [NOME] em [MES/ANO/]</p>
          <p class="previa-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. uis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis [...]</p>
          <a href="" class="btn-leia_mais">leia mais</a>
        </div>
      </div>
      <!-- FIM - ARTIGO 1 -->

      <!-- INICIO - ARTIGO 2 -->
      <div class="container mod-artigo">
        <div class="img-artigo">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/home/home-img-2.jpg" alt="Artigo 1" class="grid-5"></a>
        </div>

        <div class="text-artigo grid-11">
          <h3 class="categoria-artigo">CATEGORIA</h3>
          <a href=""><h2 class="titulo-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor </h2></a>
          <p class="autor-artigo">Publicado por [NOME] em [MES/ANO/]</p>
          <p class="previa-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. uis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis [...]</p>
          <a href="" class="btn-leia_mais">leia mais</a>
        </div>
      </div>
      <!-- FIM - ARTIGO 2 -->

      <!-- INICIO - ARTIGO 3 -->
      <div class="container mod-artigo">
        <div class="img-artigo">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/home/home-img-3.jpg" alt="Artigo 1" class="grid-5"></a>
        </div>

        <div class="text-artigo grid-11">
          <h3 class="categoria-artigo">CATEGORIA</h3>
          <a href=""><h2 class="titulo-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor </h2></a>
          <p class="autor-artigo">Publicado por [NOME] em [MES/ANO/]</p>
          <p class="previa-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. uis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis [...]</p>
          <a href="" class="btn-leia_mais">leia mais</a>
        </div>
      </div>
      <!-- FIM - ARTIGO 3 -->

      <!-- INICIO - ARTIGO 4 -->
      <div class="container mod-artigo">
        <div class="img-artigo">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/home/home-img-4.jpg" alt="Artigo 1" class="grid-5"></a>
        </div>

        <div class="text-artigo grid-11">
          <h3 class="categoria-artigo">CATEGORIA</h3>
          <a href=""><h2 class="titulo-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor </h2></a>
          <p class="autor-artigo">Publicado por [NOME] em [MES/ANO/]</p>
          <p class="previa-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. uis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis [...]</p>
          <a href="" class="btn-leia_mais">leia mais</a>
        </div>
      </div>
      <!-- FIM - ARTIGO 4 -->

      <!-- INICIO - ARTIGO 5 -->
      <div class="container mod-artigo">
        <div class="img-artigo">
          <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/home/home-img-5.jpg" alt="Artigo 1" class="grid-5"></a>
        </div>

        <div class="text-artigo grid-11">
          <h3 class="categoria-artigo">CATEGORIA</h3>
          <a href=""><h2 class="titulo-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor </h2></a>
          <p class="autor-artigo">Publicado por [NOME] em [MES/ANO/]</p>
          <p class="previa-artigo">Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed. uis imperdiet massa tincidunt nunc pulvinar. Orci eu lobortis [...]</p>
          <a href="" class="btn-leia_mais">leia mais</a>
        </div>
      </div>
    </section>
    <!-- FIM - ARTIGO 5 -->
    
    <!-- FIM - PRINCIPAIS ARTIGOS -->

<?php endwhile; else: endif; ?>    
<?php get_footer(); ?>
    
 