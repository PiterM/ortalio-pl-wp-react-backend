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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oesz_ortlback' );

/** MySQL database username */
define( 'DB_USER', 'oesz_ortlback' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E^1<@h1*Ec26#6N' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.0f4#qxSwS-X3^j>f02BYlikCP;*jT<c8YT+3e`2^cT{.lS/|A&$A:Q g{b-RrfD');
define('SECURE_AUTH_KEY',  'I|`UQUJd/l}$5<u,~oW%Z0UllZKmLigrYFd.rsx 5>(AlThW|LD[v(GhKdN;B>vP');
define('LOGGED_IN_KEY',    'TPbR?BkB+MyEn|;Hh0v%]h4_&X-*|o)KlL|0+~.LV7V+2>7QRd~b5TQ#Q9Vz6]]!');
define('NONCE_KEY',        '8~a5)+7wZ^]N5hMpuin9ZCp3Q5~MBVw=m-7AjU>IzvWT(qjc}RFF.C*v,TCHb*8/');
define('AUTH_SALT',        'BN<7H4m0u?*S3xw1o4G>3+7NETu+,`mAp^lu4Q+^8/3-E9R|LdeT[MpU|xAFq{xe');
define('SECURE_AUTH_SALT', 's<SW8-lyoz6x{./z5|N`ealo&M%)-;-0DB+6.6NQar056OC2QYV?wf*pf_N/V9fo');
define('LOGGED_IN_SALT',   '#!sN/a,*)*Jh]5P0QXcS]q:g4xL#1Q}_?+iC0&t%evar{<AdBZ2rTy.nhj63G;Z}');
define('NONCE_SALT',       '8W1UR@*g7xY1>C6d`M`2]z_^t(8rF0I1|Z2HPQygge0yS+2nPN=%9+.,LNJVC!AA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wportal_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
