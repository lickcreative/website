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
define('DB_NAME', 'lickcreative_db');

/** MySQL database username */
define('DB_USER', 'lickcreative_usr');

/** MySQL database password */
define('DB_PASSWORD', 'A3!CMuP/Hq/Ct');

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
define('AUTH_KEY',         '&K}`m^yC9[AU!oK)>Y<==ZK2tes2;iN+9j#<U45#VD`qNl>XL1wRvYz#Q}t-,f7M');
define('SECURE_AUTH_KEY',  'K,3k{ycZ8z0vkM_~VN?Ln)?HV+)-V)XJQIMUgbJ@On@;WW?Q[uY:0B^4b)1wYfOe');
define('LOGGED_IN_KEY',    '%ZbxxC9)YkIk:7v2&vxB_6(^IE5SQQ)4[Zd7zuzQ+{|<!VXjg-+TTr??j6`DK>PD');
define('NONCE_KEY',        'z3GX)>lPvgW`upsE><zs%qO(R)$oy^8dA*6}?`tiW+NAL1(Z6XqMv.gWqU/*ErDi');
define('AUTH_SALT',        '`duKfj;;.8sgO~CMsg8!L4O>!zTJy.Yze:.e{H2;aRRyZ=@[!|r}6a_FD>JvqKUk');
define('SECURE_AUTH_SALT', 'UCa$mal1Ty34,,tGJ8.Ez!*=LY}e0*1- =v_5E1b)&C{*$wzJzJPttp?<yCw/t@Z');
define('LOGGED_IN_SALT',   '~NAx*yzrpY$T4aX1aT__}ZLMD~[|6,b@]?SZBOyxejyGrV[x7)0<[L(=Oj.of/gH');
define('NONCE_SALT',       'F$G|hNgz)L}XI+W+fRiIrCt9I}Yu!cDa8`rk6>-K::?B2x2Abf=c:MuW[]sn=TPf');

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
