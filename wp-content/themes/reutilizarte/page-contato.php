<?php
// Template Name: Contato
?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <!-- INÍCIO - INTRODUÇÃO -->
    <section class="introducao-interna interna-contato">
      <div class="container">
        <h1 class="grid-16">CONTATO</h1>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->
    <!-- INICIO - TEXTO -->
    <section class="container texto-contato">
      <p class="grid-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit. Nullam ac tortor vitae purus faucibus. Tempor orci dapibus ultrices in iaculis nunc. Sit amet nisl suscipit adipiscing bibendum est. At tellus at urna condimentum. Parturient montes nascetur ridiculus mus. Viverra maecenas accumsan lacus vel facilisis volutpat. Nam at lectus urna duis convallis convallis tellus. Sem viverra aliquet eget sit amet tellus cras. Consequat nisl vel pretium</p>
    </section>

    <!-- FIM - TEXTO -->
    <!-- FORMULARIO CONTATO -->
    <section class="container">
      <form class="grid-16 form">
        <label for="nome">Nome</label>
        <input type="text" id="nome">
        <label for="e-mail">E-mail</label>
        <input type="text" id="e-mail">
        <label for="mensagem">Mensagem</label>
        <textarea type="text" id="mensagem"></textarea>
        <button type="submit" class="btn-form">ENVIAR</button>
      </form>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>