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
define('DB_NAME', 'jbclassblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'janitbask@321');

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
define('AUTH_KEY',         'c%.mKq%onE& #E<+&j^ 2S-f;.7-~><U$*/0N@1{B}FSGo@4sYf,/F_M2@hADA_H');
define('SECURE_AUTH_KEY',  'G #5_x{j[r:@S40gAx_{v8zVMP_fFC{ZSL}~]Q;3K{bRY XFO[.H,p8CeGOB,OVV');
define('LOGGED_IN_KEY',    'e)7OO*=@44KebY*Z&&Q9W|TaYi0,5x31(w)bt#:=kX?DV<Xvz(A(Lq0Fuo/Aq_P1');
define('NONCE_KEY',        'FST(hZ9&u:[//F].TIax2uP*|Ox*(p^)cY%yVfNzxRqFTW-+}S:iPStU,uN3e(ii');
define('AUTH_SALT',        'd! py(7kI(E(547$Dnw)[Tvikx.?6{Z-M.@uEZT:jL0f/fc,N7R 9:_bC.1/qGqz');
define('SECURE_AUTH_SALT', 'vKo8*y-0J{,pX&Vg?:8Sx;e^1LI{y1EDKLt^0W#lGZ%UlI:Wdw[C2)pN2)<xCQAE');
define('LOGGED_IN_SALT',   '$xw(BaFHKwl&d3Qq(&SuT%r#S5-{3o>]O[a33xVjH&:}1FL<>hVdV3W?{1bl4@03');
define('NONCE_SALT',       'o03vdE2,Pe_CcN3e W%nh:9K%fA#{lhY4PW*r]S04yp,:p~Au^WEb@]:=|Nu%c0m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jbb_';

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
