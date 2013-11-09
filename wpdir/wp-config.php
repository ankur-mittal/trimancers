<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ankur309_wp186');

/** MySQL database username */
define('DB_USER', 'ankur309_wp186');

/** MySQL database password */
define('DB_PASSWORD', 'de5c1vS9wP');

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
define('AUTH_KEY',         'xnclvkcswxg0h3t1zvncjo31tckrjdohcaawx4gtfpgqic52pywps3qpqp3xrfjg');
define('SECURE_AUTH_KEY',  'ypkbxbolqilzigo6l2yv874l1rw2nannql4ngjjlu0q4l2bv5bescdjzajsgkcix');
define('LOGGED_IN_KEY',    'bgabg11iwm9ibbmlvp8xkmttg8frc22tl3czbqhixiv0k43e0axm0pwwabwl0qcv');
define('NONCE_KEY',        'p8w9n7f2l6n94kctfvwq6oc937rb56oxhgjzshgzlugtdxeyjd7p217xt86outao');
define('AUTH_SALT',        'mbggkwj3qc6f1ocipstnjq7ivo6e0gdm6ftpipmgos2u1fdgzdcfvb6jj3ev3vz5');
define('SECURE_AUTH_SALT', 'xe9tipca7zfjajtddwdmgl7iub6bsvoxgsdfuhqas5muptscblu0ibjz44yzax2e');
define('LOGGED_IN_SALT',   'bekr25g1jiv4qoovfhnfj83i8ph77bz7edujw3sw9z0ojdftda0mbdusu7v1drg7');
define('NONCE_SALT',       'hdl8ksxdouspxgbxyt95m7uom23dc9h3mkwtchtlqrudbsjjbnsjk4hzccrrtzvr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
