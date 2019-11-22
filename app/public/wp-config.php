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
define('AUTH_KEY',         'i0Tya1/8ogY9vJ49Jv+CJ7Cf9oJjHzTolIohNdozZbYDDOBfrIPhntyKrle8ZQ8qVpu0U4U3MmOYPnLaZ1NdBA==');
define('SECURE_AUTH_KEY',  'TXFuivWKHJkXudp8d5XyWZLNIJvu+XiLKl4dHp3mo2RCT2Pm9mvgSrdJNQvuqyErTpdYW1fqirFTVeaZuQaa3Q==');
define('LOGGED_IN_KEY',    'IjVVHyOOElMijIrlb6clxhaKLEKDHbFMY93SHLCXw3m1GnpurlvI7NpQzyTi16UzNRuqOC8E12px7sk1p5GoSQ==');
define('NONCE_KEY',        'ZU+8PsdUwQ3zDIeYVG2hBMIupoP8bKyJi3RbR3oXhTZBHbKQ4tt8tSh4Ihu2tpHBwtHw2wqOEkR6GJ0DI7hMjg==');
define('AUTH_SALT',        'PzzkjrDOzvKfScg/Br0Q8DSLTeB41utolGvUQwcLTix6GcWWefIclxDXGtLnYyQTx3F5pZ84YWMU9KEKieYdlQ==');
define('SECURE_AUTH_SALT', 'AUgH89hsmDakdn0s8awW//uG04jvScXn70C3+a6vP8LSMokjR3qV07Viv5xd4U2OPYlsuIk2h4MJ4yujBoWR9A==');
define('LOGGED_IN_SALT',   'lNkECYrIlXD6z0ine16wHLBXvqJGicHk0mR2TsZgdfLHAK0DGxvzC+VHWqW+TLuO1SYIIBoEbzuc4dGweaN2wg==');
define('NONCE_SALT',       'cmkXmn5uSN04MrVOsJJq7ErAOqo7Olwq27+4LyX3ydhUvPpUwpJJEhat8CmuNHvqy5eROR1Y/CpsO+9vOGW8Xg==');

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
