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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';{ASYVm?56QVz<o0PEG~:/KWDW3xVe@2>V#,2P56S_VZ 6>1?H!=CG*F2NCGh8Cr' );
define( 'SECURE_AUTH_KEY',  '<5?F0BvzN@/-aux_9lihR`dA_G#EQ6~<c^4[0f^gzZyQWkOk vWw/$*Ipb+!_U0O' );
define( 'LOGGED_IN_KEY',    '@r[3E~f&t$H+WfT>>2$?xg2{{WLa6zp6iYZjrCMpbYs8Bc=lUF2SyOt:PIolW%,_' );
define( 'NONCE_KEY',        '{156voEjzEbP%,b#=X9mO&YK[7D=UdZ`+?29>h~oDg)R8qQBCx3BSdI<?2<}&Olu' );
define( 'AUTH_SALT',        'dGxMDF!w[1baZk0lgZC]3X];k]Z-ukcmTzq,c963Sap(mkBmT@G$]s|P8p=Pf`%^' );
define( 'SECURE_AUTH_SALT', 's;M`<~%zM4{0kG=a1k#bF,OA~@]7lr9Pne(Sx78+&ljT4b;-Y+yutq=Z3T(i!J3o' );
define( 'LOGGED_IN_SALT',   ',Er.6bdNh&6^0~)wc}ibLKx ov;(||PT/zt{v!ki=KK4]D0zs1*?tz+L)Eim|p~%' );
define( 'NONCE_SALT',       '1g8)Fn9puKn{%3694**.wLh~C-^UWN$V[[]tGE5N0#5x.EQ v-OnP1Cc)WFnmVe9' );

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
