<?php
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maisyo09_wp404' );

/** Database username */
define( 'DB_USER', 'maisyo09_wp404' );

/** Database password */
define( 'DB_PASSWORD', 'p8)c[S7492' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zgzdw3qu1xiql5bfpgyx4mhrgqkq61mchnz3q2oztddj9yarcifffgy6bzm1bamq' );
define( 'SECURE_AUTH_KEY',  'nwh9kwfhyxaeydop2bxcvkgkluwmk8ozajytt6ug0blalzb1t7k6fyxz5sheyiop' );
define( 'LOGGED_IN_KEY',    'lcylcklyiwauxauhjtastz0zezxihua3nwcwjwlwdhvjrasqynetcahjtnlfm0ii' );
define( 'NONCE_KEY',        'lyxkvwzpfhfiq9imle36zi6oh0owxgu7au5huvja3sn8hngmkgljbw7qerkg98bt' );
define( 'AUTH_SALT',        '9nfvcoscttg9th72ph1flpcs2s3fyuwm6aac84vewl2oo268ek6y6dgdj3bwtfrn' );
define( 'SECURE_AUTH_SALT', 'typ2lxlx7so9m830brtbf3svo4z4jayziqvgjkavch2ezzdiicw7zvthng50wcat' );
define( 'LOGGED_IN_SALT',   'txim8avfllmwiy15nlunoaiyvilc5xgpk7jqgvu0jsnrvbpsmj1quzn5gskeqpsi' );
define( 'NONCE_SALT',       'vjvdogp9g1rfiyxgrriyednhjqev1liq8fqelblqsdz6twnyhhocwgyn1a9myl3s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpot_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
