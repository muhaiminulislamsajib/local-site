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

define('AUTH_KEY',         '+87iqp1jc+6WF3HNdS6wBk1oUTGAUYUXDgTJKl36Qijj+HEIAEGnKQaGE2Rtw/5E7v2hJn90Oll4JDlVitESUQ==');
define('SECURE_AUTH_KEY',  'ptidOAvHpSoC2oJuQ0Mv8aAwfpgbIOvgBM7+Jk2xa4C7JTR8Bp5aZumOKgg1T4ywbDPKuA758s4U2V2OzITvbQ==');
define('LOGGED_IN_KEY',    'S/CO3ihrnc2h0Sh1PEA0BZjpe4SI4+gcbGtxpecK+0rnhj5zs4zAHjhtz2BWLwItUFrm+IWoHx5BW0rH08XX8g==');
define('NONCE_KEY',        '8TtY3HEG7rgFD66H2TIHuY1w+rbap+vHWL7BtDFvDlQPnMTm0RgVxp1U/gFXEZWyQvITRcM/8v51s08JxJESPA==');
define('AUTH_SALT',        '4qPikMQ3n3msehGnvjFa1kd9ULTXIY/en7mVTE/jPRRjwObl9BieasIn/DcUfhQcQbRjny4ZB1bKjIvMqlO3ww==');
define('SECURE_AUTH_SALT', 'NSSAGSDm42wywq+5/wQX+9v9UVwFln/ZJnlLNmMZFa8V9trpsEFNYRmlRdWkGlYHY/8/BMnNWs1nBmiOnE28hQ==');
define('LOGGED_IN_SALT',   'uOEJKcTe8XuQRTArkBOvmsvORlcsW4/QPPYTLro52BsY9m2FCALi0qEim9LLvgm15QEuEXAa9sGTjEFIphvYEA==');
define('NONCE_SALT',       'S8RbD/pm0ffjq1MUWETwnecMSDR7EiuvlvpUYHVm2HLFK6Z2QRCPPRlsWegOsrk8GNpAA+dYoheNpskcPLirAg==');