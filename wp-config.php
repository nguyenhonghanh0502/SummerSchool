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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schooldb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Hanh#11052002#' );

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
define( 'AUTH_KEY',         'KFf(G7}EBd_ aAPt9HGy;V+]!,le@_s)3t&^bShh0~ZCV7B)$@9m1APM2c]vd)e7' );
define( 'SECURE_AUTH_KEY',  'JlaQXRoYHWkadqowXtn:O&AE_}R*&.<T ed2:FohsRjd-g8h5Em&w`][E^RI0nP|' );
define( 'LOGGED_IN_KEY',    '>fo`%Xk*^_9!:olBYY7K71l45{RX|IP{%xnDk.FAQA(Eu6~%Lt&kb+Z$DRSeD0b3' );
define( 'NONCE_KEY',        'CRF4 #w*s1RW]P?L!pYfq~`h:$_]],j%#g=@bgCy7ytS$=tzGS,c,k2WZ)1tP]wF' );
define( 'AUTH_SALT',        'AyaIE#|R;hjOa~a+m$Wn6Zc,Obh&oWG%R-Un*`[+,g^E1+p.~?VaeYP0|O.1Pi,^' );
define( 'SECURE_AUTH_SALT', '1s!DO8~iPn@vd%6*-BB3#_?Wb#+*YC_}QU6t[#qfHU#P`_k,b:>Ofr}&KQv]fO}Z' );
define( 'LOGGED_IN_SALT',   'WW%Jk}+<zXo~|}hfL!m[/(7)V8ekq2E>#)McGqzKTrDyIK0lEb)L;Q3hRsu~RmiM' );
define( 'NONCE_SALT',       ',a^zz nl5 l&.;%lo}j%!IjWp;$FD6Lbt[OZ0=LNb~CmcvWf-vcE(+o`J?GQo~gb' );

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
