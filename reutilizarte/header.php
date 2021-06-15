<style type="text/css">
  .header{height:80px}

  @media only screen and (max-width: 787px) {
	html body{overflow-x:hidden;}
  .header{height:165px}
  }
</style>

<!DOCTYPE html>
<html lang="pt-br">
   
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> </title>
    <meta name='description' content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>">
    <!--Montserrat Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!--Other Links-->
    <!-- FAVICON LINK -->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>
    <?php wp_head(); ?>
  </head>

  <body>

    <!--INÍCIO - HEADER-->
    <header class="header">
      <div class="container">
        <a href="/" class="grid-3 logo">
          <img src="http://reutilizarte.rf.gd/wp-content/uploads/2021/05/Reutilizarte.png" alt="Reutilizarte" class="logo">
        </a>
          <nav class="grid-13 header_menu">
            <ul>
              <li><a href="/">home</a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn">reutilização</button>
                  <div class="dropdown-content">
                    <a href="/reutilizarte/embalagens">Embalagens</a>
                    <a href="/reutilizarte/garrafa-pet">Garrafa PET</a>
                    <a href="/reutilizarte/plastico">Plástico</a>
                    <a href="/reutilizarte/papelao">Papelão</a>
                    <a href="/reutilizarte/outros">Outros</a>
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