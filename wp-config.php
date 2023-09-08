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
define( 'DB_NAME', 'saajhtextiles' );

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
define( 'AUTH_KEY',         '1aBi{)fKPbgZDkJBO]W!Z@]d7i^aA6-|x}W{Pvp.K2, CW?^+NS*2mVf<tH0PE]K' );
define( 'SECURE_AUTH_KEY',  'DEOUq|H!grXamN2k*ti/WI8dW|J)_$WkcR+%8GE.7%b4M 4n*dn-M%AIvr@WG~4/' );
define( 'LOGGED_IN_KEY',    'pYAZpd6zi6OuIxowJ98`_;c^Gy/-<%k38)QaMqy(!Fpi$5I4=VW0 ->=>CJL~C%~' );
define( 'NONCE_KEY',        '}(?obN5j|{*10k~&`*Ix1sUgW;I^_(nl<m{HvmnwY;w3SgO_5X5vY1z)dl /[V!e' );
define( 'AUTH_SALT',        'o+!,S4Upfa4D{q:8kK-S=~Rd^K?}.f +%{/d{}?5tW*pO9>W-UetK&26>VhSjTTT' );
define( 'SECURE_AUTH_SALT', 'i6%!fBDX&KZaN9-du(,2:qF1f;2S<_?Vj&OJ56}[Azfv+JrKR@6dqozLFuL.nKbp' );
define( 'LOGGED_IN_SALT',   'oM[Yl<ml}qGi{z)$6cYh8}P+muISdOGlMOLYl_9)y^HmX&]u= [v+)O}uqm+29Hy' );
define( 'NONCE_SALT',       '|%%Qru<{:{xdW=$n1TJEpunqaMK=3PU6_R*x7RI4%TN~b#kn bFXD$A&IJmp9kku' );

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
