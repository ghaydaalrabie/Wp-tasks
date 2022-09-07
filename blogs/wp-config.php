<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'blogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'me3marea' );

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
define( 'AUTH_KEY',         'I]!8iP_{KGk!G_tcvN008&$yPtS^Sl+ld>eZ:LS`bMgrWoys3D)EK@d=g7?Q2GF{' );
define( 'SECURE_AUTH_KEY',  '06SCo`{6@E+4a_;,vRU(djOBoC%(,z]`Brszce[R|uG{{eK0FHe0dDIR;Q(j%oDm' );
define( 'LOGGED_IN_KEY',    'Z/=<:Sa8U0LLc@`XHiL)f,oK8P893~XS|NNGyu->GljCx@qQ(v8c_-pv~#R25}q4' );
define( 'NONCE_KEY',        '4J[u8@!)hJUcjP,G,[.s]tK)2uYjLCa $$8-cv)A-~^8%MwE321fT.U7X>A=iJ2]' );
define( 'AUTH_SALT',        ']wB2KzjIQ,VD+<Kz1Jil|msWG<0s37[mFBHH9:fPSq/7cO_%L9{Iqe*kqrJ!Gf/F' );
define( 'SECURE_AUTH_SALT', 'ObBg8;?N)KJD%[Tyn@ONq<]_;eMV&jw?v,>H9bhin2i.A2oN*8oZE)>N|T[)%U]b' );
define( 'LOGGED_IN_SALT',   'MsY1<Jc}G;G)*?]Z*8BlZP^S0%x_[i/Io^K&7YD|NB![:PVgDW(~obNhI$.0fQcy' );
define( 'NONCE_SALT',       '{-E4j3BL<7GY$:.C?m:`Unx&=y(nM7rh)l1C$S[Z)%y?-H@Bdz7@LrUM^g&Rq9?r' );

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
