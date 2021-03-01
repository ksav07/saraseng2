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
define( 'DB_NAME', 'sarasengineering' );

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
define( 'AUTH_KEY',         'WH(GwC5YIT}>IIb~bqEXgiX}?MpH3OsO%x:A0pjoUla|N^NT2BIW7i8ER[aFkLQ1' );
define( 'SECURE_AUTH_KEY',  'P9j*lWHQ:H27[(LZR@z_ud&fV$->c87@)y3p0RR1k,U^#K{3A.dR>R8g{J09`^$-' );
define( 'LOGGED_IN_KEY',    '?ZRxZ[Mav]TXk^MT&M<JR[5V$ <V?e!>U{VD`EPuk$<}>KxJ!QWI,8+SaxGmzseP' );
define( 'NONCE_KEY',        'a/S$yR;eP@] 7,q9{D9NVm9G[6,@Gi2-+C]lA*Ulzz@xpR_VH0HH L/LgW]1*+W.' );
define( 'AUTH_SALT',        ' i^BMzMA76$l!3=etC$aj$GrMg3FK2Sw8NJv9yK#yC &ech7qB@c-YyFNsS*~|~I' );
define( 'SECURE_AUTH_SALT', '-ObWS1Mn[RX:oh`Bab{ZF7?lVc+:y?Dk1FBL?eJ#l);#*S/nCgQ>ZZH!VbL+Qd6-' );
define( 'LOGGED_IN_SALT',   'Ii8KGwkvki_lxku4XeL+5WlJM)Y0s}Y{s)!ka[&YEt^foEMkNVF).uKKw9z JtQ%' );
define( 'NONCE_SALT',       'u=<_?3:c*O3b@y8)Xiw/8mmxov5MN#qgY=k 0.N)DS|1<|k-@g8Lab2zn_tPj~<h' );

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
