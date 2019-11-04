
  </div><!-- /.container -->
<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); 
      if (is_front_page()) {
        wowe_banner_type();
      }
?>
</body>
</html>
