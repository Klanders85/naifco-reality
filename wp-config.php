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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/(U0*dh@[U;5v~s>U4sKB/NL>/YOD,RT=,b|Q]onQH:.O5&pMcMR89h~45yK4N,u');
define('SECURE_AUTH_KEY',  'Zg* y=O/TjqU8k.BXBZ6UbUk3`f(Nw&LQf6N  f^E}Pe$.M153g4>9_*D381=JS5');
define('LOGGED_IN_KEY',    ')+:q^X(t7|7@y+b5+CuB4oP3UG0%In^nVw*<#=2F[$,v=EKS`o2<LNX;$>><H]xC');
define('NONCE_KEY',        's%,+dz_%KF[>{fk$i/255bTVc nfM%c_uz4)3U[5(;4d.~<Q!wW5Q0[+)MhZ<LSu');
define('AUTH_SALT',        'n|vK<U!wEuL#Z:>i+Fc^sRO-~ZAe(`0~rk}<9*s[Gc)MhfSBbs8;( O{J3f24{V&');
define('SECURE_AUTH_SALT', 'EB5WO&!vR?N7+0Lf;lzv=YJja:s;-K0>=avV&O-K]HCqQ+NTSK)=Mixnuh5;D^E@');
define('LOGGED_IN_SALT',   'd`U,/`uPbEreS6c-e*V^uK!izB>/3KZ6HjMWtR`&lmMi7Bl^ttsi:IRb&yH+]/?+');
define('NONCE_SALT',       'fuqxEY-RStXUmY,ol!hq(b;T{$=AAxrVBe;|S~*ip>~g0t] i!.Y=5VM~}8~uAEH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

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
