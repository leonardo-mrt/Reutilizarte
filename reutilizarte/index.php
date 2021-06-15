<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

<?php endwhile; else: endif; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

  <style type="text/css">
    h1 {
      max-width:960px;
      text-align:center;
      margin: 0 auto;
      margin-top:136px;
      font-weight:bold;
      font-size:36px
    }

    h2{
      text-align:center;
      margin-top: 25px;
      font-size: 18px;
    }

    h3{
    text-align:center;
    margin-top: 10px;
    margin-bottom: 25px;
    font-size: 12px;
    font-style: italic;
    letter-spacing: .15em;
    }

    p{
      max-width:auto; 
      margin: 0 auto;
      left:41px;
      width: 776px ;
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-size: 18px;
      line-height: 26px;
    }

    p img{
      display:block;
      margin:15px auto;
      text-align:center;
    }
   
  /* RESPONSIVO */

  @media only screen and (max-width: 787px) {
	html body{overflow-x:hidden;}

  h1{margin-top:190px;
  max-width: 560px;
  text-align:center;}
  p{
    width:500px;
  }
  }

  </style>

  <?php endwhile; else: ?>

<p><?php _e('Oh não! Parece que ainda não há posts aqui :('); ?></p>
<?php endif; ?>    
<?php get_footer(); ?>
    
 