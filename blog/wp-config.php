<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'olexrluv_wpblog');

/** MySQL database username */
define('DB_USER', 'olexrluv_wpblog');

/** MySQL database password */
define('DB_PASSWORD', ')9x@ul59SP');

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
define('AUTH_KEY',         'tk5sft6omgkbsv9gv9btg1kfznuvzxlnfz9aqxg3l6o8gwfdjyyanwaucdifkawk');
define('SECURE_AUTH_KEY',  'vdzesha13hfo0rv1bkgtvpfakaakjkaiwzlkw1kios3wqam371eepsi1u6nee2tt');
define('LOGGED_IN_KEY',    'lk0jrjgptuxoq6x4kpt7kx9kvczqddvyl4sm236lra7dgvdpfnzdgiezgyl8seoc');
define('NONCE_KEY',        'napezj8gueq69ad0uwhnydqxyb4t0y6rmerrvdsnldawtovblakrhlezwkrfh5bo');
define('AUTH_SALT',        'tpiwrahsyw1ungwzrjg4kicitcsrsrcbponaoy2hqmbjqsjua06fnrmbpkonyxme');
define('SECURE_AUTH_SALT', '1v8fdpdcx91zogfl2ymaglkwp00uz6tx4nyyktfgzkgz3pyqh6pgw3jqdje0tdmh');
define('LOGGED_IN_SALT',   'ldgw6ssdreypy8fihteekt51bntb0wc6cmqal1xxqj9bisxhlzvvbktueyjtwvrd');
define('NONCE_SALT',       'btbnz25qudlexivukz4dnjhvexambnfcbkrqknir37z2qntfqmrhsgweaevqpu6u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
