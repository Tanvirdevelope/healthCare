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
define( 'DB_NAME', 'healthCare' );

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
define( 'AUTH_KEY',         '+ [!Q+oDUV+6d7lR7t5{0Q&1a+R ja):[@%#A1G!2`q(/y)hR8$T4ec1<Es32fC0' );
define( 'SECURE_AUTH_KEY',  '@oP{{rh*jY49*hVZA](.{,(>X829ohEKM]95}|d/qkh^BE9~lj5<ntV|9fA$X8nn' );
define( 'LOGGED_IN_KEY',    ',.E<X+O3s;6K-nO<>b,#GO-N]d`uHZfk/chIL/gs@m1)w$9s55E&vJVt*8=+7hZ>' );
define( 'NONCE_KEY',        ':c=b=iSyPGbMA_gL3Je[tMNhdV 9&x<T(F9EK_r69L]#.W]O]4>#d>9+t-v!$N@O' );
define( 'AUTH_SALT',        'uqY![4v=DN#_$ gjB=s:pSu~99B!}8R+<oufq/3ny*!v5$X~+._Z|$iF3mgI~CfI' );
define( 'SECURE_AUTH_SALT', ')k&3*|o^x%05Pt)Xm4HQ~fWy8$mt(m3!JA01X2z%cCNVA#V&[o0%HetDcQc2CP<B' );
define( 'LOGGED_IN_SALT',   'aV6ek~#j3:5z:NhV8hJqBHPchNs%@crcuY_p*cW>8bGxg3+sSgcVxuABCw<0]TBd' );
define( 'NONCE_SALT',       '9DA>0Z5f7<w|p{54_Y;L~r_{BY?RdjhrE!V=?7)+9E+u0{VGFH5dj$MAHuV=y} #' );

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
