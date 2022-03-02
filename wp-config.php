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
define( 'DB_NAME', 'wp02curso_git' );

/** Database username */
define( 'DB_USER', 'wp02curso_git' );

/** Database password */
define( 'DB_PASSWORD', 'Teste#01' );

/** Database hostname */
define( 'DB_HOST', 'wp02curso_git.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         '9GJQ_:AiEj4|y>EaG!M[{GCB!pvp&ZErcjn%*r|h68qpD+_;FyV?x`w4@[-]v8{-' );
define( 'SECURE_AUTH_KEY',  'ui^KNZQ)g5Qp?oop0t3/q1qAa?w6O}YGG@q@kk^/W%oXSC.K2T=twpY=lB~@A_,)' );
define( 'LOGGED_IN_KEY',    'Sk{V&A|<:,}aM>9R[-2rtPi8iwk<aXEqENU0g:@q!^?|D$T8m}q?wtw!5lWJg;D}' );
define( 'NONCE_KEY',        '% Dr7,]F{q=%HH T3uhcMI$5TmZ4Df{Xu;bWX<b&u &Mz`}?9cGq5QBt2|7lk_b5' );
define( 'AUTH_SALT',        '.[#LHgP8IWQZmuiW[mKnTR2u2#{0}GWiz}exPd:g1@yh_`K,A--D/X}YDcP>1,XA' );
define( 'SECURE_AUTH_SALT', '8-N@w<c.fV8pi1+ %P Nd:qms;h/ie{uzPE<EON|BpaBkvQ/5q*%Zp`/od}.*ViC' );
define( 'LOGGED_IN_SALT',   'x1n6{KeKK-ah.MA[cY{3fp^:V[k$&,yvTeK&4:76A]>z!E9O|NL+];gQ9`5x;6qd' );
define( 'NONCE_SALT',       'I1fpi[T{P3$T,(>i#ndm.o]`Y$(9&=4$c1]vp=f,}osb0JJmTpSPs^[qm44~GV.x' );

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
