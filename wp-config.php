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
define( 'DB_NAME', 'chow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(ZtDMf-m>Fk!>#B^Q{M`Q.{+[7-*Ql!{^~v$9jE0LXgfkf,eV`U=X2U^Z!kcj6I#' );
define( 'SECURE_AUTH_KEY',  '3T>&F}npys9|Q.dmuE;~FXw4`6*I5CIlb<*jTNET>+O{.42mZ(+NKH<l7`cxi.4V' );
define( 'LOGGED_IN_KEY',    'HBqGGv1@|N(TyFJcB3h`dQ0dh1)6c]As<(+0+*}7Q(V^Ufa$GsXK3OJF+D;08H0=' );
define( 'NONCE_KEY',        '6`2sJ~)K,6)4RR$)cp}ZLudT=jsPyI/ip[k0n#d8EkR:lsMZi}EJ?jer<=nhsjKW' );
define( 'AUTH_SALT',        'Ug%sBG/|n/O(w3iY~}TWq5Y~Yn< cT<`HU}?9fhNW?>sf0FH[S8$<wGlo~l`@4Ne' );
define( 'SECURE_AUTH_SALT', '-KE10ApXO#q;wdGX0T27W@YQXrs2%EvyH|UB,O~EqqA9I&~IX+9b7PH3&,u/6:Gx' );
define( 'LOGGED_IN_SALT',   'Dxp*ynW#mGKOmVkTo8+*W2^@`^vYx?8NiR,L9-d*[B)KeCWfJ4=QH6ba|?@Y7j9i' );
define( 'NONCE_SALT',       'zc2Qs[5_jUqo%@w2Ju!PQ]Z/7/e?8alKMHIZO@V=y0iy|,;6CcW`SJP[cPSl$1YL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'chow_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
