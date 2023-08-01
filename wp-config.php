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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'uCK,uVwG0SvCp6 7TH0Fk]K@?p[]o9+>^.G~W&qvHBhLkJD&NQm:0dVl}y{fA;Ip' );
define( 'SECURE_AUTH_KEY',  'W=7alBxu{}0auVan%S}I!DW$/8;Iye)ghB-7_][My)LoJy)xa8Na;,Wyt~1*9gdN' );
define( 'LOGGED_IN_KEY',    '3o@$`Yz$$2c.jnzZ)X]y{ucp)=@^>w5d5S,kxV^{Axo?7f$0,*daJJ)t1dY)DT66' );
define( 'NONCE_KEY',        '~t],O%M/wLJ/OZ.}Vf2)v*0mgZC?1Eoe;pGZk61&GNrmL{kBeBBia2Na9S07_0[~' );
define( 'AUTH_SALT',        'B%(*;1$cM)Q$&Xv_![?j@a0Sl:CF=84eV>Zty;YFxBjWXAF O3<1ZuNNXhOC{RVk' );
define( 'SECURE_AUTH_SALT', 'V{eL[!*/k##x]W+u}!X+(<%yu6lx=;3&0{)SvJq!s<-OQYp&JvpEBRQ$,fndRxUc' );
define( 'LOGGED_IN_SALT',   '+thB&K<W&I]sFc32Gy=,*fC/a<3=i5F2^dbq$mwOXkF>7:mr*lMpqI!J`kndby2<' );
define( 'NONCE_SALT',       '9O9UkBdVcDOW+Ue-j0jP:pnpyf6II(JriVVpY`HwJj]@;goCFRaiF@yyML/xSsBH' );

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
