<?php get_header(); ?> 
    <section id="banner">
      <div class="row">
        <div class="banner">
        <img src="<?php header_image(); ?>" alt="Banner" />
        </div>
      </div>
    </section>

    <section id="services">
      <div  class="container-fluid"> 
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="food">
            <br>
            <h4>Over mij</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
            <br>
            <a href="#" class="link-service">Kom meer te weten</a>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="image">
            <br>
            <h4>Impressies</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
            <br>
            <a href="#" class="link-service">Bekijk mijn werk</a>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="image">
            <br>
            <h4>Workshops</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
            <br>
            <a href="#" class="link-service">Bekijk de opties</a>
          </div>
        </div>
      </div>  
    </section>

    <section id="kenmerken">
      <div  class="container-fluid"> 
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="food">
            <br>
            <h4>Over mij</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="image">
            <br>
            <h4>Impressies</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_bloginfo('template_url');?>/images/food.jpg" class="services-img" alt="image">
            <br>
            <h4>Workshops</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristiquem justo ut verius porta ...</p>
          </div>
        </div>
      </div>  
    </section>
<?php get_footer(); ?>