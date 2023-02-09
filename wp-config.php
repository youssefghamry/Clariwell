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
define( 'DB_NAME', 'Clariwell' );

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
define( 'AUTH_KEY',         '8?~[%oXa-Y)Kt]spOt0Sxw89D( lj|4ZOb<=D>7J %!D.ql>I<LSa!y5QRVtg$X1' );
define( 'SECURE_AUTH_KEY',  'Y5|jZ5bzsY1*g=5D*S5 bU>Uo}ALiO5!JHw+x<QO#^fTlTc-NaG/3h.eZ(#B%ZvT' );
define( 'LOGGED_IN_KEY',    ':_84c9v/r2q?s7|_exu;P0D/ZrN0T|}Y>`&r`K%.?~*TjLmeeqcQ#t!nHkbc?T)t' );
define( 'NONCE_KEY',        'q)7aaWnja5F `=yx!kJ_pi<4-!f|Oe1-1#F[yTfR-6Z0.~IKV03*N/Je8/QY-c2^' );
define( 'AUTH_SALT',        '?dZsAj;+U#@Isv!2}eeU-O9&}@$C%JNXkm/3)<E>=0 5ypokoeTYNRC>d?}-lTd3' );
define( 'SECURE_AUTH_SALT', 'n9j1!$p-u_7*-0b2S*g-%p9dnmYVCHHaxM}_tz^a}S)OyU%aw3??_`?bX5r=~vpF' );
define( 'LOGGED_IN_SALT',   'BS7GPjA[4}Nw_!>S/G6tQ}<gU3lPy 82aUE_s<|]/mN.{.f_zLf*Gy/`qj2xb=Tr' );
define( 'NONCE_SALT',       'Q+Ua!Z^CnC=#LT5UzUFz~LbToA_53u=PUbRZ2H.-YYOkwywi/wvpYW$ <A-Fef,k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Clariwell';

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
