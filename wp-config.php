<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_mu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z,q+r&R7zt h Q6XkG+(V.9G!lp%&/:+s) -@Af|!cF(^p:t}%@-Ik?CBf82Fsex');
define('SECURE_AUTH_KEY',  '|lR0<eHTjebc.HRF<Sbr+@OL/itN.4im_-dE?b~-Qq0X]_.7m*bWM$X4]%1ZjQbJ');
define('LOGGED_IN_KEY',    '1bG}:j5hV8<FYU|aFJt8d@5q>g;8LI~U+X]+^>R|XR|-=J,;|?Fjm-@nFEt8RYIr');
define('NONCE_KEY',        'T{Jb8V,?^B/x5b;;J}#C)kR][Ck&r3eKw^/4CgW{+:R+0p|kUVR&m#x6N] <hTr?');
define('AUTH_SALT',        'CQ +%zJLDyATw75x~/][2z U#W&bODv$0V@/_O^z9sEBQQs*>]#3gy2f?lMX#8h)');
define('SECURE_AUTH_SALT', 'o[BB8;,8Yb,&ujP[9A:;cEUTiVo0mRzKOtd1ifp|oB65PPmg*]aR;?R|Jw8PS=IE');
define('LOGGED_IN_SALT',   'k+hAAN3Q p-sPNXILxEbU83Ck33nC:=+!&uwGU/&Sz)eZq[ 5{YTGx+|B[B#R*pJ');
define('NONCE_SALT',       'n|15x+QI08{8&5vd7n-IybOqvB)-Ay`c6tpsmd:d+TnUWG@{iy5+;M|kthC5U[#A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);


/**
 * Multi site settings
 */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wpmu.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
