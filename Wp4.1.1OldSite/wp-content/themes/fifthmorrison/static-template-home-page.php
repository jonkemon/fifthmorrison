<?php
/*
Template Name: StaticTemplateHomePage
*/

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Fifth_Morrison
 * @since Fifth Morrison 1.0
 */

get_header(); ?>

	<section class="welcome page-content">
		<h1>Creative Web Development</h1>
		<h2>Implementing clean, organised and maintainable code for the future...</h2>
	</section>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page' );

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>
