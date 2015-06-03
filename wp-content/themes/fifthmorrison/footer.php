<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Fifth_Morrison
 * @since Fifth Morrison 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Fifth Morrison footer text for footer customization.
				 *
				 * @since Fifth Morrison 1.0
				 */
				do_action( 'fifthmorrison_credits' );
			?>
			<?php printf('All content copyright FifthMorrison Ltd 2015'); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

<!--[if gt IE 8]> <!-- -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bower_components/angular/angular.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- <![endif]-->

<!--[if lte IE 8]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie8Patch.js"></script>
<!-- <![endif]-->

</body>
</html>
