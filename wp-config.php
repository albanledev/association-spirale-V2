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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'association spirale' );

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
define( 'AUTH_KEY',         '*S(n77 nb0EX@RNg=7s^U2>gQZz5}r(Yv6v:(?wM=XN)sW+D&#KSM^U1mOK%X)Qy' );
define( 'SECURE_AUTH_KEY',  '{ZferLRTMG;^Z.C8Oz}9@!0U_]sTu>um^qut1_p~}tG{S*0i,d|Kno>_;`y{^ltQ' );
define( 'LOGGED_IN_KEY',    '#5OvS(6RdZv%vN_CrTxpuKi&Tmdl;1=&4`?,o)7Lv+~CU@R&t;`A31i}BWyq&Nj3' );
define( 'NONCE_KEY',        'vOFZ^m)b{6e:~VQ&H_G5JcP&=#S_J/puA!ao-DbiSGufU@PrPWr`e^mTj:![!59J' );
define( 'AUTH_SALT',        '+g%lz5_vdKp;!.24?v$Ig7an<-,U1mGcsTh=P7%EcEO#czD,j-VwyB~fD&SLY_Pf' );
define( 'SECURE_AUTH_SALT', ':aUFyW(XfURZe=LLbQH@B5Bdu]=@_Uz1ZMZH*eV?DOsE[+o`JPyV}G7Ms9VX4~Ns' );
define( 'LOGGED_IN_SALT',   'mWMeM){l`Ch|wmz<QZ +qOK)*wV8,HnX}R+:d>}L/#oT/`O,({Di=M@hyWH=k-*d' );
define( 'NONCE_SALT',       'B%G84^hs/&=-=zNn:{HW>U^~G. V0~>GI_GG{7;E$C!htRGy?FGP_0i!otcP3@w;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eIrSdYqlwZMqsr5k_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
