<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web-design-sun' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DXh}Fn /vnB:_%1{ni65N;o50CF#y!7?]U}Ln4~V%h&am7oDl{p*Lzr_nX!rT!3G' );
define( 'SECURE_AUTH_KEY',  'IXF=PK-[. XBr!#K!>!>-=:?:Y4f5I 1%rE7$3O%k#J7_.-JN51rIR[@Q2kGZVNO' );
define( 'LOGGED_IN_KEY',    '+;I68K:}`# KP-x[10F_}p<>cd;a<<*w8D!a-~#vHl;sAFgIFt%+~nK>ztl0v2M6' );
define( 'NONCE_KEY',        ',RU3duST[Y618{*g}G8`naQ=Qp4tLZlQZI:zbwQr*,?Tp/s(5:2DCjO=*}.;y0jx' );
define( 'AUTH_SALT',        '%JzR;UG3JKV|3cm^L:Sk%Mt0qe_{*k#zI2+Pe.X><WmW|_&6;J~@!ja#B7JLsz51' );
define( 'SECURE_AUTH_SALT', 'cvYQ; =-:R[/Wgw9E(^A=zBm1[N0@|O&3p+)E,(|AT~;^@+pJme;XF21gWw7[:F]' );
define( 'LOGGED_IN_SALT',   ':s*~d4%>i!1q(ieHwd-ngFF+rQb)hM;9U_%kDts>7-&E`J]#!@1WEBaeQLvRtr?i' );
define( 'NONCE_SALT',       'owLFFB>kyGE/59V^|NW/l5QGgg<RIHf-,DQ]&yVR5a+@kt4b]%FaW*Jzi#xI.$q|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
/*define( 'WP_DEBUG', false );*/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
