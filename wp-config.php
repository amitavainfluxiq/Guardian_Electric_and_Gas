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
/** The name of the database for WordPress */
define('DB_NAME', 'guardianelectricdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'T4_4&aAu3yvN4g<q*-?*@do){F(Ll;&?<2jY^([1,P1UsnU3#C=<<,!DIVKQqZe_');
define('SECURE_AUTH_KEY',  'E#kZYiXHX^XlzIrINI5/1-3<YPCKM-~SGwfD<B.LBx;^8nHMox*rJ9%%z+UsgsWu');
define('LOGGED_IN_KEY',    ';H6DR2h^-*2rN*Yoekhu5ux>C(WCk#=YBF}o1-+%.xd#6O?Tu&njYU<0C_m4cBjQ');
define('NONCE_KEY',        '=6*dk{~gVI>!u&9wdCjhYcDTJ>^M;,DQce-]ZX%Ep40lWlPz*#_bpQeu^F73,M v');
define('AUTH_SALT',        '9>[G<b#9?u!9|5fMuQ?l-Ofv2O|i.&qianB9]Sc/f]:|s7h]g|y%c{z6&)UE/_Sv');
define('SECURE_AUTH_SALT', 'z(iA$3W [G-0Ty]y%Yu-STt}mEI|W>cBFDu!zf^aYLAUSs^g7D-;c8yMZTxFp?qf');
define('LOGGED_IN_SALT',   '&q]-!7>n{Sl_5fFW2@P?t;|mo;0~GWU{M]{kuc<pE.c6BkW)ihMy:_i4^2>f=H`d');
define('NONCE_SALT',       '&vU5OQst&cKm2GgYfUH`umldy=}s>%T&|I<9VlzLt `@ iG6n_wLAj,JavpfQBy}');

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
