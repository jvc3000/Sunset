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
define('DB_NAME', 'sunset');

/** MySQL database username */
define('DB_USER', 'vince');

/** MySQL database password */
define('DB_PASSWORD', 'My1d0gly');

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
define('AUTH_KEY',         'WnWDd.w6gX_bx$I+`+[oP|9L#/jr[]B|{T(JGv=En.up]s%v+UR#nn6 8?5Xhc_J');
define('SECURE_AUTH_KEY',  '@Ngb}c[uod$q}6,!;aj*D|Hmr/[itq(~X0KE)T|1t8N?s#r),6?4e5Kizq+m4}TW');
define('LOGGED_IN_KEY',    '!Xox#G^t9tFtc1gVUy>g`fsAX*EBv(@j%<( x Poc pVOp%*I89}!gw+id%E:A z');
define('NONCE_KEY',        ') a#br>DQf_]HlSMGYEKv(9P:kcrE{da51b0cL.#s+vtJ P1XMxEGbLwZ[&fn|Vv');
define('AUTH_SALT',        's4LZYZvz2NBm1pv)1j8zKm;o7eZ!(>(fTiE{J[e)bYT? ^L;I&E]FdC-N$~S>Fik');
define('SECURE_AUTH_SALT', '>x,5HZ-Dd0.!!.UMY/hXb!xO:p|Kr6m;5 m^Y:hR`v|1<%Hd[3b6,bv`&R|cew|$');
define('LOGGED_IN_SALT',   'v,,0J#^p@o9*fr&-Nrp`fw!Kbm)HSU,o(6&4iR;;^&^+b&Y_-en*4[q-iB51>ld{');
define('NONCE_SALT',       '-U{{W|RFG-fUG8sb2p@3F(+mwrI``pq<j;d)?dFP=Lpb5ay6|S?m8+=Ti-(Fv#HF');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
