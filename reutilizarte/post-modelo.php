<?php
// Template Name: Post-Modelo
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- INTRODUÇÃO -->
    <section class="introducao-interna interna-post">
      <div class="container">
        <h1 class="grid-16">embalagens</h1>
      </div>
    </section>
    <!-- FIM - INTRODUÇÃO -->

    <!-- INÍCIO - TEXTO -->
    <section class="container">
      <div class="chamada">
        <h2 class="grid-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit.</h2>
        <span class="grid-16">Por [NOME]</span>
        <span class="grid-16">Postado em [dia/mes/ano]</span>
      </div>
      
      <div class="texto-post">
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit. Nullam ac tortor vitae purus faucibus. Tempor orci dapibus ultrices in iaculis nunc. Sit amet nisl suscipit adipiscing bibendum est. At tellus at urna condimentum. Parturient montes nascetur ridiculus mus. Viverra maecenas accumsan lacus vel facilisis volutpat. Nam at lectus urna duis convallis convallis tellus. Sem viverra aliquet eget sit amet tellus cras. Consequat nisl vel pretium lectus quam id leo. Hendrerit dolor magna eget est lorem ipsum. Sed libero enim sed faucibus turpis in. Tortor at auctor urna nunc id cursus metus. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Mauris vitae ultricies leo integer malesuada nunc vel risus. Nibh venenatis cras sed felis eget velit aliquet.</p>
        <img src="/img/artigo/art-img-1.jpg" alt="imagem 1" >
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit. Nullam ac tortor vitae purus faucibus. Tempor orci dapibus ultrices in iaculis nunc. Sit amet nisl suscipit adipiscing bibendum est. At tellus at urna condimentum. Parturient montes nascetur ridiculus mus. Viverra maecenas accumsan lacus vel facilisis volutpat. Nam at lectus urna duis convallis convallis tellus. Sem viverra aliquet eget sit amet tellus cras. Consequat nisl vel pretium lectus quam id leo. Hendrerit dolor magna eget est lorem ipsum. Sed libero enim sed faucibus turpis in. Tortor at auctor urna nunc id cursus metus. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Mauris vitae ultricies leo integer malesuada nunc vel risus. Nibh venenatis cras sed felis eget velit aliquet.</p>
        <p >Non consectetur a erat nam at. Sit amet risus nullam eget felis eget nunc lobortis. Gravida in fermentum et sollicitudin ac orci. Quisque id diam vel quam elementum pulvinar etiam non quam. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Luctus accumsan tortor posuere ac. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Malesuada pellentesque elit eget gravida cum sociis. Nullam vehicula ipsum a arcu cursus.</p>
        <img src="/img/artigo/art-img-2.jpg" alt="imagem 2" >
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere lorem ipsum dolor sit. Nullam ac tortor vitae purus faucibus. Tempor orci dapibus ultrices in iaculis nunc. Sit amet nisl suscipit adipiscing bibendum est. At tellus at urna condimentum. Parturient montes nascetur ridiculus mus. Viverra maecenas accumsan lacus vel facilisis volutpat. Nam at lectus urna duis convallis convallis tellus. Sem viverra aliquet eget sit amet tellus cras. Consequat nisl vel pretium lectus quam id leo. Hendrerit dolor magna eget est lorem ipsum. Sed libero enim sed faucibus turpis in. Tortor at auctor urna nunc id cursus metus. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Mauris vitae ultricies leo integer malesuada nunc vel risus. Nibh venenatis cras sed felis eget velit aliquet.</p>
        <img src="/img/artigo/art-img-3.jpg" alt="imagem 3" >
      </div>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>