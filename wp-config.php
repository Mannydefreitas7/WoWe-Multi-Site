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
define('DB_NAME', 'db762985493');

/** MySQL database username */
define('DB_USER', 'dbo762985493');

/** MySQL database password */
define('DB_PASSWORD', 'R9n566ae!');

/** MySQL hostname */
define('DB_HOST', 'db762985493.hosting-data.io');

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
define('AUTH_KEY',         '$^H%0u32lvz9|{%^O4jFh=N#iX;TY)yNhz$JQ:(Q]![t]pZV6iB-kCDos1rTt5gP');
define('SECURE_AUTH_KEY',  'vfVpN2BxGpmc=Yq8~HNjQsc~@,AWMAtIB>tr:fH@wfVMy<u}9i27rm1vfs~o>>GM');
define('LOGGED_IN_KEY',    '`b}*@p#I~,$Q7A7e4N6.HWXlRb}3>xHt0uT/dQZ*&}_xc+p[!>wN*wP,v-L=^}@%');
define('NONCE_KEY',        'U4 fRfy]cn@-^%cLZaQweK|TB8a:&N<BvpX:Td)}`i,O`=E$::D i~[2xUOx%}`4');
define('AUTH_SALT',        '=KNu$E+EpitDrqX,X-iy8fJG0fg|v(mS=0bbnn|<.zspKv/c^  tH4 .G=4[k;M{');
define('SECURE_AUTH_SALT', '-20=- DVW*2Q!~/+S{%Sfg$JR4#pMTM`<a?$p$=cZ1ycCOio^eZepvE[ SUlx,kU');
define('LOGGED_IN_SALT',   '7Eo[[ygQCnd9>}HXkG>5O1eA#X87mcHz~QW}MS^#n(]</4=]5q+FQgzDVqh+>c!3');
define('NONCE_SALT',       'k75nSiA4t20(]oOA4:^y21Vb),7M0&1g9A6%+<u@] $I5|NV7m@`G)LU&9:CekFv');

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
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wolinweb.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
