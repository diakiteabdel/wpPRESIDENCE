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
define( 'DB_NAME', 'presidence' );

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
define( 'AUTH_KEY',         'bbNBj5mJLGOce*[7`>v27x^8KA$y(u?{D`8 (}5Pa[prMV=zw7^mE_Z[WvZaj3C+' );
define( 'SECURE_AUTH_KEY',  'aX7DJH>$Ifw`^H6!)W7D_5{!] W7c~zKppjp_} /~Ctz%?;x&+y:F*Au]LtdFND_' );
define( 'LOGGED_IN_KEY',    'M(QRvcIGC7ZxO0C|Ls@+kAEZ2^hG!]`/#F1! BsUzd=u.`>oa39uTO9pOdz/t}8X' );
define( 'NONCE_KEY',        '7;,]BpXL>lR%!1hWgB5QDI5`2;l[k?#i<rY->4[:+s#}IS yan7so]LYcT)^7oiE' );
define( 'AUTH_SALT',        '^9T-v,U}w3n|_7%/3SD2(:FKSbXSXGW%i.Wf8 *CrGN0%<lO{RN/9|c4aN.6kL;D' );
define( 'SECURE_AUTH_SALT', 'ZSMT W$JgL7Rj47iueMO0cb;|}_5=R;Zou=hgQNfyD!vC(9V=ue(U7Fj|uRL9dwK' );
define( 'LOGGED_IN_SALT',   'A,}9^7J&w;~?&/{SbNLXrP_hLa:%(4lo7dy7AG^hEgynGPF3c#t zZ0tXQ2rS@()' );
define( 'NONCE_SALT',       '%iG$fSNiGA2QD Uq/2#lO3!Fb<pnlbD0c|`/Eux +*K/H.>&(eo{OoG q@IMbmAn' );

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
