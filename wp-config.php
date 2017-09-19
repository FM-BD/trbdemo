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
/** The name of the database for WordPress trbdemo  root */
define('DB_NAME', 'your_database_name');

/** MySQL database username */
define('DB_USER', 'your_databse_username');

/** MySQL database password */
define('DB_PASSWORD', 'database_password');

/** MySQL hostname */
define('DB_HOST', 'database_server');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QW.T#7eO#,/U{|?+~~o(a5@#kuA<TY0vbLZTR@gCGcf&$hr]BK2yi7QiDTq]_IpL');
define('SECURE_AUTH_KEY',  'b}=>,Ddy46.K>rmEhr?ZW^X0RP3M-u;N{W`:&CY^.cJi[@=ZW1Auu}IsNp0(5yrS');
define('LOGGED_IN_KEY',    '9e @OQ-u-~jL3GPpYr!0k}~XZ?!%7eZ_UA/c /U7_*m)n!J>?TA7 2kV&<ySVA!8');
define('NONCE_KEY',        'SFRdYG`JuKFI&u>vEOIT!bOT|`rKsMz&Dz%3r-}*RI?us$1xIh1W;0fI>,3&VxKd');
define('AUTH_SALT',        'JXp-bG*E7q7J27_.:QOflqG[Eo mvwbTtWfl6L/!wMEWB& b([ovn~Q`L+OQejWN');
define('SECURE_AUTH_SALT', 'wC;Sd>b${du4 I/n{1u~!VA->qMLPMCH:pSH%8dKzRSF)EmyIEx%{qJ^Czo}pgPg');
define('LOGGED_IN_SALT',   '@;GY2IPBL})(L5$>85=;S4tq%1`@tAp4c5wr,cv(Y&pMkLQsRK?AIulrh)y| $B/');
define('NONCE_SALT',       '{*l%><91!tTS&kc$e/ mozJRb7f}CG:qx+P4Zd)|bOH9UuLx_}jZ}rSV~zki>lw%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
