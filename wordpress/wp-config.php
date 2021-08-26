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
define('DB_NAME', 'mobile');

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
define('AUTH_KEY',         'KRTSX,5^0W>7Pr/W+PB+&].BH+2tFvRh)Qchd0Qy{ l/S*To0s>*.^0x6$S`fwTr');
define('SECURE_AUTH_KEY',  'QB9R{e|m+_{S?-wlmF9oWs3ozf5}YN32Ff j5u~beC)0z1urRqW+b-/CFQzIB!5+');
define('LOGGED_IN_KEY',    '0.4O|tOSKz9V2-*pTs:03mc_jt@P0J:kQ6%#5`u]zSx0:UU=3Alu^?3R746/Tb7.');
define('NONCE_KEY',        '$t[y>XeOgd7E,DkF/7IIs$=K^i#42|MhGs=2CfD?TEiWD-0#$byp,!FJVZKm$jEm');
define('AUTH_SALT',        'Ns /$1:mTBwrR!h;c/ Vx.ru,fU9[?$g $*#F;cHjl|@PUx1/<^B.9$xS4B3jmF.');
define('SECURE_AUTH_SALT', '>@]p0rJ]{=2Ae(v8ex2dItk*nV[;w6U<OuWy}-]_Xy-cs`G!RMXf]ouGTW>K;!AZ');
define('LOGGED_IN_SALT',   'tX=+}*4tSlaQ(MPHD8L1ZoB9P7dXk mt4_CRTgW>3FYW|}WqRqH}E#bsk6f*j@=2');
define('NONCE_SALT',       '}JCMo{tA?FOqpoSD/}_3-^w9Ny[[CGQG(x|S%P?z--1j?Z~(PMYw, #$41KF&uSm');

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
