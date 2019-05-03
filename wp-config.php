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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'Q(aO9^&39*#>FP4#,>8}ke*NCqFVjKY7{O#$w6AtdBxtk0-v1.Su<oD_gb#6t[[/' );
define( 'SECURE_AUTH_KEY',  '8qCKHK?TkHR$+JM%vP@RNJ_WKXm!eY nGs^Ht[j82U!=+$LPV~ci`nzSWv:5Q/4H' );
define( 'LOGGED_IN_KEY',    'j0=@RG?uk=D4;)[K)dl+~j[sG-a4hYQ:B18&7_OO{-y{pqVx!X6.Y:c(p?sb.nqy' );
define( 'NONCE_KEY',        '~K!VAGF41]>pd_8dwk;K!7FW6lhL<4i!KcN(C1j5Y])b`wC>#~&Z<.HnoDQo0CK5' );
define( 'AUTH_SALT',        'h0vv*=,}{xW~UDdJ>Sz]t,Lm|J71.Sc`g^V-po/-vuT`yqVI:/GoMJndB`)c)bYE' );
define( 'SECURE_AUTH_SALT', 'I4F58^,g%lcM +Rird)5Wk>-1O1D?yn2++oD$ZzaPO&r.(1%L;(_1)%oCj)D-`Re' );
define( 'LOGGED_IN_SALT',   '3m.zW|~frpcnB)fL_WQjkAD~$Dwk6jD}*<:3Q{IR!._FwBo%7E_:/Zk{@$di$V=4' );
define( 'NONCE_SALT',       'pRdgHj;Bzp=/JX#kP4vk/IqkH+*nh%P0JOBTQScFFyN=k}35sX,NU-K:*cD)`y9T' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
