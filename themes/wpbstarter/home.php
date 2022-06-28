<?php
/**
* Template Name: Home
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php
		$ID = get_the_ID();
		$hero = get_field('hero');
		$expositions = get_field('expositions');
		$collection = get_field('collections');
		$show_collection = $collection['show_collection'];
		$collection_to_show = $collection['collection_to_show'];
		$museum = get_field('museum');
		$show_museum = $museum['show_museum'];
		$museum_to_show = $museum['museum_to_show'];
		$atlier_house = get_field('atlier_house');
		$show_atlier_house = $atlier_house['show_atlier_house'];
		$atlier_house_to_show = $atlier_house['atlier_house_to_show'];
	?>
	<main>
		<?php get_template_part('template-parts/content', 'hero', $hero); ?>
	</main>
	<?php endwhile; // End of the loop. ?>

<?php
get_footer();
