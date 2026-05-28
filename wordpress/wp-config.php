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
define( 'DB_NAME', 'bd_growth-architecture-lab' );

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
define( 'AUTH_KEY',         '>&v>;`-s~:srG1U}lo^UQA|iDjXGuqX35KFuI$,7SOTW%2ApFc21|eG-vW&YQwfZ' );
define( 'SECURE_AUTH_KEY',  '4N6J[],*va []D$s.0!v2N/)$0cp{.O6.g(+J>/a(?}*qOG/*nbPw$~5=~]AHJdj' );
define( 'LOGGED_IN_KEY',    'meAa[zO@3TEtMNpE+.yL%uSf5%+c8^N;WZhM0cINDg+t=WqEs2QGX):%hXCQ I`E' );
define( 'NONCE_KEY',        'i zR*P|(He9XrjkNr<`:p%;@Wi/5p-X*,qQug~N-i}[9s<3m~+t}(ee0YC#RQcN&' );
define( 'AUTH_SALT',        'L:$Yj)rbJC%q;#xpQ3-:2M2Ibj)v^Or]&T2{O+CunQv=hD:CNIwfn2S{gHoD;q*u' );
define( 'SECURE_AUTH_SALT', '64H>WfTf5:fg31O+n2CluFzV+V$~/0TK~v*;w2r7Z{.8r)|(G8)O?~B!Z4ewgi 6' );
define( 'LOGGED_IN_SALT',   'P>mTV:!]i[((.,-<B^nJkNj7qzuJ@}w(R*+&Pfz?w)gPmeJX>8@58eYs$<T|w.d6' );
define( 'NONCE_SALT',       'p?9N6n,8~D^3na%F!hv,zf:8)W/L`[2~o/I<99d{6f ^Wy.{MsXC QjIH,r4Bx&H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
