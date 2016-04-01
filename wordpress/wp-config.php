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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'RoniDutta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'L87{kxJxS-Q_g{p+ATk^=8.`BCyNA(%${,+t!a&]uL|(smz-tC_vmEO Pz0O{y-x');
define('SECURE_AUTH_KEY',  'zw%3AI-XH3-V+3I%>>Sp0zw}r%U$G9wrk7m{>|MJ*|fo-ul:W/C4tO.2mts>~M.1');
define('LOGGED_IN_KEY',    '+=#ZN9@663*i]PhY4mTvK3rOp{wQM2^^<l1|Fm:lX[Z|lhZ55P+_P-zT%fi88h*/');
define('NONCE_KEY',        'wpJ=>i,3}IK<h7H%jRDl;G6-GTL-U5][-fr=9Wv$W)cZ!V,e|>j(.gz*EY,7VZ+/');
define('AUTH_SALT',        '];n~gt62?Sl@jXLer^F|JyOM -}fP1^S&vMqOpN*C>_?9:{Ag=GVXBDgq0x-5BBi');
define('SECURE_AUTH_SALT', 'i36YZ5iU I0m?pQkGEGlAOcE;o{z-d $th?.-!WvqI+;G50=<B<VfiLC5bc>M-Qo');
define('LOGGED_IN_SALT',   ';C=K#a*<7e.SCZXcQVp[j4s.g9f {*ed%Z=tRy^B+bQt+d_28Tr8SK~EUZfdRR5?');
define('NONCE_SALT',       ')-@1|mvgZ{&?tavtd(i|luc5KbV_=){YLK4/}tG*#ISM[iwE8J1v_|8iIp4~*J0u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
