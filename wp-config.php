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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'IdNHDHbEX29IA43y/P3TcGGkWbHGlixjEsZs7Aa43QEuOAlWnSUYTnTr0xUsFm9g/uZsic6/EKjA5IKipAaTiA==');
define('SECURE_AUTH_KEY',  'WSzeNscNfL/V1YtQ8QEJJ6PdPop+VyAya5s8XNXzTgDE2HUSHozTDmEh0xqxsgF3H8SlvdiuK/v3pTT3n1/dig==');
define('LOGGED_IN_KEY',    'lrhBcioPlpbfBnvced/TEcns6k11M6qZ4R4okWTzYa3UICZvDOnBQzaaj/zLqb45gD9iGVUykEDJqVVjtvx2/g==');
define('NONCE_KEY',        'djCGX563avEz2Gbfs+/nm+d2vXmsmaU0DSFI0kRf44mda0jQe+so8A4Ah7JkXdFnkN/awfFYecQFn2uuuDM+Jw==');
define('AUTH_SALT',        '4vhQkm2hlD4qbuXJyA14LDDviy6vdTslsXifaXA3HPe5Q/yQZ1nAAtC/0rxihfKc59zj1sg/s5ryFg9rIRSCkQ==');
define('SECURE_AUTH_SALT', 'BMcDhXRcEWMxwNAO+LalUKZuNQ6/RPm/68snjn3NI1+ZObkeXC7V7Mn0aUpGrLkZDqyhAIt/SJg93wRkAWC4IQ==');
define('LOGGED_IN_SALT',   'lzsS7I/sio4+l/bKvW9TGU3izc77yfwUEOh9JPFy1kp47liRSBHRM0J/CdnTEOYZVfjqBTKhlA1VVPRokb/uzA==');
define('NONCE_SALT',       'DrXYz30M48Joay1rgWldyug6nELa0HukUVlsKGN1o48vlPzCOK3XhoeIFlrKZ3tF4vY29j4wP3BzDoTiK5UycQ==');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

