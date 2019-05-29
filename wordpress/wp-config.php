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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c284090520' );

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
define( 'AUTH_KEY',         '~IV~}!M!B4a#{;7@eQeszJ5pCW]r%eg5k0lv+stcElV2AUqr5n#D+/IMVXUoKq=?' );
define( 'SECURE_AUTH_KEY',  'XM:)8d6Cr;$y=!XJ.ImrX/6fsgL]+9@tN3T;.*^Ljn*ZEg>0.t1}GG)mK@Kj;xuw' );
define( 'LOGGED_IN_KEY',    '&[m.x-oU{|ooAa9iUOaX~OsPb<JQ9#H1hH3+td]l:2y6wSxNq ?eOG&rsQk#ed$>' );
define( 'NONCE_KEY',        'Ltj5F1)IL0e-p()brn@saY}D<[iY?*o2/-1vZjDBiU#330yRE@>Lq^ym_$n8%WP*' );
define( 'AUTH_SALT',        'xt<58!d[sMz1tM=!=&=D0h=p4{]vjqP|S{mHGuBpCTA}A/adxs}bPOv!yg@=br94' );
define( 'SECURE_AUTH_SALT', 'p^&Yvs84rfeJ^!7=^~~0oNV_#RSn5g+|HUZ,o=#4m*DR^x +5z P:%P{o)vk,Gk`' );
define( 'LOGGED_IN_SALT',   'uX(1*HgM{h-Juh] *Bh&dI$s8pqTIrn@UOX}-?l?`L(Z&&-d%UH$:[[<`cl8Am T' );
define( 'NONCE_SALT',       '7J8/z_4x6-w5t-jaoZ%HnTu==lM;<H^vt{s2oRc0{x9RLs=Buw-cdcF+ev2{L9#=' );

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
