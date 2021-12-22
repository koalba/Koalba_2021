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
define( 'DB_NAME', 'dbs5100312' );

/** MySQL database username */
define( 'DB_USER', 'dbu1098179' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Amanecer96Aa_24121996' );

/** MySQL hostname */
define( 'DB_HOST', 'db5006092770.hosting-data.io' );

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
define( 'AUTH_KEY',         '~/!w,VoJ`6r-m/ei%MFp[-/RNhW0QFu_E|>w8qW %RfhEfqk<0;ZU$?hpOP$t:Mz' );
define( 'SECURE_AUTH_KEY',  'A1{o:U/2@J+_`-vum3X!5>=M5Vpg9>WvN3JLi@?s^U4..O#|6tgzH0&^VBt-_aE?' );
define( 'LOGGED_IN_KEY',    '1;c2EUcd#q}.x|,GY$2e%n<>l+EThD)&wC!XzVJn=K-zt`2jMpofL3X(&I]0&nw.' );
define( 'NONCE_KEY',        '<N]BQZmG&9Cm%HHuB&on#g2cFKo0dz^Xt3+[%zKE7fs)lIG9_[8K)iWb-5lvMkcp' );
define( 'AUTH_SALT',        'ShCNZ)cL6T1e&X{AEQ.6@W[ys0^YeYl#lZl+k{K3UgF?5%1+tM6lzpZ6}]w4M9Mg' );
define( 'SECURE_AUTH_SALT', 'tm|%3Ut{uHmHB1?=2zHTM50d_Kb;HR6,=)?*!:]6qL;5}F+J_o}T>}_Z2XcsKO*w' );
define( 'LOGGED_IN_SALT',   'mMc_<%_`u&vrSB3b4gDl7tJ$ huDqUeqNbZmg*+coou`eHH*t{foG5-a>q-J,KyT' );
define( 'NONCE_SALT',       '{$5]d=/I(XA7/c~$zaTB]0p_b./)29it9<76UA-7Nd+,Z:v61.h60su(^Kz7IS[M' );

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
