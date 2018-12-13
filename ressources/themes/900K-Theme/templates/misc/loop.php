<div class="simple-post">
	<?php
	if ( have_posts() ){
		while ( have_posts() ) {
			the_post();
			?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><?php the_title(); ?></h2>
					<div class="content--thecontent">
						<?php the_content(); ?>
					</div>
				</div>
			<?php
		}
	}
	?>
</div>
