<<<<<<< HEAD
<?php
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
define( 'DB_NAME', 'if0_37917575_wp895' );

/** Database username */
define( 'DB_USER', '37917575_2' );

/** Database password */
define( 'DB_PASSWORD', 'B0S)p3Ns3.' );

/** Database hostname */
define( 'DB_HOST', 'sql308.byetcluster.com' );

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
define( 'AUTH_KEY',         'c7hjqiwfn0f1wn191juscejefllm9poouf1r4d9vibffl5bno7mt9u7fjgur3ksu' );
define( 'SECURE_AUTH_KEY',  '19riolyx81exndwlvowzuhzxiambex8l0sfcpbkwfwwgefg6zv72dxkjntoekbmk' );
define( 'LOGGED_IN_KEY',    'ktyvs3zd1oiuxsvnjmjcqo5gs4qfosoa20r98d1kkoyk6jcrutryf6w7hvc9jpzx' );
define( 'NONCE_KEY',        'yebrsgeqtvnvu5s0wuz8rlli0bdpoeserdjl2gb9cmyhzngof57kyfwojoe0zshf' );
define( 'AUTH_SALT',        'awz0akwwlzdcl5qhiksjqtybwqpgd8jij9ryequajlb7tf8fcutlwehmdrbdo431' );
define( 'SECURE_AUTH_SALT', '2m2u3ahya0i3vhxw6gqlrc62aykod1hwjpejvg2zqgfcr4qpjuigopoiybdwycoz' );
define( 'LOGGED_IN_SALT',   'ymnpxdyxktxphxpmbghwslvl1yfebwoegq8st2pdijgau4eahbtcqzua7wdrsxgh' );
define( 'NONCE_SALT',       'owzhirdubmfffxkkzph2c8n1bl2gifub9vayen8vennfuah5ooxdkuluruzeyir2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdk_';

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
=======
<?php
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
define( 'DB_NAME', 'if0_37917575_wp895' );

/** Database username */
define( 'DB_USER', '37917575_2' );

/** Database password */
define( 'DB_PASSWORD', 'B0S)p3Ns3.' );

/** Database hostname */
define( 'DB_HOST', 'sql308.byetcluster.com' );

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
define( 'AUTH_KEY',         'c7hjqiwfn0f1wn191juscejefllm9poouf1r4d9vibffl5bno7mt9u7fjgur3ksu' );
define( 'SECURE_AUTH_KEY',  '19riolyx81exndwlvowzuhzxiambex8l0sfcpbkwfwwgefg6zv72dxkjntoekbmk' );
define( 'LOGGED_IN_KEY',    'ktyvs3zd1oiuxsvnjmjcqo5gs4qfosoa20r98d1kkoyk6jcrutryf6w7hvc9jpzx' );
define( 'NONCE_KEY',        'yebrsgeqtvnvu5s0wuz8rlli0bdpoeserdjl2gb9cmyhzngof57kyfwojoe0zshf' );
define( 'AUTH_SALT',        'awz0akwwlzdcl5qhiksjqtybwqpgd8jij9ryequajlb7tf8fcutlwehmdrbdo431' );
define( 'SECURE_AUTH_SALT', '2m2u3ahya0i3vhxw6gqlrc62aykod1hwjpejvg2zqgfcr4qpjuigopoiybdwycoz' );
define( 'LOGGED_IN_SALT',   'ymnpxdyxktxphxpmbghwslvl1yfebwoegq8st2pdijgau4eahbtcqzua7wdrsxgh' );
define( 'NONCE_SALT',       'owzhirdubmfffxkkzph2c8n1bl2gifub9vayen8vennfuah5ooxdkuluruzeyir2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdk_';

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
>>>>>>> d9582e3d (Add the necessary website files and folders)
