<?php
// Template Name: Sobre
?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <!-- INÍCIO - INTRODUÇÃO -->
   <section class="introducao-interna interna-sobre">
    <div class="container">
      <h1 class="grid-16"><?php echo get_post_meta(get_the_ID(), 'titulo_introducao', true);?></h1>
    </div>
  </section>
  <!-- FIM - INTRODUÇÃO -->

  <!-- INÍCIO - SOBRE -->
  <article class="container">
    <div class="texto-sobre grid-16">
    <?php echo wpautop(get_post_meta(get_the_ID(), 'text', true) );?>
    </div>
    <div>
      <img src="<?php echo get_post_meta(get_the_ID(), 'img', true);?>" alt="" class="grid-16 equipe-img">
    </div>
  </article>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>