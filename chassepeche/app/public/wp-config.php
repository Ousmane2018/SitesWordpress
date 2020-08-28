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
define('AUTH_KEY',         '/BttTd4CfxnFVvBuOyZdzkB7cyr6+iJ5r3HRoU87LfPwdzsdl6qfPZinVr8oyDiT3JydMVB1c9+/FPGCM4sV2w==');
define('SECURE_AUTH_KEY',  'jpw58ui0VxwLWCV2X+Qro+Lx3jxxWei9Gz0j4VIH0CYZPwO581qA8likriEUpZp6NlUalK+vaEEyM57sF9qzOg==');
define('LOGGED_IN_KEY',    'DIUlI6zBkp4D6BwD0/1jVohdFy4ia8iuUipoUlBSK3VTiHrVIT5BThcJrKeKcUpl9sjQfeQyaBz7kS93lODFKw==');
define('NONCE_KEY',        'Ck9BpWagJ6KZERiOynNqxF/t9z0kfMsEVpeKoq8MFiSCogwm2Z/c1RbSOBgDi76RoKpAEjmNVrpzOLhu90vpSw==');
define('AUTH_SALT',        '/UCa32tKAWZQlfPorfJ7t2VvyzGLmZFmqfF0SjeQlZQ+MuIQXkOS+VpX/X9jlKx0grS8adheYz1iufqL/phLvw==');
define('SECURE_AUTH_SALT', 'b2oXPf54uqbFkITUHKCDcShuUn04Zv0stPLrMmbV/pHzlvgqpqbAC4fCxTiHaSp1WqHhmdudU4B0XyhmPOKRoA==');
define('LOGGED_IN_SALT',   'x2JRmQUWaScg3HTUv/HEqXQlT62WbUvLyk5Altxls0xff3ov9nCU70/OvxUTgBZ7Up7d7HtCaPUdIsZ9VjHqzg==');
define('NONCE_SALT',       '+4INRmT3FGM9/op9jgYYoOWI7hfWN89L6eirOS1Jxl3pfpFVvG9le8Y6AmSX6w/Js7km5ccY5nkAQbpXN6ffEA==');

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
