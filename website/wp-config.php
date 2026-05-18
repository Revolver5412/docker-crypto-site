<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'boilerplate_local' );

/** Database username */
define( 'DB_USER', 'boilerplate_local' );

/** Database password */
define( 'DB_PASSWORD', 'this_is_local_environment' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'z+Y~U/p;L[$(j/b?AT{jY.q2!A+Wwy L` O1^Kio.QA!::I@|NK#dLP%l#=qU-(P' );
define( 'SECURE_AUTH_KEY',  'hBQ{=~>fe:d!z. -PN[?FD~|ri3z`->P:?fz4x<w0SE)D47^_7,4P669W|U9bUW)' );
define( 'LOGGED_IN_KEY',    '9Z46$nr9pkH)@wFiBX/E&Ddh,D4@$wZu !K.aJM(R{>}v;kpVX$4_#YTLaXS*q1O' );
define( 'NONCE_KEY',        ';%}MKP3 YwNEXe,K^0}EHM*;c^ET/P]niAzvgxiy&wF/rEbyB[T>Dl7^0/pI|:uv' );
define( 'AUTH_SALT',        '8F4D`J_X<)u@=fmsx=YjdG(yLr~t;(YJ$##_F(*%!iYjUK.l{N?e. .Sxgs]J;*L' );
define( 'SECURE_AUTH_SALT', 'S.lTLg|h&_:e?]}l.Nkh8=pi?il3dE(clG{%XB:X3$_r~1,PR/TH1eNY;V(VTBO|' );
define( 'LOGGED_IN_SALT',   'v$4Q~TNgdG[DO6y u#qs-j6?JN}mB<5Kr!Gdv8gj0fm=Q|e,}84xBbr:|[^$LDTr' );
define( 'NONCE_SALT',       'Oa#A**+`veTncE6:wKWr7TW2k|rbLd.O31vQ a<~g_c!C9a,rI .jb6pt?oJ+>]z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
