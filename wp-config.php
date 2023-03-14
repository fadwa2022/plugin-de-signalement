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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'ql=/|H8^SqxNTt|fI_}!jR2j1K5vS9g0,A+$_6d;2p^>ZSB;82B{DqH?a;i5|be*' );
define( 'SECURE_AUTH_KEY',  '8gTw @!9,OW,bX%H;Z_g1~Rs5_IIZ#JCU^F?]OG&0@*nfQ=x:m}AO@nW2X*~IAX!' );
define( 'LOGGED_IN_KEY',    'O%c2Ti+&NO[{Fz,Z#l3Hd2|cc/rbg5iKt.ec>w>fI>v8YMR<c1^w*pJ-uRy^1?Z/' );
define( 'NONCE_KEY',        'vAeNs+|F_0%Ky@HJz!`Zea$}ZNPm)eDkv/Z/#UzETrpP=X7ck%8#Qy89t!JS9Si*' );
define( 'AUTH_SALT',        '9j[3<!3X/]@E&A<dx`!Jhnb^JZs_<Ejau;}tKxn?sB;/#:e:UEbF0[WbfQNU#`4;' );
define( 'SECURE_AUTH_SALT', '%#BfM!)ye2hs)ZyZydoxfF`tEve+>u %3pR.-{rse*c,aB_q +Sc4_{IW/V:@r/#' );
define( 'LOGGED_IN_SALT',   'a;476gZq+=idv{!jvC^-Oi{_HA* -5B.:,XpO>0WVd^TlTza9aR.SQIvhfxR4Y4]' );
define( 'NONCE_SALT',       'de`WI zl7./H:k<$G77vY[2[sb[6TYss2sGVVXF~L4(Euk;h3X;->ZLKO<s8(hk^' );

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
