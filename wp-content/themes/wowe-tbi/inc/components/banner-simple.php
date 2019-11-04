<section class="section-parallax">
   <div class="cover"><img src="<?php echo get_theme_mod( 'banner_img'); ?>" /></div>
    <div class="bannerMask"></div>
        <div class="container p-relative z50 flex flex-center height100">
            <div class="banner-text flex flex-center flex-d-col">
              <h2><?php echo get_theme_mod( 'banner_heading', 'This is a Heading'); ?></h2>
              <p><?php  echo get_theme_mod( 'banner_text', 'This is a subtext'); ?></p>
              <a href="<?php echo get_theme_mod( 'banner_btn_url', ''); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'banner_btn_text', 'Read More'); ?></a>
            </div>
        </div>
</section>

    