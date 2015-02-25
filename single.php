<?php get_header(); ?>

	<div class="fluid-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
				<div class="one-post">
							
						<?php the_post_thumbnail('thumbnail'); ?>

						<div class="single-post-content">
							
							<h2><?php echo the_title(); ?></h2>

							<?php the_content(); ?>

							<div id="next-back">
								<?php previous_post('&laquo;  %', '', 'yes'); ?> | <?php next_post('% &raquo;', '', 'yes'); ?>
							</div>
						</div>
				</div>
				
		<?php endwhile; endif; ?>

	</div>
	
<?php get_footer(); ?>