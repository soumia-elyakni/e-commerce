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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '-V1!V,@j@l0.8?8S5d_*#{$kN`gC06Er;nChi#db[yJ$G8-QEw.i5jWkJxqL37-/' );
define( 'SECURE_AUTH_KEY',  'ed)$edQ@/#P`kuJq3}tkR -:4{4:Ld/!5UV5)xP_dXfX+}]@P0T`quzVz/;u-T)*' );
define( 'LOGGED_IN_KEY',    'OUlitxZT{loD<Y|0a;/cv8-hxPl.`wW[4D#Z[PIY_G++o^6ShBIQW-y6Yp|R|={#' );
define( 'NONCE_KEY',        '`oKuyqq7A2J]XAU.|Y0R,|G Po:hX-yO cYy_H.B{]TS20hO/YKLR0;#/OGc{*Rk' );
define( 'AUTH_SALT',        'aMsIOB5w}|Q7FE=D@JEC`46oT]CH%<8xWl8P?J:]tGIeLeHSd=oRW:ek/bvpDE[/' );
define( 'SECURE_AUTH_SALT', 'N!zcb2l.Pa1L-1<Yq+&Q`W|mDi8g6yyO!+@GNepLs_B4I/fC*Cp8<atx+2|l^=Pp' );
define( 'LOGGED_IN_SALT',   '=#BQ-~O.>wJh(aL9 yQ@E:uQK/XF5O:B;d{L.|WpY:=2*:I5V-b&>UZdk#,|eKwu' );
define( 'NONCE_SALT',       'o9/+W,gH3USS`F>wI2,`q)6SD<f_J!9+>kpl+X:lmGyE-p%Pmafnr(<C:|bE%/!j' );

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
