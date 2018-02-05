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
define('DB_NAME', 'evento_pmi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'zx7{#4 hbYs0(gW]fPjrUg TfSU{ es0+j.QB+{_b19q=!@:8x+q7]Smgj*Hr$te');
define('SECURE_AUTH_KEY',  '#LHXfxg>eB^-51?s^$X1Wj!@7PMrZ{f(x#N`1:lM,L70D%@dltMX~A}B2|`6bb&7');
define('LOGGED_IN_KEY',    'tTk3kCGziu@4idJdp|nq=*,S#6~|T[O6[ON]$&A%$I4h3BKB3H{[RubKLuVcFmyk');
define('NONCE_KEY',        'y3U*O;|1dvWPXeMOlJ^f*=AW;(J}jZqh)`+}EQmh%L>>4|bF@->1AW{[QM&E+pD)');
define('AUTH_SALT',        '6<;M )~FE4MGo8=wxl/Oy:DP&^d.(DA%?Fb}h`_SoBXuq{v6==0ABPuS9fc1S: ^');
define('SECURE_AUTH_SALT', 'U(kf_Z2|dLx{#z(-9&!=Dcd>EQsr[6w%Oo+5iL(oW,tD>3*-GW|eB@`]|RPGR3/Q');
define('LOGGED_IN_SALT',   'JY#/x~uU~[Yn#>HO^J&!K#lm Ng+y ui[ ~uFIp>`L6#&5biF;8*aE2.=#W 0]#<');
define('NONCE_SALT',       ';tuW/>,:g%Z!8+fG!C(hb,)4f<ES6K;casQe)*jZnf<y<*vWsZ_:3+NjTX,C#a>;');

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
