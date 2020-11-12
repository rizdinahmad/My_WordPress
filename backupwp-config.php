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
#define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
#define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
#define( 'DB_PASSWORD', getenv('DB_PASS') );

/** MySQL hostname */
#define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'lba`BqWWeM!%,+IY|G+nY+iunz?;#5B)swUyI?hQ2$+REKbN<$)|vsQ+t12NS b)' );
define( 'SECURE_AUTH_KEY',  '6;-rBr1]|~V3,}GsX|`|k52=$E^ql-J<V&Nl>NW9hK}+|S<y9MojcSq85fx/D|m8' );
define( 'LOGGED_IN_KEY',    '95H{_/HticH<Q,hZ~ke.W>*.b`S#[,3td&fo8P$?o)CjpN4i8B+qX^Ow%}vwF3hW' );
define( 'NONCE_KEY',        'zI?wO/&Mlk0$Id*d,~n}|q3idaGD[BRLE1@wO}vl7n?bnMR}uU: VQyleJ(Fxbp`' );
define( 'AUTH_SALT',        'lw]eQ2NWXzq+O--1i?$s#S@&T-4]`wqc2.7=4-kLAZZh8%|>Mw?BN}1,%$`Nnz[@' );
define( 'SECURE_AUTH_SALT', '0<df5(c7iZyr$~ve>nGTN&S]!%v9Ae#E;q2dS*v8A,9;&yPp+ENF6#&4dw$t-2W[' );
define( 'LOGGED_IN_SALT',   'Iy)?*_1MBGu-m>~%?+59:xG=<BL)zDR~|0N}d [dkGL8ukfU5lF.3ZBb/{.)jG@*' );
define( 'NONCE_SALT',       'Nn##h(S}lkw=OG!?.cc~yH:=1@-Mj=D}x@9qk61005Nw$vs,BOyL-j4B5<li$^ #' );

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
