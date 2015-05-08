<?php
/*
Template Name: StaticTemplatePage
*/

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<link rel="stylesheet" type="text/css" href="
	<?php echo get_template_directory_uri(); ?>
	/css/static-template-page.css">

<p>Fulfilling Website Needs through Creative and Logistical Processes.</p>

<p>Full-Stack development specialisms including HTML, Javascript and CSS with a whole host of other technology fun on top.</p>

<?php get_footer(); ?>
