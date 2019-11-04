<section class="section homepage">
  <div class="section-services">
      <div class="container">
        <h2>Our Services</h2>
          <ul class="services flex flex-justify-between flex-align-center flex-wrap">
            <?php while($query->have_posts()): $query->the_post(); ?>
                <li class="service card card-shadow">
                    <div class="wrap_img wrap_img-round">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline">Learn More</a>
                </li>
              <?php endwhile; ?>
          </ul>
        </div>
    </div>
</section>