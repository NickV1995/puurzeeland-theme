<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://puurzeeland.scalda-nvinke.ontwikkelonline.nl/wp-content/themes/puurzeeland/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="style.css">
    
    <title>Puur zeeland - Home</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/testthemapuurz">
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