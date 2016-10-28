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
define('DB_NAME', 'nevaeh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QEx++ezs:{k`$}+m9z_*aVq24n<ji:;5TsIQzs$CT>]3SsK75_)I7Jf0qS;752.)');
define('SECURE_AUTH_KEY',  '_Awa8Z(T^ni_i:TC~I!*3s`6/,`o4/S4k{ Kog4qy6~z[OR P^B9N~~,wC[]i[@F');
define('LOGGED_IN_KEY',    '%xaRO%#:kwc2><f,z+k[WbGs^wGU&-|/fA|M?gHEyN@+mG}i{X9ZKy)]+(T`2Y<1');
define('NONCE_KEY',        'T~Rx}{/_f`^Q4,.$v$7<b.fZ~90bSPsq#tQ4TQ{*`|).MW!5sW*-h3|D;w4OR:WG');
define('AUTH_SALT',        'K.SI!-[IPNz(J#f7hqi]|oc|NS +M!L#B6*)k{|=zMksd@Y0x?Jy{(,O&]v)~nxp');
define('SECURE_AUTH_SALT', 'Urd7`0WN)6r&kCZxh|U88`MG9F5-%F~?>?VsP#~Rl:;z(96x[HR9YwZiI]{y47U ');
define('LOGGED_IN_SALT',   '*~>OizSw6>+L5O-Q/4Ij8`#FRK[o)/9K0NL|Pi5f:(!VG0V;5R`Ksr`2!aV:4oSX');
define('NONCE_SALT',       '3&7rJq^Ps#Jno2&J8hK9OH66[`_gl s?@9!TOw<%<qBa*xX%(2;1rAUcAyG$SHEi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
