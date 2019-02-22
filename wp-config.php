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
define( 'DB_NAME', 'square' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '*umSSA>bg>zt?ky9xyW>`D_TL/1e&[PeeVpmb+<L(8zKGQhBrknvpZ|&b?q=m9y+');
define('SECURE_AUTH_KEY',  'IDr}zWfD|9fmUaejlY*eE[08R+^ir}[{ zf]|M|vS_(E=y[U=k2Ql`+rq4iB}v6|');
define('LOGGED_IN_KEY',    '< LFov4<7&jt3]5/C 4`mC`y![=*!02[v0>jY84lhQr2tmpcfl/))`t=r*OC)vU#');
define('NONCE_KEY',        '5!I<C^{[e1S~v_$szvzv@htU~~n&A>F-1&NkD+S|K$FLfL5]f9tnsY73GUz]CFQp');
define('AUTH_SALT',        '!~x|4&syb5$spYf-vVd|<`F{^JO,G_0dj?Kjl@5{FQae~u+o%=q0+3C+Q(P2i6+V');
define('SECURE_AUTH_SALT', 's9bb,<|+g-L%WO<w(Ce|tKnep#k[WcDt!nDZuTo!UY/*Z;c{DL1>0?32w1)u+v$1');
define('LOGGED_IN_SALT',   '3XPgI7e@j-VWcyh@a=&+~NS>~nh|IGq;7E`Sk*8<$]|:KTly{p;znIFJy_($6f2#');
define('NONCE_SALT',       'Dm2.uj.--%/@H^vS!Q&LP.B#.#Le{9HL.-y0i!$Jxv.#m`C6)w#t$g`YPo9:]Eis');

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
