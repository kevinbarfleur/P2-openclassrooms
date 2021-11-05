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
define( 'DB_NAME', "kevinbarfleur" );

/** MySQL database username */
define( 'DB_USER', "kevinbarfleur" );

/** MySQL database password */
define( 'DB_PASSWORD', "Kepler186f" );

/** MySQL hostname */
define( 'DB_HOST', "kevinbarfleur.mysql.db" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A/E/ok8WeOXS/dFvx1bJaYcQY5vdQC2BQrlrmhW30FxlW78BEvcwZ9c2ara/iuV5PfLCsFkkiYVg86d7t0NzTQ==');
define('SECURE_AUTH_KEY',  'WkuW3GsxxUukcMCjca+YN9zRGI/syk0P8rnLvipJXYXLAPXSqt7XclASCsqHFS6TVsJF8T5TH7rrcqIMxFPJKw==');
define('LOGGED_IN_KEY',    '+BFu607JBkWBxYn8cgB72whhrLPG9VpM/Xs2B6hNza7fr3lR3znI7hlUUVqH3zFGW/0fi5oqHz86bUG0dBkrnw==');
define('NONCE_KEY',        'ux6dEH815SLO/zjMpxj0bdKx9uiCenx4F+/d6Xd3VfhTbaAccRmzEopfwbLbTUtpJkSRKFqzkolzAgbCQwGhLg==');
define('AUTH_SALT',        '6+9OR+mQIG1BYOU8hAp0XnaKX8Kp25D2ercFBL/5RfcJV6CxJTtijtlJR2K3Lg3/Lwj0kBgjJPFlA8AC/X+GMA==');
define('SECURE_AUTH_SALT', 'UA80CrDKrxY9dSJ+ENj2kSMMsER+sXm3NBmzS17x2QU7CcWOr8oh+ncsk57Ou4xXdYhAq8ntQAhiz+P+zStcEQ==');
define('LOGGED_IN_SALT',   'y0GvBD04gPq2ud3fJ2540bAgnkrMl3oqFFa4Uq04Q9/jFydB9XV7EqHL+HGnqr7xl6v0VLUAanVythPcggniGw==');
define('NONCE_SALT',       'Ce3TNx6xyuPKj9nnVOf4RRtZN3a/nXW+oqFiQRqbGNTj9n5Jf0FAtk05SAS3M+B9XTqEXpf5ZHrpCQ1hBFzEsA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
