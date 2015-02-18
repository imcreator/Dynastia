<?php
/*
Template Name: Galeria Template
*/

?>

<?php get_header(); ?>

	<div class="container" style="padding:0 100px">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="title">
				<h1><?php echo get_the_title(); ?></h1>
				<h6>Ostatnia modyfikacja: <b><?php the_modified_time('F j, Y'); ?>, <?php the_modified_time('g:i a'); ?></b></h6>
			</div>
			<p><?php the_content(); ?></p>

		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>