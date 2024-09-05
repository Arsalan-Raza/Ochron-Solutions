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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ochron-Solutions' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'iYhFaKDWoHaI1usgTroSgmf4qL8WJUqrGeXCPPGsN9iOp7gr5mXrEhM7zJGoWeyt' );
define( 'SECURE_AUTH_KEY',  'be1kf0gLOrLglq6TZxgG3H1Uj24hwNWrk6705B9LpO3c15bwpzJGviC3agcJfHyb' );
define( 'LOGGED_IN_KEY',    'CRWZKv5EtZQsUirMNWojKMvMRn5vXQ8jc9ntMeSoZvtALkQVDSrgAeO1kK21V396' );
define( 'NONCE_KEY',        'AAHR3Qe73HCMyTLgfgVeXJ3cf4lz8lEu6r8ydPU4CfMGCBomMCaWbkI1FznIhFhF' );
define( 'AUTH_SALT',        'It05irABTHl64zgSXBd1U4uTtqxxxQvj4bSdD8TkfNGDxGkoDC9Ykf5LeyQn5Umo' );
define( 'SECURE_AUTH_SALT', '4aZMmxRA7hPzXNoRPOnmSu5ARJby8M3cTj4uOYfsTQeAo9og3yDlRHe2vzDzEd9v' );
define( 'LOGGED_IN_SALT',   'BQTVPxbODOFCtkVAorRVIacqfSv4rVArdmtRmtKiy2UYJaIR5A3yRkwofb0umRfp' );
define( 'NONCE_SALT',       'R9zVc8SD7q7rmTjDKsMPCTGkOwMoGdPzg76BEDRNmReM1gd3Fl7T1THfvzJTPgBQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
