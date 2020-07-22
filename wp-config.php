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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'y1jUZFlugZhHrtE8GQxoU4qJSRiB1k6a9IDzTzy5oZlOuaBtaSNg6NgetpzH3s42xOIzjrUmJEYSbd5JNWSn5w==');
define('SECURE_AUTH_KEY',  'IkUvf4XE7ewILDfjlq2/8donFGMEdvM0CcyFTxgWo+jH1pNJFTyMFROi3SyPxtcZwUe1SmJ5Giuqd7vS75j4rQ==');
define('LOGGED_IN_KEY',    '+8CSsZwkYUwcVKUknQNZN9w250GmT3wDHDA94etYwGWTozgTAbsUHhMzvlzhqZS6Rc+fUwIFRa74LnXzbzFMcA==');
define('NONCE_KEY',        'fu/7MvzPHr92XztzJaBCvvVlvh8J5mfqpaTPtHYcu6SxvsX3QZiw7it2SO7qPyd+FC4MiTdV73Ws09bpGjO/lQ==');
define('AUTH_SALT',        '9/PW8OzDT3Yz7xTk7fW36U6V0Pht4hjNQw7lQkq58YZ/Kmub/QRkhziL0wzbnOphiF54+KnO8S12NaI1PJuzJg==');
define('SECURE_AUTH_SALT', 'GIg0EhW8wKSaoDh9SNSyiWBPS9EUVH0pIShiJaM76WO377Uc/YY5i+eWlJ6pk8PLyK1sRuKYv+k2qp0sQ3uYVA==');
define('LOGGED_IN_SALT',   'FAPbraludVwzo0W654AK87IhRdC15cDDf65Bs2NMyoN6EI+gx+EKn7lecck28RmcI5tx1zTUo7iKd9HV+Ebgeg==');
define('NONCE_SALT',       'cizBqAyAptRL3tW+pR6U+CAuj1ocpMNumx6R6vXk+Bg1HMKwvSjbz7VzUl15NE97YqXxUby8zvUweFKEp0Xk0w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
