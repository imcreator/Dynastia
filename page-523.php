<?php
/*
Template Name: My Custom Page
*/

?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; ?>


	<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Nie ma postów</h1>
	</div>

<?php endif; ?>

<?php get_footer(); ?>