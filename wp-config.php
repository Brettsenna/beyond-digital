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
define('DB_NAME', 'beyond_digital');

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
define('AUTH_KEY',         '.G{v;`l0Du95z{usHu|*qA|`oYz%gAk5n&}?@QAIVp3&VS,G>@RIrwvoYibJZk#s');
define('SECURE_AUTH_KEY',  '.2^dASXIpn7y1v@ HTtxi{K[+R-[+!=4@=a-^FoT2XI<e9a>-I:ExLvr~B(|{p7s');
define('LOGGED_IN_KEY',    'e?-)>>1?#8.nZ:>y`z-*~HG&4?krJY<A=T-Th-6.&`r@Eca:H.6*#x1xn>1xCls}');
define('NONCE_KEY',        'HHo|}H!@tC1r,V4F##[/EPKSe4QT&3|i]s1Y*gErwX+X%ma)&J^Tj3=eso7K7hV[');
define('AUTH_SALT',        'T*~GSgj]!sGw|+$|9N-b,3Eg$?BBy_$Q(NIGB83oe3ua<yz19k~O?Yg`V@7#<Jf-');
define('SECURE_AUTH_SALT', '@0/7MH=g`E3-J-L82- U8I&Zfu~r*gW5S:A>B=}r.pYP/x bLi!e~+,OTdLC(4SA');
define('LOGGED_IN_SALT',   '~(b~?-k{z4D*^LGRO^Vhkh*j.O3Q{xj+c[Pys0RAMz#|rh A/k>KlY/$:|f=br9)');
define('NONCE_SALT',       'Fo/t+vsR:u*YuKMQJ_p.f(jc9W-hv|%i9_#)i;u|to#UFJSh)BLB-o>R0|Wb(zf+');

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
