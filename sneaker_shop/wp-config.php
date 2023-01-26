<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sneaker_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3)iNxpiD$ENOp<^.Cu!7JFlWqQ??[QtGOZD0SUR<|eLCD=)35SdaB]fjN^;ZJpNP' );
define( 'SECURE_AUTH_KEY',  'pA/,sPYi8G*SUAO9$BKr]qb0F!&AXL{`ny4grKT%{t%yND6kcWs-bQ/k-k(|T*(@' );
define( 'LOGGED_IN_KEY',    '=Gx0J3E.?,wHQY%xdhB~:/0+U*M5I +;>RA!/; ak]iiWu&RgbK~D9n3x/fc<bg.' );
define( 'NONCE_KEY',        'xfZ+8PWOY7.mYft)kW4C{-n5></1IJ5hZm[H(n3/BvmDQ==)uA/zvn9yO#Fj<7/o' );
define( 'AUTH_SALT',        'G]Rx.q>vUI}H-oHfJvZa~zd;cY[rD VfzL.WA;*!E aGWmOs^w}!.A2`h]C#^&U{' );
define( 'SECURE_AUTH_SALT', 'TOkwFkL2a&_8WL~W`5=O?pf5 r:`=!?l!lP&w+ q8<LLFm00!u0].)p+QE4U{t3}' );
define( 'LOGGED_IN_SALT',   '$0Jp/r!~805FJ6tLbIs>s1}oU=4H?h8<Dzx8J&9XCPfKj~p::LoT9BJl#y Aw_Zt' );
define( 'NONCE_SALT',       'v=5^|!!D[QK9`H#_=Hv,A!4`P].GPe>.6K`I*tUZYhS1%54q#:|W(/1><s]Ni/c_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
