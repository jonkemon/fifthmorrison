<?php
/**
 * Fifth Morrison back compat functionality
 *
 * Prevents Fifth Morrison from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage Fifth_Morrison
 * @since Fifth Morrison 1.0
 */

/**
 * Prevent switching to Fifth Morrison on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Fifth Morrison 1.0
 */
function fifthmorrison_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'fifthmorrison_upgrade_notice' );
}
add_action( 'after_switch_theme', 'fifthmorrison_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Fifth Morrison on WordPress versions prior to 4.1.
 *
 * @since Fifth Morrison 1.0
 */
function fifthmorrison_upgrade_notice() {
	$message = sprintf( __( 'Fifth Morrison requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'fifthmorrison' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since Fifth Morrison 1.0
 */
function fifthmorrison_customize() {
	wp_die( sprintf( __( 'Fifth Morrison requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'fifthmorrison' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'fifthmorrison_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since Fifth Morrison 1.0
 */
function fifthmorrison_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Fifth Morrison requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'fifthmorrison' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'fifthmorrison_preview' );
