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
define('DB_NAME', 'toulousecms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'toulousecms.dev');

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
define('AUTH_KEY',         '3hMeLFWBRR(O[.[xJ`YnCxYMv$4=I~5!*,Fjw!7Ql2,{u~#:OHVtzVZpg6;+8HKC');
define('SECURE_AUTH_KEY',  ';wzPFwS+Tg06i(:?AeAHC<(%U;:rPgendQr{ux77LO$U_*ra,p!R83YxP`6XiGCq');
define('LOGGED_IN_KEY',    '{`Fp?>=,p.Mbu-Drt]oVGS 9?]9)wBko9pBlGs0~y|`P_|r_i{3z-l=<0F&~S8pP');
define('NONCE_KEY',        '&2m5MMZgt#C~i_x3)#W:*|c0Dc:6rxm%6xJ~^C]$0Fy(CEoN_pkP(T2@4U_8<t!I');
define('AUTH_SALT',        '<wQ1SQpOx}_p<i[JWi}r(4Y~3u:g43OD^),rzY YKxu,)s@JW(|9JHA>E@T[mIuq');
define('SECURE_AUTH_SALT', '}>IRqH?ve^b=nG/;(p{6koST]fQ]9)p_y:Xxd3p:K7klr;~qym``YF6}XD/Q@U+t');
define('LOGGED_IN_SALT',   ':6(l>9VwTAOh}kH76MAQiIX1uhIWUxv~)2`G+Bq?n)!&n X5hPrLB]H14oPW^j==');
define('NONCE_SALT',       'm0xjGz[85#|,X=#8,5PR-X;&}fHLl%?..taF4*Q%@OBj%5|9qEQpYo+.z!.v3<[v');

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
