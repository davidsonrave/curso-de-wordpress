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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'lnU{b!gg0rgCv8sU&Ls[Ibqws8MO4 8@Q~Cs1KWg;=XP8OUQjxjB(g)!T&M(;JN>' );
define( 'SECURE_AUTH_KEY',  'Q%jJ#8ggjMX!2L;2p?mu*^8R4)y/[?A>f/~LJ-4/K^n4i3z&&.*Z-,[fs;a)hBxO' );
define( 'LOGGED_IN_KEY',    'fn8]%#[J1bB}F`8m!lph+?hWO 0Bt<*v*CX8gN2t88@x; &+1yUywBlMtfnnbx0u' );
define( 'NONCE_KEY',        'odB`&!<Ez%&Yi@;):b9U[Y28o9!dOFE7.|k*wP6[5Ji0:,|Cd}P&BoXaHvwR*I=S' );
define( 'AUTH_SALT',        'Pba3qfvt,QT4xp4?!@AdUTo-*qey,p*Ows,.ZKkcUhY59WXX|{wI-:QS*uHRJQ()' );
define( 'SECURE_AUTH_SALT', 'J7yK,<6c;zrc=/9K-~P2N^04G2Gg9d.Bn!Chu;/#}z&(UX(<MS/R76pIHtiX$FQw' );
define( 'LOGGED_IN_SALT',   '-G9.XZR}Z>?qdlMgQ0Xnr<{{hO)}YKPvkD`LING6C*x,t< M]k_O81uKTpmPbK&x' );
define( 'NONCE_SALT',       '-pBWY CHY!X7+o0<bPQUJ9EvVg9uC(_Z$c1KP7C~jTD1(hVl4fqUv[^hn`*RMzc-' );

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
