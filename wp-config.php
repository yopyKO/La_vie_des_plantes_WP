<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         'gh:yx+wKns)I,0g7$f[}V&fwrL?(({n%0~BVrNvCY=2.H&+yf@ZB`x]f3VzP/zr6' );
define( 'SECURE_AUTH_KEY',  'F&lj)]J7IIa%py*>vLt4Im5d2o+>-]6K YWu^0gL!Ggkg8_hoz@ kL`2i=sZ$m;m' );
define( 'LOGGED_IN_KEY',    '8XoX#}TnH{/.*>EA;:>lfB`6J-(1+IjS*8(; mSfiEV)BhlpIe@kJ3XwQf@!yBI}' );
define( 'NONCE_KEY',        'Z,*TFrD}>*y~A474VZH_eUy*Nj^Idg?nmy2Uohu(-a:,}T) xv]_JGXHX:K>^@-t' );
define( 'AUTH_SALT',        'U<b{oa9cD:$zwh1w-CK2ZMC#YBZI1I^OfXp6tFz^`)NOovT0^m+ZOLi)mi$3@kgu' );
define( 'SECURE_AUTH_SALT', '9v<85U@Pd)Q~o9|]DUkmxKuKHeryq)).@mgHu,~rg54{toE3%~CLK.ANj>Rt{g6$' );
define( 'LOGGED_IN_SALT',   '|sn{u!(#7Ix36%O3j7,]-)]}z9L*YM]PM5RK!p3_TSXtju`Xd&c-bR2p!XYo8VLn' );
define( 'NONCE_SALT',       ')Ml}?<1>G@FE7Xg:]0&Q5NVc% 0$a&cAJ.E-a1p#;7Ctqq%o)VN@O1h)P0lrAy&C' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
