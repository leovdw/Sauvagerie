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
require_once(__DIR__ . '/builder/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/'))->load();

define('DB_NAME', 			getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', 			getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', 	getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', 			getenv('DB_HOST'));

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */


$table_prefix  = getenv('DB_PREFIX');

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );


// -------------- 900K Custum -----------------------

$folder_content = 'ressources';

$folder_serveur = getenv('WP_PATH');

$prod = getenv('IS_PROD');

define( 'WP_CONTENT_DIR',         dirname(__FILE__) . '/' . $folder_content );
define( 'WP_CONTENT_URL',         'http://' . $_SERVER['HTTP_HOST'] . $folder_serveur . '/' . $folder_content );
define( 'WP_PLUGIN_DIR',          WP_CONTENT_DIR . '/' . 'plugin' );
define( 'WP_PLUGIN_URL',          WP_CONTENT_URL . '/' . 'plugin');
define( 'PLUGINDIR',              WP_CONTENT_DIR . '/' . 'plugin' );
define( 'UPLOADS',                '../' . $folder_content . '/' . 'files' );
define( 'UPLOADS',                '../' . $folder_content . '/' . 'files' );
define( 'IS_PROD',                $prod );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');