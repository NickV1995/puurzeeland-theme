<?php /* Template Name: Impressies */ ?>
<?php get_header(); ?> 

<section id="">
    <div class="container-fluid">
    <?php query_posts('&cat=6'); ?>
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      </div>
      <?php endwhile;
      else:
      echo 'Niets geplaatst';
      endif;
      wp_reset_query();?>
  </div>
</section>

<section id="services">
    <div class="container-fluid">
    <div class="row">
      <h1>Gelegenheden</h1>
    </div>
      <div class="row">
    <?php query_posts('&showposts=3&orderby=post_date&order=asc&cat=5'); ?>
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

<section>
  <div class="container-fluid">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
