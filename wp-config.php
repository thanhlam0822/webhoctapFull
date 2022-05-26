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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql6495478' );

/** Database username */
define( 'DB_USER', 'sql6495478' );

/** Database password */
define( 'DB_PASSWORD', 'yZVbC7wipP' );

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
define( 'AUTH_KEY',         'CI}]rW;nK%f=8`zv0zwY|W)2uNpKGC/eqyz&4qa/l;<Y>_SRs=as?+mntBu#JMT-' );
define( 'SECURE_AUTH_KEY',  '4!q?nTn}[Aq?o&a|a7i=@_vb!kdsWm@>XoGUw :)*i#a)m%RORzTx[~ybV,}vj5B' );
define( 'LOGGED_IN_KEY',    'U>Qr?<2%BImrQygc;6F8&!euv*U?)y&QY$j$,p9oX3..CT2( wqPKu&&qN@DZ$qH' );
define( 'NONCE_KEY',        'xn6c8$[b(RAocW~U^acN,^{t+FM-#t]=U(NH*<6q3un2{=NC6.M99)asTD%*P>b#' );
define( 'AUTH_SALT',        '!]e<?_O$dDYzU<L!xt*jwHj4oqbDby54S<ig+XUbU62nZyykl45~tS)T>sdb1=e?' );
define( 'SECURE_AUTH_SALT', '({v~`$:ToBw&&KC&LDjP+Q=FHDFGR,.5{(oq3I{&VVO:n,B(]:i=uw1E2.>]U~q4' );
define( 'LOGGED_IN_SALT',   'Me?QGj1%O@wRw$n+cocvZP5^c#iDV$baBw@ML]fvI5}?)#|hD`J2%jZac6CV;cn3' );
define( 'NONCE_SALT',       '_lLbs8Y%)QLYHTel-}Eg=NU{8zWw^_ix1YKT:zJ^y|&kvo[&BP|/z0$mWveAWJVm' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
