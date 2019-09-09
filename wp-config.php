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
define( 'DB_NAME', 'ganesh_db' );

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
define( 'AUTH_KEY',         'd;2PcK(*QF5haF9d~8ma+)S.z{Au&]Y#47!,ki,xPp{?GT;ckxS/4)_Qg#dl*a+<' );
define( 'SECURE_AUTH_KEY',  '?_]y>Md}J%hUeL>1Xkk4Cm#kD;~]Ro_H9n_iMxFv8!R!!X[84w>N/7kbE%t1SLk*' );
define( 'LOGGED_IN_KEY',    'Km6f} s$)E10qObv*$M01he?_ {/i@0j1OeGnjZI ON8~xQ!grQxgXE)[8%Ukh=e' );
define( 'NONCE_KEY',        'ww!6v4j&I,xAITIF6Hd$]a|x]bmxmI@Kp.JfPKPp4V*fGD*gP$EHZFshT#];U3Ag' );
define( 'AUTH_SALT',        'Da%#h%6W55#6OHyF&cUrl7P72+oPhP1!2K=.K?^a_Hmpc|id/LR2:}feeO_P}ZV#' );
define( 'SECURE_AUTH_SALT', 'J(9|d#o;}>$[xDJZu7!A&!``2kPlv>47aeBj72`9-hcW{F~?^bY?f01<_63:qUKF' );
define( 'LOGGED_IN_SALT',   '<n*i&12i)h_MG%vTfGrC@Jz~~SV9d<i3t^+s1QKOsNos7c3(ag/tVEb#BIj+W+8v' );
define( 'NONCE_SALT',       '~(Db`HTZsY=AI`cLZ3eXV;y=WDgqV/[;Qc7o=|Im!6^kBcS7}a?0Cci9p~usxU`i' );

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
