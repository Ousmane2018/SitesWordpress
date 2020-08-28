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
define( 'DB_NAME', 'local' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         'JYNUTwqpnhCPg4rLXT+ywCxIWuWq/IydiHm91iZJTGODOI31583wsjcKAPEJEyzHtagbD2oI7/dSwmnMf9hNAg==');
define('SECURE_AUTH_KEY',  'S8FneT6FMvHCtPza9OqpEGbglFVwGWL8l5+I7n1zleboQR6/GpWIy/rcEz+zGZ+tQ1hGXE2FG07n0IhJWA6pzg==');
define('LOGGED_IN_KEY',    '4DoJB9ZW4lRU4WExgkdSxCSTEq84v3njikoKZdE9YOyEjrgN07FWkyFUH7vM9CndjzWsnXLGUVQqG7sakiIjsA==');
define('NONCE_KEY',        '8mU61+1qY9xK0wr2IIqbpustgQXJ4jzaX1dqFimgjeYPrT1XnIddwwhdaRJjEHTOOQkHBAH88sut0SJnB50rZg==');
define('AUTH_SALT',        'aRG95rcOPYDs7UwI2VriQ+P9W4CZUT5bBSoiCTrPBLz6nLBjM+D3cDZDHJeQbSp2dN3yreRRN1QIkhxL4fW8KQ==');
define('SECURE_AUTH_SALT', 'bQIBa8zp8h3WFNSefDRLSR0dpfoQTq49RhIeYT66qZ/xLz7IwQGC5VgtA4OWWXkoOEAV1NoPNbXY89Tl1tqvsQ==');
define('LOGGED_IN_SALT',   'fVv94lzWuQq0I/2zr8Ye7iCH7ACfXbJCDmTGeBo0oJHC9CGgX23y4uciOwetlJDqsWu0GU7xR6Q6KzNTM9+IGg==');
define('NONCE_SALT',       'iaCLtsjBVqdma2Bod19bamxpCRRcEsa41HSCFXhcSnVf6nSGSV+4l/awy2hXi5nemMs1r2FoWwl3tMGij3+IWg==');
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
