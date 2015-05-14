<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'socialvoucher');

/** MySQL database username */
define('DB_USER', 'socialvoucher');

/** MySQL database password */
define('DB_PASSWORD', 'socialvoucher');

/** MySQL hostname */
define('DB_HOST', '192.168.0.142');

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
define('AUTH_KEY',         '}eg6Y)i]R{nUE`lfkQ^^PdPw|?_&>qZ]|}i$_P-|u~:^VL-z2uAGFOI_=QDr?nFE');
define('SECURE_AUTH_KEY',  '-1(+1$kZz.V}X|$OPkE6y(JUxo@B91PFZ[$)$$Q|&-nD|~pVY7Ffq<pVv*K|S)Lh');
define('LOGGED_IN_KEY',    ',t /qr{wQM?^,jGY*xx[R}+awchz^gi^DvQBUhGVHV?}9#s!ss_Mq1n=b!y*q.Xj');
define('NONCE_KEY',        'SX]SM|+./#ji(I3g>bh$,]=Dwo+9q[!@+Zq+{5H4@N>!$,4dqg*]Pjc,?p+;VL4|');
define('AUTH_SALT',        '<dz35_Wn}s_1.sYqsY!ldd4OqA[9s`=HLDZ8Mo~Ze{.`lS%]+0H{7J,|YG+V!SPQ');
define('SECURE_AUTH_SALT', 'yAIt`r.+3U@LcQD@2Dxwdz`/e*wHb-P$-{ZVx+s2e%AcW[ni]&XRW``H@|Yt[k)i');
define('LOGGED_IN_SALT',   'V:C+dR0-aO-+TUVL3YeF-U,h[vKAV]Z^-37t!8!}<]J/F,qbL~gCUgRhG)&Hy!DJ');
define('NONCE_SALT',       'XZ6v%HA tV+E2J]GpBp9jMAXRZw-b.|it7vI@lE30!~mRYFSd fkS%5/5%dMP!qk');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
