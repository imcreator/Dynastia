<?php get_header(); ?>

	<div class="fluid-container">
		
		<div class="posts">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
					<div class="post">
							
							<?php the_post_thumbnail('large'); ?>

							<div class="post-content">
	
								<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
								<p><?php the_excerpt( ); ?></p>
							</div>

					</div>
				
			<?php endwhile; endif; ?>

		</div>
	</div>
	
<?php get_footer(); ?>