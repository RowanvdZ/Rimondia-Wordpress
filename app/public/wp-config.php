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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OGjsNU0OKjx50zMkAO8JPyS1w8OXBK6TtfYm4eUnHrXinqK2KpZa/+jk+T/2aQqCKQ3Oz0hAgxLxQWu9pDk8kA==');
define('SECURE_AUTH_KEY',  'tf/p38GSe5hl8k2e6ZzPlo1sz/TCJRygvsjWSsR6qoA9cVHejK0s0cIPRWb2tZ5tC88ir6yiVfbDLtYBHBMxFw==');
define('LOGGED_IN_KEY',    'XpMlsM/RZHdvx9gu/AD74glqdZJXBMSMzjVYHyVOCWPsVzQP3rhNk8KqUEec9fekLOrkSI9o2bsOhHqqSFNM7Q==');
define('NONCE_KEY',        'oEcwXjvH0CJefrQZVhurUa48zyyeEXswWGZM2eDRTl4weHiDfv2zWjRbBFsGl4WtrxNCupOlidOHvIMN7htsfg==');
define('AUTH_SALT',        'ghvxVR8HGrKcWeBd18qCqkzQ4nFv5Zc/Fffo+oetKPR57lLqqaY2UV7ZaJeShnZGa7l00EQmswSb3ANjyzx07g==');
define('SECURE_AUTH_SALT', 'vmh84TAYGuaCfk2xTB63uziA/4caer1+xzU+ahV1KWvRi3fKWnm9YlEdf9tphZUXs/G7hMvAcp7j+JDwJvPutg==');
define('LOGGED_IN_SALT',   'slP82F+bd+Pf86BCeqOfshSftmhd1TP3DPXjWbe5mI8EyTWvzyYf854eVqolFeEuyYnxEvPvXJPe5+Oar+jCrQ==');
define('NONCE_SALT',       'JRebsPgxp/UgS54n15Tj8+5BGGVk0f3KEOTwP1B26h+T/e1TlBcfvigwT4W5qvCTbLo+l4jEb9xcymH2Z3/PKQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
