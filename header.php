<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://puurzeeland.scalda-nvinke.ontwikkelonline.nl/wp-content/themes/puurzeeland-theme/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="style.css">
    
    <title>Puur zeeland - <?php  wp_title(''); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <?php wp_body_open(); ?>
    
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost:8888/puurzeeland-theme/">
                <img src="<?php echo get_bloginfo('template_url');?>/images/MainLogo.PNG" alt="Logo" >  
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
                <div class="navbar-nav ml-auto">
                  <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'primary-menu')); ?>
                </div>
            </div>
        </div>
    </nav>
    
    <section id="banner">
      <div class="row">
        <div class="banner">
        <img src="<?php header_image(); ?>" alt="Banner" />
        </div>
      </div>
    </section>