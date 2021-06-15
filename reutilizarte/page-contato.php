<?php
// Template Name: Contato
?>

<style>

  h2{
    font-family:'Montserrat', Arial, Helvetica, sans-serif;
    font-weight:bold;
    text-align:center;
    font-style: italic;
  }

  span{
    display:block;
    font-family:'Montserrat', Arial, Helvetica, sans-serif;
    text-align:center;
    font-style: italic;
  }

</style>
<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- INÍCIO - INTRODUÇÃO -->
    <section class="introducao-interna interna-contato">
      <div class="container">
        <h1 class="grid-16"><?php echo get_field('titulo_introducao'); ?></h1>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->
    <!-- INICIO - TEXTO -->
    <section class="container texto-contato">
      <p class="grid-16"><?php echo wpautop(get_post_meta(get_the_ID(), 'text', true) );?></p>
    </section>

    <!-- FIM - TEXTO -->

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>