<?php get_header(); ?>

	<div class="fluid-container">
		
		<div class="posts">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
					<div class="post">
							
							<?php 

								if (has_post_thumbnail() ){
										the_post_thumbnail('thumbnail');
								}
								else {
									echo '<img src="http://preparaty-odchudzajace24.pl/wp-content/themes/creativemag/images/default.png" width=150 height=150>';
								}	
							 ?>

							<div class="post-content">

								<h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
								<h6>Dodano: <b><?php the_modified_time('j F Y'); ?></b></h6>

								<p style="margin-top: 20px;font-size:15px;"><?php the_excerpt(); ?></p>
							</div>
						
					</div>
				
			<?php endwhile; endif; ?>

		</div>
	</div>
	
<?php get_footer(); ?>