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
define('DB_NAME', 'Hardcoded');

/** MySQL database username */
define('DB_USER', 'Hardcoded');

/** MySQL database password */
define('DB_PASSWORD', 'hardcoded_wp_task');

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
define('AUTH_KEY',         'Kl~83-E1#e*L#JYQkbnW&woY5Qa ]xhZT1-W<*}0qt%r)HAW(`NYr#!n0J[B5<!]');
define('SECURE_AUTH_KEY',  'OU9<EAZQKB,e~/;aTrDa`}POK?guR$1bhetSH!L[uB[01X=0Dge,ooYWC+H^mz((');
define('LOGGED_IN_KEY',    'UWds|hDBY&|@:^vB&W3uu;#]n%&y7Cg[MpD~2`QdGKHtBn9[0Cb=S^11#I|HtX5=');
define('NONCE_KEY',        'C3ZfC,OsA)gnof-u>@`w:T28/fZm8]$,8FQ86{Lb(jwq?x8pEKnGh0C@E#1$@xqw');
define('AUTH_SALT',        'ESE5i[:@n2 E~u9D|T4QvN]9g)o`wJJNYj<./BUDDp:|m}Ik/$`V,$8P/^YI5 AY');
define('SECURE_AUTH_SALT', 'X-KLb/jSEvHCeP>:L#i6a#NYKInRysK%r|:KQ>I1Aa8hszV,>GX4#,|||JEO>T O');
define('LOGGED_IN_SALT',   '= 4dx3.F4]GMM5*qBc;U{ETT,,!@nI7`955Y#B5mE37U.Y1PGvpa1ZFqyR_[.0N/');
define('NONCE_SALT',       'j*$3M1hc|BUx-p{A+VnI6QrQCnHFw[W%lip !Nru|6?h$r)mDXYu|*{o$,3h])Vu');

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
