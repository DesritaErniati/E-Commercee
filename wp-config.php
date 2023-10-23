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
define( 'DB_NAME', 'db_desyuk' );

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
define( 'AUTH_KEY',         '-!IWrl3|>x,}`fhWhD~VsR1Ami>-D>X78ud+C1[K>LiQ/|~nKw9p{LUtQ<$s5_{+' );
define( 'SECURE_AUTH_KEY',  '+RgaV bihhjcwl3DwxiL=xQ995W;V=2zIHkqd4o&UG5Rc>~WF9*$DnN~6}ub%tQS' );
define( 'LOGGED_IN_KEY',    'g~N N:p6=c|;_ jtdf:B8]?g&2W(g0SANK1eb)(> y}su0Z-&8mnCM_Dc7PY]ao8' );
define( 'NONCE_KEY',        'JPKiLVc]i+t/DtZkx;$YH0IEv>IOD12#?@UHBLL_%b_b>:P9tZ6]EHB@^<rV!=2X' );
define( 'AUTH_SALT',        ';1GQ;i%.Q-)uYJFtm]qsB/I5=/Hq%awTV.-m#P5aUf%ANjqgFETl1N)IRUws34Q9' );
define( 'SECURE_AUTH_SALT', 'toY}.2EaAOZK]Z]S3Be`(w}9WtA>I>v~dN18I)q3k%hM+NBbT=_MZ+u;3 [j,.;Q' );
define( 'LOGGED_IN_SALT',   'Zmb|KE1Sj$$t4>nUU2((^fMJ;~e!Q/;.}kJ#w{!^RNp|pUXk8)<]*zI3jl:d-N@6' );
define( 'NONCE_SALT',       'bisAH4kZZDK>Mn&Kt-6+rxq#di cTR 7M^g?M_U_lY ]7uTs]@KP7pFyvfA)_I$@' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
