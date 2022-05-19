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
define( 'DB_NAME', 'kinhmateyecare' );

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
define( 'AUTH_KEY',         'rYU?jJrgX|K=h*rtyq|q$[&e9nhuZ>umGobAS|#(+0TgDesT2L4dTZ>yD&uDa~!Z' );
define( 'SECURE_AUTH_KEY',  '=+U?V)H2/i*i%5T@O0[8<D_{%,Z&R2,1Wf*{AJ<T+Ht~do0Q#j6c4B`M|xNt=.q#' );
define( 'LOGGED_IN_KEY',    ')t_D#SumKIwzXSh9f2g^iZbI.tF]pj(gg;IfF`hUPW,&)0lrdt2w{D>P~8:Yc+5O' );
define( 'NONCE_KEY',        '2y7w]U!uWCV&}V v0gcZqY@2;|l8p*rsLgHZZ>BE<4w`T69j#Y]ieE_ _~$H5|m)' );
define( 'AUTH_SALT',        'y8NU]}ev&!]imXr]UW(;N=;6dh21+_o!/h6b0sj{$]Fc&$EOYZ1cp9!,BENeSGa#' );
define( 'SECURE_AUTH_SALT', 'OIPV.[DD<mPKEjq[o@R;YMr[@]yPM]7xm)skTeT.s!p<h.TcTIX?KU+(8+8I ;|6' );
define( 'LOGGED_IN_SALT',   'lz^qPh.N`i|73Qj+}#@_uK>-VUhp H/RADi7q?[@.7N}z/],DNN6TKMJozs#4A3^' );
define( 'NONCE_SALT',       'NDUh/ 4EjS.`2E&DAUPWx9U7K5=[.I?:HG^)S5(i>;i#;+}G)Z*d0b@f=W)E_R|]' );

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
