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
define( 'DB_NAME', 'cardavblog' );

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
define( 'AUTH_KEY',         'jQ^k{G(p>2]Y<j*W48.oCVg*GwPK-%5uwpzaw:Hev0L(UWk34ap,t;|_W,&G0[)?' );
define( 'SECURE_AUTH_KEY',  '1uMhmhv.xVUxXO[IQ8T`qYgI*~Z1d~a8g7gNK^;Sy>]#4nL*4+7EN.X,Q2J0.`LI' );
define( 'LOGGED_IN_KEY',    'L66R!/i`ajik#i%S6jzBY.:iS6%}~j,U_gtmSqF,tG[Z>[M/2FOe|p-6aEc$c#V<' );
define( 'NONCE_KEY',        'mR-r|Xr+Won{lD@}71/5YY-`(?b?rcqSPn1{WAJ|^P3V8C*^FP|3ay=zQ.NeZ#9l' );
define( 'AUTH_SALT',        'Z%sus`yaMa7p`qC=1R}-Z=4cD}`rO^$=t1[w-Y /CQ-wsclU=*XPRF9IdN@^6k(&' );
define( 'SECURE_AUTH_SALT', ')zDR|vj)jB{D8?-u$OZZblB#Kz%E`$^X}d;v$Uk3CuwiNU.0#0{?(wj)1M5rjbsJ' );
define( 'LOGGED_IN_SALT',   'k35P*BJ*}vLmYM~V>u8utBC&0:N:5k!PVq>PrViRQ?q*_ls$g`cU9;_.3MNWkm -' );
define( 'NONCE_SALT',       'c!ZE-pTLkAo(F^{j.&eclkwrI G^^/71[,qM )9.A_uDqQ3X`U!iZ1$qHqNZA[n3' );

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
