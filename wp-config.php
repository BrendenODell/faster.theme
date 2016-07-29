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
define('DB_NAME', 'faster');

/** MySQL database username */
define('DB_USER', 'faster');

/** MySQL database password */
define('DB_PASSWORD', 'Cy3IzlLrpz^pgsl0tqYlt37W');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'K{UcW{25tS$WII:+5F=UD]A[Hd.3|@0SLmg9A)K]dew:.V2yW?|[m#ctC[<Jp!n:');
define('SECURE_AUTH_KEY',  '?H#||G;Er*meiE+>u/?Le,d^v3!&fA 3C]Erc+D@s*?13.|WdQ3xt9%v(bF}0_+~');
define('LOGGED_IN_KEY',    'oph-1Ne]jB0prK0qV><6-Zt/_ KSX^6?4KGAEYhz-+p0)2A0Yj2FbZ o;9%`-[-i');
define('NONCE_KEY',        '<rLQWWEQf]n)EZ)vH=D|r[JvU]0iSLM]hk@I %>mBm}B=)/=wi>KJ<`RJ?bF{KM(');
define('AUTH_SALT',        'VzN!ICjx;cq<6!6&:,@r35fKFFQBd@j3Z`pyjDZ|yN xmh[-+4k[(RRVQtRK#<yT');
define('SECURE_AUTH_SALT', 'dH4cSvd! z<t&V<3~-nncP}WW7[F>7FV0YK*wY922@|2aiTM;dRt5G-{WlpDDu%o');
define('LOGGED_IN_SALT',   'f:{bmT.q`we/fIm@`C?5FEFN$+mY-qM9UT,_+r6Q*{8,(+@}ZBmZ;>S!gKfQH|r%');
define('NONCE_SALT',       'DR(-eC:+J^6.-vgYfAj7-@o=XA9TOkD1TnMsLdx,2ZX+3);u!jUa+X|x&Og@uHmZ');

define('FS_METHOD', 'direct');

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
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
