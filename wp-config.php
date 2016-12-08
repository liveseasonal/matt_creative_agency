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
define('DB_NAME', 'matt_creative');

/** MySQL database username */
define('DB_USER', 'matt_creative');

/** MySQL database password */
define('DB_PASSWORD', 'giveitago34$');

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
define('AUTH_KEY',         'mRIv$1*l`FRi&.#w:02mQ9LVg;13GK_ci=3(IDi!9z|qp`i(@s2>@}MiZSqUT)ls');
define('SECURE_AUTH_KEY',  ';}zoWirdDkC$v)O[.|)~lq>A*L+VCXxmb:vuAOKW}:t/MZXFx <teZ?.vsRTaxHR');
define('LOGGED_IN_KEY',    '=eNd7i`)^qqC_+>w^Fqp4z!T1QRxop0En 2@+46QCF9k-a`YnVbxci( 27G!R@mV');
define('NONCE_KEY',        '1JL),K_9HBB%F`}[l{mrvvOv#jO03tf%Dj[7kgl4`/)1Nw8c7em[ @ j9~b|5][y');
define('AUTH_SALT',        'tz#pL &+B9BC9yy.M;2>JkOl5JIcS5gvayq)s<m|1CJ6dBa><)7gGG$OHCedJfu`');
define('SECURE_AUTH_SALT', 'z 7m]St;Z&9FJh~H:lu@tqRXyv;u_&GT4 )S-*|MouS2 HAnQxTR6fc= Hvguczg');
define('LOGGED_IN_SALT',   'pQ])Dj_axob9uj|aL@%oE)#EE GN<88/#RC57Yv.LK|4sc%cf7_9[+M6@Z^#$3-c');
define('NONCE_SALT',       '2`~W0R%32ESGPAy{WwuEDzPk16]:M+39(OOP9|Y22[EC6#@GO $V%BVkO`UW5[?n');

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
