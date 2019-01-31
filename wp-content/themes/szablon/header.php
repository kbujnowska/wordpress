<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>  
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="Karolina">

    <title><?php bloginfo('name')?> | <?php wp_title(); ?></title>
    <!-- Bootstrap core CSS -->

    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
   
  </head>

  <body>
  <?php
$custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' );
?>
<nav class="navbar navbar-expand-lg navbar-light  fixed-top"role="navigation">

      <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url() ?>">
    <?php echo $custom_logo ?>
  </a>

  <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>

</div>
</nav>

    <!-- Navigation -->
   <!-- <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#post-22">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Subscribe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Blog</a>
            </li>
          </ul>
     
        </div>
      </div>   
    </nav>  -->
