<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jo?U]yj0bj@Wbc]Z+4vMR#LE)hoNlyf`nlyP21RZ[A,Qu[PO6<@(gX/mxp_@f#:k' );
define( 'SECURE_AUTH_KEY',  '6*X?f3]#R.,:}/*o$t()XC}Y_i@. R`fGP9c00wLw{!(Im&6.e5H|GS#=*Fct.C^' );
define( 'LOGGED_IN_KEY',    'P%yFd}`o B>Z<R)Y>_LN+VIdML} XG!o9Q(>{:SWnbDH.9,rZ(uuH_u$]IQ*!LxW' );
define( 'NONCE_KEY',        'B$4$$n*N{I4{I&H7Kzi+ZAO{X~&Od O9$i|QGIZ@q)O6M53b k)slMS;g|!LaN$z' );
define( 'AUTH_SALT',        '_5UdTB =Ffnp;snImDSI4wf. ^tGM$z<YIGQP|Uhw-qhNidJz6.pr(nwWa(LRJf|' );
define( 'SECURE_AUTH_SALT', '9ng_dU;BM5@5gUNVQ`rC?>`/~J~?<}VW=|LPG+l94#x4o#vz2*5;DW7iz2Y,~8-W' );
define( 'LOGGED_IN_SALT',   'xREQ5<elEPRf6i?5WB)hCb8OBeEut&l@2s@&$`qpCkX_Qo^3gU!=Y8q+N_in-vq/' );
define( 'NONCE_SALT',       '%3 qb:=KblWD[r^%-n%f<Rny:MG=Xg[?~3Cc33kV1oYG]|b&L5w28pM^4y-dB7]2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
