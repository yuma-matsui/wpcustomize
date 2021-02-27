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
define('AUTH_KEY',         'k38nl6kl0XlkmonhTw4UJbObxNLbhEWeQ2aeOWF2r8hnx+i+qK3nd7gjoyaWZWcavmyLGX1Um+5whjcLzbvwMw==');
define('SECURE_AUTH_KEY',  '2ffzZa4BlcN9DG88d4EMf7UTsvm2r2h83b3Gl2V9IN9Gp3QeZ/+WhxorUoROu5YF5954aAq8RLQR3u/M+TBduQ==');
define('LOGGED_IN_KEY',    'pyioE2vMOKDwvCYODKFi0dzyNBGdQ2/gW3maBbE+eZq3c8czw/GkfFZHEbpraaDHnHwj3O3G87BQmS5Upazhpg==');
define('NONCE_KEY',        'wDyD+ly4rBFHMnoMJ/BiNBorUMpBewf8adY7Cfq2dB28CufcJQmufG3LEwVC4rgH2zxY8pHvVBrtHH98L3DvKg==');
define('AUTH_SALT',        'tMy91XcPXm1rbnrJFrafuoqnDv3diOwCTwwDLnz9+kq4lHfELxCl7qtBxVUFAV6G3fNjqiWZrpOorqi2vjrwmQ==');
define('SECURE_AUTH_SALT', 'HLrrMb8WCLqDA/YbHobkYAVgmIxRziLIwdqpzgQGzH+2aAM9po6EsP9VoeW/lxGC955DYjrCSpVeqiH3nE+dqg==');
define('LOGGED_IN_SALT',   'ftvxRd5gnfiZxVGKgWD4tlenTPpEaVQK/QayxGGr3JOzrjx+gHP2JlJWIrQIx7fZ93CLQajS6DYv9H413d3HLg==');
define('NONCE_SALT',       'q4j7bAlH8S2G7nEhz7o86oaonme4WiCfaNiPhd11+NNRhna0HlUyLah/aO556DHBY0xw9r/WVId15C/DJM/lDg==');

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
