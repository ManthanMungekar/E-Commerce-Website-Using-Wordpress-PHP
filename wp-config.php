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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '~41x6_Y>~{D|ihRLc3;,(A&zT1h!w[^e+-xHzqz,MjM6mb!J|CxI?M4Juf9goz%4' );
define( 'SECURE_AUTH_KEY',  '60NeI,=r*h2wD%#%*($)r/}Jky!Ou/LO%DaIquQT[=:%x.c nS^4`5S e@@?qgwf' );
define( 'LOGGED_IN_KEY',    '=HneUsJ.Fst1Yhx@yyZOu&$aRnAWZ:)CyBTu4DK?K1rGkJf6(ZVEO]:c4^?^z/:d' );
define( 'NONCE_KEY',        ',b1-wWF3VZt^_!vv!K(gtuSYZ8U`P-j%{2Vah`1]!qI>6`#zK`x:m7=Fk10rdX!u' );
define( 'AUTH_SALT',        '+2nQD=UG2bV0#9,?HsYyvkkq3(Sm-n0#V1dQ[+}4c5=#+D1=/o+NSVHxjZY!a?E#' );
define( 'SECURE_AUTH_SALT', '96w:ey>H6c$Pf:FFnywMq/jF0!>Ge?YgeO}*FyG0ue3~w=i|kd$-BuQ`Jj({110L' );
define( 'LOGGED_IN_SALT',   '>g-_dkg/GX2,Cio+~g[GuWOZ84}ME>&Lk(a4IeBCUaKRR^9s[4*`Hk]]9meuz{=u' );
define( 'NONCE_SALT',       '2j)Y]PgS+`o$Nw3jOrS`K-7=1)4E?8ay07oJcq@/3{?@fm%`U`E:93]FNPI@$) m' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
