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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maneesh' );

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
define( 'AUTH_KEY',         '8~@.g0_|6oDS^C~X<GFmE@BeS(o;%HFOAtm%lAPkp`SIHRaGW.3^4u$v)Vr>C-RI' );
define( 'SECURE_AUTH_KEY',  'pv2EKr#b<f&e?)74E_a$p[L1$8NLR!w9@yHn?bDT wHE?Xx9t&nMIMG.nvi21Z|/' );
define( 'LOGGED_IN_KEY',    '3u a7TE}kW%q)zb|4Evo1=W!52GueTkRtJ ,ZTYDla>!jnNM5W&j_I5-7!$T5jwj' );
define( 'NONCE_KEY',        '^ 0I}p-zK<m-3hY[Av+crGamDFZKS?tc-VeU#QcRQsc+R-jUYflsXxnS>43$MBT,' );
define( 'AUTH_SALT',        '&._N)ORy0uimk-Jm4=RegcSwN964V~@C++Jl6yf(9UK~f@Ie0?lBxC1u=pTa|q_S' );
define( 'SECURE_AUTH_SALT', 'i@44w&{GR)/.2t.<XY><D}TEYtG_b2p)au8Idcf<R[N.eP5[4}5V;k59Z<#v(g%x' );
define( 'LOGGED_IN_SALT',   'xh0$9`JO=:} 4a3b7Em?>?4;i#IZT?:*e`@-y_y`T`-EehZ3vfpdO@.>OKludV;#' );
define( 'NONCE_SALT',       'a`h*-~?D<w(t~_4p*x#up40SpM[MEqR,]s+>1^K^F>-eC?FeFx<%y /}I8i)V#.8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
