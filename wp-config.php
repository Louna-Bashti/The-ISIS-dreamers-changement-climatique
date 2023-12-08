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
define( 'DB_NAME', 'nuitinfoisis' );

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
define( 'AUTH_KEY',         '![XeNqV@0s&>(2pE3$-:p*4Ez&rBwacoufkx?jx?f1LO~Bx&)#v+pjNjBu%p2SFe' );
define( 'SECURE_AUTH_KEY',  'l`{,4|de.L6 j>X3Q:d|PW%*RHV?=[muBivtfF%bY)Eqs?V^|!3No>}mxiTuBZ(@' );
define( 'LOGGED_IN_KEY',    '8+~jJh7+1b]aKE)5RJ{[PKp8w,zJK|bu53c;IiGiecF9[sI3>P@y^w42_QJ0]cVV' );
define( 'NONCE_KEY',        'L#n6=[<c( wKT3|kmDNlWI,AXq)56H,tk?;<lS3q$mE9II.p}TtDq7z3pr[`lR`n' );
define( 'AUTH_SALT',        'a}1{7Q|/LN$j !.~#=1&exkLjXY2Sa3)u, ~6B@[]`UtF(qlb8mNhI+|KXZE;z0h' );
define( 'SECURE_AUTH_SALT', 'f|T/#T!@bd!{WBpUuh/Y5/+Cvr9R(D5,dsDlJC0&`L@YBC&|EJ#JS2W85mhM2(Hf' );
define( 'LOGGED_IN_SALT',   'E3v5Z)oULzhA88T1i3P&&]h9=b/kL:0{ 1^wg1]Y?git~2~Gsn>@JFH9PeP{(kqc' );
define( 'NONCE_SALT',       'BPi}=b`LiPf!G:=30=F9Cl%qw(_/H4L-nV%=#mx%ZW>Ft4sNV3@s;0:/U(8@O1&h' );

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
