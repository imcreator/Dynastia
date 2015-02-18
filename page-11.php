<?php get_header(); ?>
	<div class="wystawy">
		<div class="container-fluid">
			<div class="zawartosc">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="title">
					<h1><?php echo get_the_title(); ?></h1>
					<h6>Ostatnia modyfikacja: <b><?php the_modified_time('F j, Y'); ?>, <?php the_modified_time('g:i a'); ?></b></h6>
				</div>
				<p><?php the_content(); ?></p>

				<?php endwhile; else : ?>

					

				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>