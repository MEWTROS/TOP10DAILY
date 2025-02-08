<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u799591281_rXsXx' );

/** Database username */
define( 'DB_USER', 'u799591281_MrGrX' );

/** Database password */
define( 'DB_PASSWORD', 'yLjEBPMSNU' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'tbAA}^g)G&1RpZxW2N3PN^P2nkP2ZGfzL[dxqU2B5 ]/~Hs4Q.;H1`$x=->Pmzb1' );
define( 'SECURE_AUTH_KEY',   '73*$nX2I~;Lest&>s0momaI0KhuCJ(_UT<x]a)I-|Bl~qu=ru3[=,6f)h2nT ,tq' );
define( 'LOGGED_IN_KEY',     'ORl&;:4Sg3cDLOmSy&[A}S:Ahj5FF]*jIL/,r4mq&:UT<G%iswonb%H]wYSVF5{u' );
define( 'NONCE_KEY',         'y#)Eh^&4Gc5,JNp)3W&t M}s/7Wu;osa=Jnz)28 ~sv4$Df3eqJ;)O/x4=Dg2`J&' );
define( 'AUTH_SALT',         '=,Q@Yu(Boz|+;AIp:*U@>.`V=1v@SFh-?7tQ0qMYzLJwXJ~=j4LRh3[.$v.+q1$ ' );
define( 'SECURE_AUTH_SALT',  'A@I,=6bRJg+{bn)MM/qnEi?Xwe=k0&/#7mO_[`iJo=(Ccz/#W(Fleq/o/IqcJOvH' );
define( 'LOGGED_IN_SALT',    'l/?CnzF]QfiZ]t_aX<6*: ckE]V:H)p}I[kRSORByDYZ<?*2B[=1WB2EbV598b6v' );
define( 'NONCE_SALT',        'qu^FdmPa/%LGThHh~,?4LDCjrH#8.2Y=mLL>TOc/Nb..|HFb)Jrv!.E[V,%TeAdX' );
define( 'WP_CACHE_KEY_SALT', 'c(F{R6|#XM|XcleMP/ULWa]J3p_} Yl:,@&dk/9n=<N?IiNkAXY$Tf)X[-iVnNp#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'aa64d9895ab3f516892c65d004363c20' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'SURECART_ENCRYPTION_KEY', 'ORl&;:4Sg3cDLOmSy&[A}S:Ahj5FF]*jIL/,r4mq&:UT<G%iswonb%H]wYSVF5{u' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
