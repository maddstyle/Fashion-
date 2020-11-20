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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KnRVf+dtN3fNgmWqY9H95WzHxJDYKsWTlC/z5bpCZbgr0czMrleUnGqFwP1c1dHwMIXZjuOKtJUm37GBMDtiDg==');
define('SECURE_AUTH_KEY',  'ISl4vL2qJeXU3aSXID44E1YFIA30zAjiYUp1f6TrxS3zXZUBlN/fgN2A8qJEf5L30om4caq08SCOmTOGFK+ADw==');
define('LOGGED_IN_KEY',    'DOLIax+XtYKHe4Plq24qGHR+x2NtnGRjJQ9kX7KOFuz9WazcnY4sBoYfYDg/BvvstSv2heI2TJ0W40WNK7JZbQ==');
define('NONCE_KEY',        'RayBxSqRyPpQPF71u/7F3sgMltQuvfFHApbrTO2nxLjJZBKR6FoqlWe2Lf+5H52fl15rjOnpIoGNmYCBz90nAg==');
define('AUTH_SALT',        'b/sJlowDSHaRpuLkRXWzUSEUcjd5nuggyZGb563llQ8sgKUr6zkTnK4DhlqRNp8FNIcjdBIYuF9KwQBsWTI49g==');
define('SECURE_AUTH_SALT', 'E31lexqlmTOMR2536RgkUJJEBxovnO5n9BAhWwnTIqrP0hTXlNV91rkbSi96YJIh+o3PjzsJgHbgjrDZnPbzeQ==');
define('LOGGED_IN_SALT',   'yzgTprm+Q9oIssvPMga4ooe8aaLMPaq2MHRMrijnBkY3fuCsafV4DqF9rSG2EoOWZ6A4p48zKnFUdZ+qSZ2M6g==');
define('NONCE_SALT',       'fSNvLumcTSfyBc23Z6IrT2fWGvatLKeZGnZiDt1E0g3LZLUbG81NWMu7suqgaITzkNUOpZxkhm83wMDWdj9xpA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
