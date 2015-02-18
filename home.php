<?php get_header(); ?>

	<div class="fluid-container">
		
		<div class="posts">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
					<div class="post">
							
							<?php the_post_thumbnail('thumbnail'); ?>

							<div class="post-content">
	
								<h2><?php echo the_title(); ?></h2>
								<h6>Dodano: <b><?php the_modified_time('j F Y'); ?></b></h6>

								<p style="margin-top: 20px;font-size:15px;"><?php the_excerpt(); ?></p>
							</div>
						
					</div>
				
			<?php endwhile; endif; ?>

		</div>
	</div>
	
<?php get_footer(); ?>