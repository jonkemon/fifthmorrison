<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'o~L)j15%^IR{-@F +S[}!g|>ES6<fzw^KemUYdL~#Dm8i-o+=Gr*0PQ/Q:3xMuG`');
define('SECURE_AUTH_KEY',  '%m)zFj 79*3-:{1|5Z&|.ZAdLo8J^FQc4Uc3*7lT-!K3$|ei#BUNu;yk>o^_-bk7');
define('LOGGED_IN_KEY',    'Q|0&<fyGh!suk|{Z<W$}In5h]-4( d[-%o7+f<?M#+EPdL]T<g6$^Wfw-;>nLQ0&');
define('NONCE_KEY',        '7-}A4pjUY^/uju},R:-j?RH/.Pn0)a%4mSrjtVH,oT=m4c_YIK/&_(YwD`>|M A0');
define('AUTH_SALT',        'I$tr@t|Z=)-!>svmNIKOh[.f5ICy=X*anLc||JZ_9Vn;6$;|++v;~uLUBkcMG5/y');
define('SECURE_AUTH_SALT', '#G^{W1+@a^Rzt]|NP5]9>p .s~]|-%mZSTPO+7WjPZE7*}=6tln wVqoMt`W1W_|');
define('LOGGED_IN_SALT',   'u?GZ=^0 &[lo6%=X[}vFy9,;jWbep{[5+}|D<;8Hd!BMrJ>!TjRqCdo~S+|P6SFu');
define('NONCE_SALT',       'dt@>lvu$Epp%[sCTf7Uz3j%vBH>fA%NM0qz@-+>xzb=>JQ;Yv09=HUqE1m-.r3<V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

