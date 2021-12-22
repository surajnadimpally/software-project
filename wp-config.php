<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thisiswaqarcom_402' );

/** MySQL database username */
define( 'DB_USER', 'thisiswaqarcom_402' );

/** MySQL database password */
define( 'DB_PASSWORD', '74pIS.[h@!a@Oa2F' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'asubghidriinaerw837os0o3xwktkgpawgirfphk61bzhftggpj5obqgukwyqqra' );
define( 'SECURE_AUTH_KEY',  'ob5miauitfprsecontzbwxil8uouccbum41twaackyujigitnyb9mbvsxz5ntqyl' );
define( 'LOGGED_IN_KEY',    'ryu0x1fgjjqkqgodcsydlp6qa2kycermquxgwtxi3zbqhrguvbsfv3x0lujhwqni' );
define( 'NONCE_KEY',        '8feek1jvfvuvwjnbqg7apakqqz4vejigcqk856tgwh6qfo0lzrkkwvzxrdvitn1v' );
define( 'AUTH_SALT',        'oti9dazchad7kgkj7rie8akmhrlgv8ikamsc3sxwzxavkmw19gmxivs5lfqpt0nc' );
define( 'SECURE_AUTH_SALT', 'sbfih2bawkz9brxbuacjuz0ot43u2cvrmpjbf8icvutol333le4wrbimyrkk8w4q' );
define( 'LOGGED_IN_SALT',   'r0yxrtk69rd1a1ytcghkvam9ptbiowyrkhxmvrkiq2vxdwkmow0z0fll5b7tdpkx' );
define( 'NONCE_SALT',       'udgimp4eywiujts1m0hislfbgajxbv7o6fiszm4450a4nxknantn2eoxuba100wy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgu_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
