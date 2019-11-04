<?php get_header(); 
  $pageTitle = get_the_title();
  $pageDesc = get_the_excerpt();
include ('inc/page/page-title.php'); ?>

<div class="wrapper container">
<section class="wowe_page">
                <?php 
                while(have_posts()) : the_post(); 
                the_title('<h1>', '</h1>'); 
                the_post_thumbnail(); 
                the_content(); 
                endwhile; ?>
</section>

<?php
get_sidebar('page');
echo '</div>';
include ('inc/home/contact-new.php'); 
get_footer(); 
?>
