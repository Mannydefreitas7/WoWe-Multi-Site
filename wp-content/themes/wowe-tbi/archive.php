<?php get_header(); 
        $pageTitle = single_cat_title("", false);
        $pageDesc = 'Working Strictly with the best certified 
        and registered interpreters available.';

include ('inc/page/page-title.php'); ?>
<div class="wrapper container">
<section class="wowe_blog">
    <ul class="posts">
<?php while(have_posts()) : the_post(); ?>
        <li class="wowe_post post">
            <article>
                 <header class="wowe_post-header">
                        <div class="wowe_post-img">
                        <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_title('<h2 class="wowe_post-title">', '</h2>'); ?>
                        <div class="wowe_post-date">
                                <?php the_date('F j, Y', '<i class="icon-calendar2"></i><span>', '</span>'); ?>
                        </div>
                </header>
                <div class="wowe_post-content">
                        <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-border btn-dark btn-circle">Read More</a>
                </div>
             </article>
        </li>
      <?php  endwhile; ?>
     </ul>
</section>

<?php
echo '</div>';
include ('inc/home/contact-new.php'); 
get_footer(); 
?>
