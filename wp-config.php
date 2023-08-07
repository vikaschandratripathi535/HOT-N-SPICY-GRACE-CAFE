<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'unaux_32144601_854' );
/** Database username */
define( 'DB_USER', '32144601_9' );
/** Database password */
define( 'DB_PASSWORD', '93!SRM!p3J' );
/** Database hostname */
define( 'DB_HOST', 'sql111.byetcluster.com' );
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
define( 'AUTH_KEY',         'gk6870da877dm1qfaiaycjv7tpf15nfylgvsabgznpir8k5qscv1nlve2496bxch' );
define( 'SECURE_AUTH_KEY',  '2yhwcsnrhnxv0stzpspamtjrwe152enlpmrt2jekvrx4daimwxti9kobmoltdtsu' );
define( 'LOGGED_IN_KEY',    'qulargihvn9z0kreltug0hlerwszrx4gumkt9vn9vfyw5idxf4r0tfk0kehdgali' );
define( 'NONCE_KEY',        'hcajldo7paa3uql1hqgfrqh077y0pi4duo64qlbjshsg921ssb4c3fg012cuaizv' );
define( 'AUTH_SALT',        'csvtct8ddps2lztimkm6dfoeyfh0x0k5unaijkbu5ktkd8hosi9see3fi9jwvl2n' );
define( 'SECURE_AUTH_SALT', '4oqf27vlyetnjqzv5uwfvtjcqxwnpiihaabgpdwcivxilnk8retwr19nigxvs2lk' );
define( 'LOGGED_IN_SALT',   'caqdjlcpg5n7nc8mpivfxwo2jle36idhvouxcjw6j29tn8bcxd3jqrgjd8ldkyeq' );
define( 'NONCE_SALT',       'eg3f7vmcqw5br8dper4klr976sdr4wdxrgawpkkemiunfeifornemiyxc9eytdj8' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphf_';
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