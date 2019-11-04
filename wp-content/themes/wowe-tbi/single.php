<?php get_header(); 
include ('inc/share-buttons.php'); 
        $pageTitle = 'Interpreting Service Blog';
        $pageDesc = 'Working Strictly with the best certified 
        and registered interpreters available.';
include ('inc/page/page-title.php'); ?>
<div class="wrapper container">

<?php while(have_posts()) : the_post(); ?>
            <article class="wowe_post post">
                 <header class="wowe_post-header">
                 <?php the_title('<h1 class="wowe_post-title">', '</h1>'); ?>
                 <div class="wowe_post-date">
                                <?php the_date('F j, Y', '<i class="icon-calendar2"></i><span>', '</span>'); ?>
                        </div>
                  <div class="img">
                        <?php the_post_thumbnail(); ?>
                  </div>
                </header>
                <div class="wowe_post-content">
                        <?php the_content(); ?>
                </div>
              <footer>
                <h4>Share this:</h4>
                <ul class="share-buttons">
                  <li class="share-btn facebook"><a href="<?php echo $facebookURL ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                  <li class="share-btn twitter"><a href="<?php echo $twitterURL ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                  <li class="share-btn email"><a href="<?php echo $emailURL ?>"><i class="icon-email"></i></a></li>
                  <li class="share-btn pinterest"><a href="<?php echo $pinterestURL ?>" target="_blank"><i class="icon-pinterest"></i></a></li>
                  <li class="share-btn message"><a href="<?php echo $whatsappURL ?>"><i class="icon-bubble"></i></a></li>
                </ul>
              </footer>
             </article>
      <?php  endwhile; ?>
</section>

<?php
echo '</div>';
include ('inc/home/contact-new.php'); 
get_footer(); 
?>
