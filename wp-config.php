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
define( 'DB_NAME', 'hadafeto' );

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
define( 'AUTH_KEY',         'UxumUrft-OG0/e=R>*Rh>a(yRzJZZ^ov4a+ 9RlwE(]>c`.(d,$)GLV.}N[wF+{U' );
define( 'SECURE_AUTH_KEY',  'ds#vTn86UBD@h)|l&Ztf49GRwIzO?1tvITV#B<V.QE5A;=epj82WR!w3w;UJsJh%' );
define( 'LOGGED_IN_KEY',    '83WfVpJj|;=EhKvv0[fb8pU72B)]5!//#YQD_4^q$t-R[T0mHvq}+,!&CS&a[44l' );
define( 'NONCE_KEY',        '+thH^SOV+BT(y3tG%,%xu#%d~N~X@d}K<!+!,^ClD2CX.0>-mf>X]vav>|iCe)Ze' );
define( 'AUTH_SALT',        '.|Y]8gn BF~2Icgm:{rZxON,|i?4;0[0kFf_>Y*-v)HVxvb <LAkJc9aL~!.?/Zo' );
define( 'SECURE_AUTH_SALT', '.Y{a8X$J>bh9%@$`vBZ(NN(0QKq7$c6l{m_T6i5nNm;/h|5q3i$HJZUM!a0s))h6' );
define( 'LOGGED_IN_SALT',   'ZBD>~jDblRL6COw,8m6`tt{v/&cjg}zg=I8 v5S~r>){?NkAkhdH{3vL-B;D_:It' );
define( 'NONCE_SALT',       '19}pWDzjij8Hm9+DOE QT3uBG?<K:j;|Rk~*cYG59Ve%vbs*c`oNK-;j|rSrYPub' );

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
