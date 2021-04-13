<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Reutilizarte</title>
    <!--Montserrat Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!--Other Links-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- FAVICON LINK -->
    <link rel="icon" type="image/png" href="/favicon.png"/>
  </head>

  <body>

    <!--INÍCIO - HEADER-->
    <header class="header">
      <div class="container">
        <a href="index.html" class="grid-3 logo">
          <img src="img/logo/reutilizarte.png" alt="Reutilizarte" class="logo">
        </a>
          <nav class="grid-13 header_menu">
            <ul>
              <li><a href="index.html">home</a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn">reutilização</button>
                  <div class="dropdown-content">
                    <a href="page-embalagens-1.html">Embalagens</a>
                    <a href="page-garrafa-pet-1.html">Garrafa PET</a>
                    <a href="page-plastico-1.html">Plástico</a>
                    <a href="page-papelao-1.html">Papelão</a>
                    <a href="page-outros-1.html">Outros</a>
                  </div>
                </div>
              </li>
              <li><a href="page-sobre.html">sobre</a></li>
              <li><a href="page-contato.html"  class="menu-ativo">contato</a></li>
            </ul>
          </nav>
      </div>
    </header>  
    <!-- FIM - HEADER -->

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

    


    <!-- INÍCIO - FOOTER -->
      <footer>
        <div class="footer">
          <div class="container footer-container">
            <div class="grid-6 footer-reutilizacao">
              <h2>reutilização</h2>
              <ul class="grid-3 lista-categorias">
                <li><a href="page-embalagens-1.html">Embalagens</a></li>
                <li><a href="page-garrafa-pet-1.html">Garrafa PET</a></li>
                <li><a href="page-papelao-1.html">Papelão</a></li>
                
              </ul>
              <ul class="grid-2 lista-categorias">
                <li><a href="page-plastico-1.html">Plástico</a></li>
                <li><a href="page-outros-1.html">Outros</a></li>
              </ul>
            </div>
          
          
            <div class="grid-7 footer-contato">
              <h2>contato</h2>
              <ul>
                <li>algumacoisala@domínio.com</li>
                <li>(11) 4002-8922</li>
              </ul>
            </div>

            <div class="grid-3 footer-logo">
              <img src="img/logo/logo_reutilizarte.svg" alt="Reutilizarte">
            </div>
          </div> 
        </div> 
        
        <div class="copyright">
          <div class="container">
            <p class="grid-16">© Todos os direitos reservados - Grupo Dynamium</p>
          </div>
        </div>
      </footer>
    <!-- FIM - FOOTER -->
    
  </body>
</html>