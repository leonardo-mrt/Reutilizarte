<!DOCTYPE html>
<html lang="pt-br">
   
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <!--Montserrat Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!--Other Links-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- FAVICON LINK -->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>
    <?php wp_head(); ?>
  </head>

  <body>

    <!--INÍCIO - HEADER-->
    <header class="header">
      <div class="container">
        <a href="/reutilizarte" class="grid-3 logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logo/reutilizarte.png" alt="Reutilizarte" class="logo">
        </a>
          <nav class="grid-13 header_menu">
            <ul>
              <li><a href="/reutilizarte" class="menu-ativo">home</a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn">reutilização</button>
                  <div class="dropdown-content">
                    <a href="page-embalagens-1.php">Embalagens</a>
                    <a href="page-garrafa-pet-1.php">Garrafa PET</a>
                    <a href="page-plastico-1.php">Plástico</a>
                    <a href="page-papelao-1.php">Papelão</a>
                    <a href="page-outros-1.php">Outros</a>
                  </div>
                </div>
              </li>
              <li><a href="/reutilizarte/sobre">sobre</a></li>
              <li><a href="/reutilizarte/contato">contato</a></li>
            </ul>
          </nav>
      </div>
    </header>  
    <!-- FIM - HEADER -->