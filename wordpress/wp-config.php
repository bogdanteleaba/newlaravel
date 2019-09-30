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
define('DB_NAME', 'joyme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't({F4BctP.%$b_y2~_+_M 9)v&<yh 0<?<L$J;p`/C4z^q^+ISN-6a!x41>v/$P:');
define('SECURE_AUTH_KEY',  '(lQbZ/:Gh|Py}jgZ6:g-X,G+u{8b;dk.e9OZtET~.{mx1tYqjJnn]1VU0BoYqdgu');
define('LOGGED_IN_KEY',    'j^0HLySJNIqRIj.2TTj%OtEN%3$.N8sEi~*jsK `</_$7:&((%|H6U+6lTF}v3ci');
define('NONCE_KEY',        'GkB2WRt%!w]HQ zrn<Z3u;/Ev/%w}@eK ;rb=u18i/Z+%lCigz j6GDRBBlr>^,l');
define('AUTH_SALT',        'KMz`i!=4sV3_b?BTU6 uK[JZO:d%F7J cx2@GmDa3e.w^`d}K HyfI$~iyT,Gt}V');
define('SECURE_AUTH_SALT', '%zt~V~5>CcLtL@%atagpwZ<I+,96B/TNy4*74rQh,:&IC;=t/:$StJ;Q&@nPGZ+U');
define('LOGGED_IN_SALT',   '<30#4GXd_U4+i,rR nDUNcY/Lhr]J97R/S?9SEL8EafVKI7gpBQD+^|&DsLGe2>0');
define('NONCE_SALT',       ':}{;ilcc[YMygviO<v69M!8`K|x0dodL%>R#y7s0BFz:ms|H0aTf#BCywLbRCdD.');

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
