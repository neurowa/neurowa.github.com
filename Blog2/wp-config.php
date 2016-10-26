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
define('DB_NAME', 'i2927648_wp1');

/** MySQL database username */
define('DB_USER', 'i2927648_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'A.NkJMZ7Eob^g*(cKD*21~@6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3uqSiTgXaVVCYuTJKK06R2whNySe3NZ1yJLa0IDywMgrZQY1TrK5aKhhQQ0d0VsU');
define('SECURE_AUTH_KEY',  'GSzDLJgSEXoz5KFOiuFyG7CUykA1DFKRFELlTHdkOICUwyY8wBcpvbbSVskXsFN2');
define('LOGGED_IN_KEY',    'gGUHvCsOG5pIao75f71zosf7tnum962JZW37DO5XXV2eciE6UyC12vdCBhvE7Qiq');
define('NONCE_KEY',        'T6fKAtOAvBrlFYpJy9I0eB91cRxwiKORlwQGQF1ZMcRQ0TaUaeJfh2gJ7U7TujXZ');
define('AUTH_SALT',        'tg2MUevc0cbtta3IioinVfKhauWWDc1q3mIJV4hbztbRGOG4QsZUdTkGQIicIeOW');
define('SECURE_AUTH_SALT', 'GW1yjHyPxoHVzCKbaib0YehaJfjeMyBfPpDU2r5E84jmdKPnMXStoX5CDqL2zMCh');
define('LOGGED_IN_SALT',   'NnI5mX62zjucFoMC974yFk5ZyO5DWUelB80GSj9ioapbg67MzBC6VWCAuxj1Mth3');
define('NONCE_SALT',       'OrncQSqJxWmjUmyepXD58BAjC4TFGyKYCF9WJgHQQMu9TGXZAqITAdnqnkw4QwxD');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
