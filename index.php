<?php get_header() ?> 

<section id="banner">
      <div class="row">
        <div class="banner">
        <img src="<?php the_post_thumbnail(); ?>" alt="Banner" />
        </div>
      </div>
    </section>

    <section>
  <div class="container-fluid">
  <!-- Laadt de berichten in -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Geeft de content van een bericht weer -->
<?php the_content(); ?>
</div>
<?php endwhile;
else:
 // Insert any content or load a template for no posts found.
endif;
wp_reset_query();?>
  </div>
</section>
<?php get_footer() ?>