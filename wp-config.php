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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ropa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jmBCo)XFlLj#nsZ#z*2F|r<WV$dWUzTz>;,x+># `l(ja{I(!*18IxtgiYo)(m[r' );
define( 'SECURE_AUTH_KEY',  '<1;CuiuMNDq&a@RnJXqz`OXokEf}&D&)_2R.g!H<Wn3f?SY%iQd0IxUM<a-U+a<@' );
define( 'LOGGED_IN_KEY',    '{x-eFr)QtlbORM$`EC=[ey?6RZ6Yukl92Aak?Fg[=E<o9P1_E<eGj5a1MVG:V&GX' );
define( 'NONCE_KEY',        'Xh3zSABrGsB4{hHl%yUfJ6MQhh VKb;e|!~f$Dbe:BdJAzK)Zj &mx?/RtN|r%Wx' );
define( 'AUTH_SALT',        'uS1`yf;[<b >igUQ=.0-Mv#)--xv%vdte7-fbloG~L/;g0PUj[;G Sj.@s+!gcOd' );
define( 'SECURE_AUTH_SALT', 'pz-S9Y0JJKi<omkN`1leT)6dUMY!.l.fkhB+BV3]&C_Ib*gZ[Kj+^YpAoDn>>bv$' );
define( 'LOGGED_IN_SALT',   'HY|x>6$~.fIM5@J42TPpL`es~5QD[c,/@pvSKv@i(~U;&q)L-615~G0+$A0Lt@iD' );
define( 'NONCE_SALT',       'CNsdo&NQ;|NP<|!FJPBv-kxcn@;yuf/E0;-ed@Nqjk}F`QiBz.1mtPw|VxH.JtAc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
