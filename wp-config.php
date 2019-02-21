<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fifthmorrison');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'donkemon');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kSK]A%%BO,eKw1N uIDwQ6v--?xLG#hk+6:j37%kPSRYs6xHi^xYZ|*N1ylbT7d`');
define('SECURE_AUTH_KEY',  'aE$-Yh3+@e<,Dldgo,`+V@|qEQsFw]q`!>b-y@dt^%AR<StavP3H0^D;F4bvR8f^');
define('LOGGED_IN_KEY',    '^g{k.,XsUsH?Y3cd0h(j?I3_p/=L|zZ4#i}2JDObE17:-pN1>zO$6%kjRo#J3y7a');
define('NONCE_KEY',        '6$=BLx3>t|8Iw)]~{E4hhtfgy9#}7L!Mjhx9U{3+7k{yLVSUD>A]9o((kiBA<bTe');
define('AUTH_SALT',        'C](g,YY4Dvk~dV_yYKj#{Vdw]7Mo##0+)J kEb7q7kl:@?_9G*?>P8R$oQdeDD#U');
define('SECURE_AUTH_SALT', '#hy^%jE1n.j+=?,MW.g7Mnr+1(mjbQH.3(F{|R8pK:7m2E.erf|v41]NOtbjb%CN');
define('LOGGED_IN_SALT',   'u5 :R3D+8~o7W/3t7ajTGy51Nkcj9G1<He6XP-!cbn;&6@55*yy(5J%f UwYV1?O');
define('NONCE_SALT',       '3|iGHd=Ih,_(T:U?y8`d5I)^9t8^L;hFTa&=7>|5_:2>MvC[_[Y;oW1C%~[2<x a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
