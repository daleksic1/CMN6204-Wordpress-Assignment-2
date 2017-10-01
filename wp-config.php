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
define('DB_NAME', 'wp2_portfolio');

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
define('AUTH_KEY',         'ora^(NFnFq3[r 6|8lbsOl*_IH`sf$gWw7AHs1 {Q4.rH#d_Tcd2s4NF:/~(7 D#');
define('SECURE_AUTH_KEY',  'N!/}9,WjQ>IEiln#[hy!RWvB7SU;,[FNvA^W)cPW{B3q_s2D`rc,hRm}KB[be3&%');
define('LOGGED_IN_KEY',    '&Z_<VFJ8:-r3w<C5pq!UF?8_`is{sw6aM2%] Ug&2[*8S6%=$N@k.)CX4u5vq w ');
define('NONCE_KEY',        '{gF/0n1;Vx:=!u9(D=_|AV#b?kPi{Cf5Ar`I`lQ?qY52Dh[xhzfa>j{GAtS0aIG:');
define('AUTH_SALT',        'YCo5KVI1@^Uk#$(dtPu<O^VC6UmIZ!HEEFlle>y]c6ekZGM;Zatm ,1$1cq^?Qmw');
define('SECURE_AUTH_SALT', 'blh`4PfQG?kY<b,R*-rX7?lIIS/w6qr1*0u)uPL/(ymwo*) }>3iHH?8aIS[fmc`');
define('LOGGED_IN_SALT',   '=Fe}1&puT01>I(W$VNcy!,5VlF(@?O~3F9i2L(*s`Xud_rH pv^~U:i`~b nXjt=');
define('NONCE_SALT',       'bE8U*dH+$!U/*4U+KSY*ih6~Mu[th{usm(SqgpNm?X$84<cd3[S=!?zOq~h+Wwi%');

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
