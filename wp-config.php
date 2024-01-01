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
define( 'DB_NAME', 'rovinstoll' );

/** Database username */
define( 'DB_USER', 'rovinstoll' );

/** Database password */
define( 'DB_PASSWORD', '1045stoll' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '[f1<N7E@@3xc-klWZn0%q?pqM^TDnBKZ3akd?q3RJ;-K>y:~}O=^y,V;!MV1_jiG');
define('SECURE_AUTH_KEY',  '[Bl-=*NH$iVUGs/{nL1(>;$DUiU2i:xqqo# 3Ii)Z|]^vA-T+%W(yEl!f(u6D/pW');
define('LOGGED_IN_KEY',    'J~K! 3r9Q{o#1QfB8OMvEKg-@Uhu]0dqKqTz,a$4hTnA-W=o8X$!^{{<mn-jc&eu');
define('NONCE_KEY',        'D4AC0/eE-+ZiR[Nd,4}|@:P;F*90;Y2<@,&,51ENSWf W<}DC~FV-7[aH*/ #zQa');
define('AUTH_SALT',        'a!]4-!V+EEjR=oU>IY|)DHcpH`vYky,h[KrZd~F$fMM1C2vDLA`#nM~o;m?-&w<j');
define('SECURE_AUTH_SALT', '>k{SE.)^<oU+Cd+E7YB3l^a{d@[@IrnaS.CY^^Rd.T%xImFjQ%<-X4=3t5YZ=c|<');
define('LOGGED_IN_SALT',   '?|M|Q6Oczc>NBHZFf<F;X)b),)|3a[Hk*7}w031=RyRd,dhqRQ6j{w_?cHh|3/Ow');
define('NONCE_SALT',       '=[2|WiPZSel1H/ygFUb6n/8 k?e#Ii%<> /,|B[G%s[umYUsa!:M=F57E4#:i77 ');
define('WP_MEMORY_LIMIT', '256M'); 
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
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'log_errors','On' );
@ini_set( 'display_errors','Off' );
@ini_set( 'error-log-viewer', 'D:\htdocs\RovinStoll\wp-content\plugins\error-log-viewer\includes\log\php-errors.log' );
