<section class="section homepage">
    <div class="container">
      <h2>Our Services</h2>
    </div>
  <ul class="section-services stacked">
    <?php while($query->have_posts()): $query->the_post(); ?> 
      <li class="service">
        <div class="container flex flex-justify-between">
            <div class="wrap_img wrap_img-round">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="service-content">
              <h3><?php the_title();?></h3>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-inline-block btn-outline">Learn More</a>
            </div>
        </div> 
      </li>
    <?php endwhile; ?>
</section>