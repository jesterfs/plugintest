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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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

/** enable debug mode s */
define('WP_DEBUG', true);

/** log debug info */
define('WP_DEBUG_log', true);

/** display debug info */
define('WP_DEBUG_display', true);


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ivfvCEigsdHfcDSjLgEcmotmKVdrcYifcfQKKZwz0ykFXNQDhHouHfgLlUDhglqj5vMiFpH48Njqkj/6clzLgA==');
define('SECURE_AUTH_KEY',  'fHGyNrtG2QdOwXg6bePRwF6egJfl4iVcrIkf6/fRK5/edG9/Q3VzTXUEFaPaLGiRy0wOdmkvSvTVi8MEzTxq8g==');
define('LOGGED_IN_KEY',    '9H+iRL6q92UgpoD3IH5lpxOHteVVL1WruPo6f0Qq0v0Z7fovn4V/ShEz+MxIr6ICeCMOK8Tuyy6ul07EQzMXHw==');
define('NONCE_KEY',        '3i1UBBUeUOJ6p71gyHtMAQHEofF1zXK4F+nL00c+g4IW0Ec393irC+vOqAzT245fsAZL7RCkjjkVz+gtey9eMA==');
define('AUTH_SALT',        '23GjTPNiSf5g/VJAOlUbcvOrIdgXWBRYhELgIeVEgxL20LkjpDyN/8ccbEHj82vbmxRlXv/Sb6/eqlBpZ5YG3g==');
define('SECURE_AUTH_SALT', 'GubcQqexd1MjYQYPhqnlfQ0KVP3RLRYkTXE23XqARjLXo7oAR1xj3+jHa/rushK/JtgFNKBsRy9qeCDtIMR9zQ==');
define('LOGGED_IN_SALT',   'IqhAAf2JQSNH8vA8KPsEi9z5+E8OXorKqeipldGLgML0VGn4FTKiBEiGZqeV1gs19McU0pd0wWGn8CeTKagsPg==');
define('NONCE_SALT',       '1bhctQbLyrFKVYl39TaAWOphnVg6x5emEogBc3fcf7xWLHl+f2YJXSpOivKo0vACOkB4yG01q9bdWAdpsvHKVA==');

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
