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
define('DB_NAME', 'esbcwp_blog1');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog1_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog1_happy');

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
define('AUTH_KEY',         '8omycdv1wdtzpnzgakduanp8kzuv7m77rdpofzjtzvsb4p879bjusvd3rj5im5sx');
define('SECURE_AUTH_KEY',  'begpkpqy5wnwrvfo74zef8gzdd8eifkyakjsbt0n07dv07tadsqfmi3nti6x0nom');
define('LOGGED_IN_KEY',    'mvvhvuyemmjkdantq54qj8oxdks0epjyj0gz255meciyk6vbk3q8hgxv3bnphxxb');
define('NONCE_KEY',        '7kfm5xuuk21bmxvtjvluc9tz4gixwvis8iedkcnif1axyvg7jnqd0rzgaa6yxdnj');
define('AUTH_SALT',        'l2ocactc36mh5ksabe6uwokqx8wpvbnfyieeljo7juan3zqfvxopt1xev45ppbjd');
define('SECURE_AUTH_SALT', 'am7kcm6govjeb7nigqyxofieqlvyyt2ytpakmwtu3dknanzwtb4nfyb3qgfy5ggf');
define('LOGGED_IN_SALT',   'qgp9pm4j6svgolhvjsqknmybozcqxmiqgjqfpwuqsubrmi7dtju4pfx25egdccua');
define('NONCE_SALT',       'bsi9gq8q5tjzgnn3xbdcyzhugtpsrwcjcelx0us7ggyhlmwzra8dpzxlf7xebvox');

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
