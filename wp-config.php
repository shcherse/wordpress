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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '4`q.o~Iei( J<;J-q^BA=J.[}Zn.$YMTSGePc}o Hdwrk_xy$nrjQ 5r)1b5f(z/');
define('SECURE_AUTH_KEY',  'E2`{P=2;_x7ke^79BH5r1D9val9>jS/<#4rMSyxsHj8>B;ed-fMO1d?rrij{]%b$');
define('LOGGED_IN_KEY',    ' e.dIekVP]K?PWjr7>FWNolv+3Z8wl-k7 Y-1Z<xsZp%`NAa?J>OFQ)/2dwP,%af');
define('NONCE_KEY',        'e%@x|OuSu^D8%2(iHS ;N7E3<WN&CE~+hmdoUC.k uY9w[HntU_}LplwNM=|;GVL');
define('AUTH_SALT',        '<3;sN=iBcSj&]=B*Y1~[loNxV`_)WAIxA!=rj@ysoc8kSqs[.;X}Qb>W%G|d5KM]');
define('SECURE_AUTH_SALT', 'ifakFq!p2TL`P8A}kuM%0r!7OXX?<x/c9PqoZVn8A}M#?f+2onsd!+m4U&9(eq^X');
define('LOGGED_IN_SALT',   'b H>Dw0RrWRq23LG>?&Dr;5pY1DiT{}{atE-LFMeF yL2RygY9_u{{SU;xd]O)Pi');
define('NONCE_SALT',       'K<A,62la3!.LZRS)lB~CdDV`^iEv,R;sPS,hVP4;;p]IWugf[Yl/I5*2WatCzBb8');

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
