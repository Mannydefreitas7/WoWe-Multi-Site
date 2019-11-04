<section class="section section-about">
	<div class="container center">
		<h2>ABOUT US</h2>
				<?php while(have_posts()) : the_post(); 
					the_title('<h1 style="color:#648c0e;">', '</h1>');
 					the_content(); 
				endwhile; ?>
				
	</div>
</section>