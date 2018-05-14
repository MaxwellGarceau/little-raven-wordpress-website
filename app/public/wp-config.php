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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '4Y/nBlurkl7N8/GkTGVKh2R+4gipma3UzZfALqs15Ebt2BWk9NIxztBfuEbK3kr3+kH3vfpppH+Loj1I/f97Fg==');
define('SECURE_AUTH_KEY',  '5z7lAMd/M9gxvGuCjtwzn+fFm6vxel8m2b3OFZX3eiFr4dDsNYx7LTbWNGPV9Cr+f5k3dPbTsXHjf0Jb3GX62w==');
define('LOGGED_IN_KEY',    'CwdiNsjd0+7cscDiR1iDQ6Li1KZa5BW0QRHeiBHhkp91PQUpVh6BzGDkbfAqx22lBkNnisNad0U+ibXkDnYtrw==');
define('NONCE_KEY',        'nvyzXWq03H+RrVf7IgQ/9nmXV/EcETefX2d3ZQIb7/EMCaV5yHiJEYnIPr77b4HcDovokWk1IHej98/IH4SQnA==');
define('AUTH_SALT',        'KUeWT9nmd/gM5jEDx4fct3WTOSGDk1VfNqnI8IIDsQDDPju3JbdFiXUkEdG+PiwPmCb06JsaWVsPsXPCc7UW3Q==');
define('SECURE_AUTH_SALT', 'jWWtQcXCJIrmg96/RmaM5cNcnIodz9lqHmio+pZ7Z70pDSJ7Rkr9Ub7oIMBZypQjU01/ZNJPQRoeShfxCTZAOQ==');
define('LOGGED_IN_SALT',   'PQ9UVVn5AqFwWdT2+SfEpsjFVLjkGOU7CCyToCEdHJ+PzrYwIRGcw+a/TUxdNKTYkBhANulp+FbIlriykGzoAQ==');
define('NONCE_SALT',       'Lz3aLGS/w+ehNggIvxCxoU2bdjDIlWQ9n/09v2MnZ6eFKIGbnpCwQM8C61WDvErxApXsfU64VlKAJ1AIav3NbA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
