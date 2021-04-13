<?php
// Template Name: Sobre
?>

<?php get_header(); ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <!-- INÍCIO - INTRODUÇÃO -->
   <section class="introducao-interna interna-sobre">
    <div class="container">
      <h1 class="grid-16">SOBRE O GRUPO DYNAMIUM</h1>
    </div>
  </section>
  <!-- FIM - INTRODUÇÃO -->

  <!-- INÍCIO - SOBRE -->
  <article class="container">
    <div class="texto-sobre">
    <p class="grid-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit. Nullam ac tortor vitae purus faucibus. Tempor orci dapibus ultrices in iaculis nunc. Sit amet nisl suscipit adipiscing bibendum est. At tellus at urna condimentum. Parturient montes nascetur ridiculus mus. Viverra maecenas accumsan lacus vel facilisis volutpat. Nam at lectus urna duis convallis convallis tellus. Sem viverra aliquet eget sit amet tellus cras. Consequat nisl vel pretium lectus quam id leo. Hendrerit dolor magna eget est lorem ipsum. Sed libero enim sed faucibus turpis in. Tortor at auctor urna nunc id cursus metus. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Mauris vitae ultricies leo integer malesuada nunc vel risus. Nibh venenatis cras sed felis eget velit aliquet.</p>
    <p class="grid-16">Vestibulum morbi blandit cursus risus at ultrices mi. Purus non enim praesent elementum. Sagittis vitae et leo duis ut diam quam nulla. Massa sapien faucibus et molestie ac feugiat sed lectus. Sit amet aliquam id diam maecenas ultricies mi eget mauris. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus.</p>
    </div>
    <div>
      <img src="img/sobre/sobre-img-2.jpg" alt="Equipe" class="grid-16 equipe-img">
    </div>
  </article>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>