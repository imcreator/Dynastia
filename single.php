<?php get_header(); ?>

	<div class="fluid-container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
				<div class="one-post">
							
						<?php the_post_thumbnail('thumbnail'); ?>

						<div class="post-content">
							
							<h2><?php echo the_title(); ?></h2>
							

							<p style="margin-top: 20px;font-size:15px;"><?php the_content(); ?></p>
						</div>
				</div>
				
		<?php endwhile; endif; ?>

	</div>
	
<?php get_footer(); ?>