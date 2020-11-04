<?php get_header() ?> 
    <section id="banner">
      <div class="row">
        <div class="col-md-12">
          <h1 class="quote text-center">"Lokale catering, feestelijke gerechten met verse ingrediënten"</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" id="button">
          <button type="button" class="btn"><i class="fa fa-phone" aria-hidden="true"></i>  06-12345678</button>
        </div>
      </div>
</section>

    <section id="services">
    <div class="container-fluid">
      <div class="row">
    <?php query_posts('&showposts=3&orderby=post_date&order=asc&cat=3'); ?>
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-md-4"> 
        <?php the_post_thumbnail(); ?>
        <br>
        <h2><?php the_title(); ?></h2>
        <br>
        <?php the_content(); ?>
      </div>
      <?php endwhile;
      else:
      echo 'Niets geplaatst';
      endif;
      wp_reset_query();?>
    </div>
  </div>
</section>

<section id="services-2">
  <div class="container-fluid">
    <div class="row">
    <?php query_posts('&showposts=3&orderby=post_date&order=asc&cat=4'); ?>
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="col-md-4"> 
        <?php the_post_thumbnail(); ?>
        <br>
        <h2><?php the_title(); ?></h2>
        <br>
        <?php the_content(); ?>
      </div>
      <?php endwhile;
      else:
      echo 'Niets geplaatst';
      endif;
      wp_reset_query();?>
    </div>
  </div>
</section>
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="http://localhost:8888/puurzeeland-theme/wp-content/uploads/2020/11/IMG_20190301_184545-scaled-e1604499046394.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="http://localhost:8888/puurzeeland-theme/wp-content/uploads/2020/11/IMG_20190831_111013-scaled-e1604499065478.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="http://localhost:8888/puurzeeland-theme/wp-content/uploads/2020/11/IMG_20190831_111013-scaled-e1604499065478.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<?php get_footer() ?>