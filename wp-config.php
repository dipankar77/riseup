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
define( 'DB_NAME', 'riseup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '3EY^A6VTV3r h?f[gz-^q~cqQsn*BFz+<`L:i3#CTc$?mcc_ cFa;HW^4?=DfNKE' );
define( 'SECURE_AUTH_KEY',  'bp5s6sh)##cfoMvdg(v3+wohf0ii`tbWZO4,`tLT+/B_53u,`2uC?6pcKNyB8}Gh' );
define( 'LOGGED_IN_KEY',    'iNFX>nH/S__]VA?Da,K).E2ahDN%bJ#i:2Pm.E)=,%m-jeWV+Ov@H(G2;vQ</a8M' );
define( 'NONCE_KEY',        'CrM83jCAsZHrYT|cR^O8I2g:Xfv_@mx1e||GbmLpBxC_ER(&3bEeZt7Q4.*VaqI}' );
define( 'AUTH_SALT',        'ukg:Z|[+?=tvFM1YOgPy3PB|Rowlzh]JKjZ(5u*:96&,X&&qKIT5$<PDJVv12S/F' );
define( 'SECURE_AUTH_SALT', 'jeeY~U1<C1}Ui[b$r8!Qo&ay`K1Q;GBv3WG!Y?k+-a@Zj|sp|}~LN6dqPflM*2[c' );
define( 'LOGGED_IN_SALT',   'R?l{?Seob8ibo~)=ncErJPT1(i3r/kP@|tAS]lQn/ryLB$H~LRS^WJt6r4T&w9Vx' );
define( 'NONCE_SALT',       '4a9t`enORsI-<#cuq4{xF@=>WV^ZG<[t${a2qOV$Nd FO,Zz/Qsp6fsJZ=]N1j&h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rp_';

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
