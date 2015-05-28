<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="
	<?php echo get_template_directory_uri(); ?>
	/css/static-template-page.css">
</head>

<body <?php body_class(); ?> ng-app="homepage">
	<header>
		<div class="social">
			<div class="icons">
				<img ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png">
				<img ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ello.png">
				<img ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/github.png">
				<img ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bitbucket.png">
			</div>
		</div>
		<a href="<?php bloginfo( 'wpurl' ); ?>"><img class="logo" ng-src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fm-logo6.png"></a>
		<h1 class="logo-text">johnMorrison<br><span class="orange">Web Developer</span></h1>

		<?php
			$defaults = array(
				'theme_location'  => '',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $defaults );
		?>
	</header>