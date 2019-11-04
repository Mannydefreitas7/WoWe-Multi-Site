<?php get_header(); 
include ('inc/page/blog-title.php'); ?>
<div class="wrapper container">
<section class="wowe_blog">
    <ul class="posts">
<?php while(have_posts()) : the_post(); ?>
        <li class="post">
                <?php the_title('<h1>', '</h1>'); ?>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
        </li>
      <?php  endwhile; ?>
     </ul>
</section>

<?php
get_sidebar('page');
echo '</div>';
include ('inc/home/contact-new.php'); 
get_footer(); 
?>
