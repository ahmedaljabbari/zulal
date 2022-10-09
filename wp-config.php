<?php
// mooooo

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
define( 'DB_NAME', 'alzulal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'I8(TU=dXk+.W!W5snve=G;K/PN/!8dw(=8nQDksbJAA?Zqtu~CVO?MFkiJ!osg;w' );
define( 'SECURE_AUTH_KEY',   '+X5Nge]sGFze,t?8=rc5q<P:h;IrQEM5;ewGpy3}vgA>P2M72RmI;(]`Q5AY{Apk' );
define( 'LOGGED_IN_KEY',     'J|Y `jaK`B;l*ony)X]PDqkg{oYu#Ma}[l4cAg(bTd-xaV:&rW{xjq6G<hq4S4@c' );
define( 'NONCE_KEY',         '.Ln)+^DU(O2foQENx9^k=k-DebQkX~ owe|)`<(dLTjtS,R^%bGz!ouomcCY`GPh' );
define( 'AUTH_SALT',         'Jt2#qCQ?3AlqB4us:l:#5Pf<8jFr(Rs^TNw<|fG^ci[n#Q](?%R]c~[tAySVlMEn' );
define( 'SECURE_AUTH_SALT',  '+}wluVoj_J<Cooa?q,.]J+F_Zdcp_)B;QYxvU,z)UES,*=p`4|qjr5<n$fah:RXS' );
define( 'LOGGED_IN_SALT',    '?x;h;}Xvzmm)^8j+B,Su]=P%cI%V48<QF8oPm/qz3<<c[?]Ag8oSc>f0+BjEfL8@' );
define( 'NONCE_SALT',        '??} [,i0]``N#[w6zfqBE~wol26s[-C roH}`0u>v4^F}>vO}`].-XL11q$3P^eG' );
define( 'WP_CACHE_KEY_SALT', 'rxxw>mni[yOv)!N2EUi-3oHztH47I6cl`XdCb3UW,e;,^]W9UgKfk8rtU`(~a>ub' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
