<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u599746117_TWXRj' );

/** Database username */
define( 'DB_USER', 'u599746117_c2U3v' );

/** Database password */
define( 'DB_PASSWORD', 'KIdy8vBmjw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'wU;#GUCs1IcN>$]*gtFl$C@j&Qnv3qMW<Tu,/-/|w.mR]W S=]*Mny`Nl3amB7O%' );
define( 'SECURE_AUTH_KEY',   'snpybEm~!<n_litH56UHE:*iN(1}Ptp8_G;R]azb-Qub*+t]_QSf|c?T 1anoiyr' );
define( 'LOGGED_IN_KEY',     'E98#:!JeT:x-R~[7q(qwfVXJC.EDPc2aS>C{w5#XUT_zJ1F(d}!K]@RFQ!h}Rb;#' );
define( 'NONCE_KEY',         '?OIF+(q-;N6% YP3;/,:r`Gs4z%M(6yStG}`b]_3uNBW07-llva$SKrk}Zf>J/q)' );
define( 'AUTH_SALT',         'hdp$HQU#|R?f$Ablf*oWNYhEb xIN~x{ {IRby(4,#%XM047a}9xl<P,{MOuLJWp' );
define( 'SECURE_AUTH_SALT',  'Q;5hC;@{iVaE]W6~?cX$<;V.(2o<q]o$YbH)_^JgWGs.!put_.d%z,#k}JcE&_il' );
define( 'LOGGED_IN_SALT',    'dTM,2NNCaUWL(-MIz!MfweFneOCyUa!6>*mi<SXPT5QQa.HKcIyAwLsFIR8I*zv@' );
define( 'NONCE_SALT',        'h .vG H?_?4$^<+Fh?WyyTdW*qS.)^sF3Q((=x6AMtRR#<wvp&T^2kZ.o_@[3m:?' );
define( 'WP_CACHE_KEY_SALT', '@PWWbA`2}K BLi:Y9#`su*(BA{[H0`7.kPjuMuDLi*AKAxypnx[TJzq$ZaQ}G1R=' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
