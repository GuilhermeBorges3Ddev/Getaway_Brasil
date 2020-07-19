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
define( 'DB_NAME', 'getawa96_wp431' );

/** MySQL database username */
define( 'DB_USER', 'getawa96_wp431' );

/** MySQL database password */
define( 'DB_PASSWORD', ']S4GAp11@e' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ltg8cetmyajx7msfbuedbqspyk5db6qsbqdha8ybw8lwplo2whmsyu9ynliswamh' );
define( 'SECURE_AUTH_KEY',  'l64dqbyv3t8qkx34wn0skzzdrnvbem6ahrhoiyndezobmwtpjjyotbb6m6gfbamb' );
define( 'LOGGED_IN_KEY',    'oxb9zmt8cp9wjdjl7u5mvia0p0wubedz05mpi3h2gijy3uqqg34aa0a7sl5teq0z' );
define( 'NONCE_KEY',        'ri4qjywn4yjd7rbsvytozsb5t54vph64uyvkwp6nxxgasvnlqspl2ypvggmgfoto' );
define( 'AUTH_SALT',        'jpf8soemgqro4fl0mwdqkyiabqpithptwbvfipniaclqr9mu4gh5kz1ktjvkn7ns' );
define( 'SECURE_AUTH_SALT', '9bzbuoykgpvr6axzlcyb3aj9fkzjw6e2zis4n774smqtrisedozh3qqjxz5nyybs' );
define( 'LOGGED_IN_SALT',   'en3orggievilbeelc0vkqrtb7drqvbdnbo2vvplpsauf68jc7iwpr1rliwukiixa' );
define( 'NONCE_SALT',       'm13sihdpncxop3dno30e7xsihwocqu119b5ujkrpprn0tdkw2jxtyqg3fklyhghr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
