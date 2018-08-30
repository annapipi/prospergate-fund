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
define('DB_NAME', 'worksh25_wp788');

/** MySQL database username */
define('DB_USER', 'worksh25_wp788');

/** MySQL database password */
define('DB_PASSWORD', '!TKp92!Z0S');

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
define('AUTH_KEY',         'gametl511xj0iiqtumkxek0x44xzbmypdo07cecicasfjghese0oo42rb50cb3i0');
define('SECURE_AUTH_KEY',  '1sdmdjxcdjlhclpbf6lfzsgipmiytqoyphmhsacel089wditseigg37qlnrxtgrm');
define('LOGGED_IN_KEY',    'nj7af4blky3ads1hb3td3ifb0avptm8uwoe1acnpu8gscbld97nmfxicyahdsgmp');
define('NONCE_KEY',        'fjb8flzz4loosvtm3kttfwiyz4jgox52vb9aha0qd1e8yqxfqujpagphntvuuc3o');
define('AUTH_SALT',        'w8vhgxc6gujl5qlwvh25sgvjnoynd3hpefpimx1b4eus1wgmjdkpxc35r2kuda5d');
define('SECURE_AUTH_SALT', 'qsm0hlqg5qllxrs0wsaalcquu3nwflfdhpefzto3c4plgxhvm7slk2yqnrkzzyou');
define('LOGGED_IN_SALT',   'errrggbq5ljgxq1ate1ziqgh9k2it1dzzrbahadtovjdt1efcmk4lfohuuzhekc6');
define('NONCE_SALT',       'wokjejqmgbdbru9sal1gvtwgbq1bq1qevn21vjkczjwyyn9mu9gar9chpbtu6xf1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpy6_';

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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
