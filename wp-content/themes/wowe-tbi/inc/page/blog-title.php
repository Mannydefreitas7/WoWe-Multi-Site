<section class="section section-title" id="page-title">
	<div class="container flex flex-justify-between align-center">
		<div class="page-header">
			<h3><?php echo get_the_title(); ?></h3>
			<span><?php echo get_the_excerpt(); ?></span>
		</div>
		<ol class="breadcrumb">
		<?php
			if ( function_exists('yoast_breadcrumb') && has_category() ) {
				yoast_breadcrumb('<li class="breadcrumb-item','</li>');
			} else {
		?>
			<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>

			<li class="breadcrumb-item active" aria-current="page"><?php get_the_title(); ?></li>
			<?php } ?>
		</ol>
	</div>
</section>

