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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '})q=!9<!M05Q u.p.@m`LMQo6c:70!tgAfMb[h4yC]#-BSjh,Njb,tS/.WYEz%`S' );
define( 'SECURE_AUTH_KEY',  '!jH;mcX}fG[8`BwM][r?2q4Os/AmicIX~![~^Y^nk~{{<GPJzWa48;iy;0GS9&2R' );
define( 'LOGGED_IN_KEY',    'D,@LRfz[z-iT~X%KRzr&R}r$q}9E=/]6_Bd+Mf]MMYV V},H*^kf zqNd=)B~sfE' );
define( 'NONCE_KEY',        '%:<!:~yPkJ0U/M{Gg{WpF4m=Z=S!^$ft42JJW~QuD0k6^PG7ktCN~WkS=O`$hvln' );
define( 'AUTH_SALT',        'r3*8}v@BxwhVPoI9=!wC}17,iK>6Rr&r,:W|zc5-&m4.@CRJ5r[Lqi2Q/~J;ZY*U' );
define( 'SECURE_AUTH_SALT', 'l9Zd!j!%sI>D)[8A|?b[=S9,5]~ZL5@E5FpPhE9)~1(4^NZ^<rP~E-I/F%H1T%c`' );
define( 'LOGGED_IN_SALT',   'RY3Yy5kMzBv}YrO[$;(_96Kt4)F),Qb;U?t)nq)c<QuZfrbEY3Zh>xH<brD.POIL' );
define( 'NONCE_SALT',       'YPUxj/w`C XL)zG]MPHgEb5.;OYbx%F_ntcrpe5Ho%#-(DA9zp7w.~3kt|1n]+SX' );

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
