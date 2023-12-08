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
define( 'DB_NAME', 'jeuxtheme' );

/** Database username */
define( 'DB_USER', 'isis' );

/** Database password */
define( 'DB_PASSWORD', 'isis' );

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
define( 'AUTH_KEY',         'J>~1h`{xXw.B)Q>G1v)A55B Jyh)zQP*VHna$Ro`bFbydPDK|`!:QZD;uZ(oF}ru' );
define( 'SECURE_AUTH_KEY',  'ErBn_fLGhXx/VzqcTnoU3Ywkun3P<0yodO3yDC[l+[?A$Y> WqnCnRyUSM s?XZF' );
define( 'LOGGED_IN_KEY',    'z#j&-$x`jvgmORqV8I,t;gr0-pq~~z3!<Q&>oW/2|JS9N<pVpSXh;ritnDJsjN^.' );
define( 'NONCE_KEY',        'q`.eUi-M6{A>UaZ6jhJPhCX_g.3&<FdY))40)lt^=zgZ`joB.p%wDJxP>!NTIh8f' );
define( 'AUTH_SALT',        'w)-;qvnt>%&1`P|ocAH2yq-J`RL7u+D_+4/#m:)_,g$b]vnKxj=d/:$?n7ATc$Jw' );
define( 'SECURE_AUTH_SALT', 'sZQlV9_1`o{br@~,8sj^sd5CB(Dh<yG13Lqjx:fuBG8pMB0R}P .^-gA[>PeK;W0' );
define( 'LOGGED_IN_SALT',   '0,iacaq&RrZHWCfzIu,QK`ZV3uB!1C9Y7)Yst,2|bKw-`_FdHHuEHZTGRmLyxJkZ' );
define( 'NONCE_SALT',       'VEK`~fU3gCwko.C/D7f@Zx!ke<YBk%S$P]:cOzv-wQ,GKD@m8ws!.8}T@dX`E%wN' );

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
