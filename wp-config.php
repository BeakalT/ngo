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
define('DB_NAME', 'ngo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rZ0d3nP7RB');

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
define('AUTH_KEY',         '`BX7AYBj^0:LIshb RS&6ZyW$T]_PKzA~l64d(p[oh@wFG6%=_;QO}^3z=X@*=oB');
define('SECURE_AUTH_KEY',  'C~Y<>L%Pb9D2qpRm{gh{[Gzl0+Tw6|b`iDCsi~ow.57+PT:;is?_-B/2oqY4m]*G');
define('LOGGED_IN_KEY',    '^p,*fZQbAF;vbiTU~Rh4piy|8:!VRA~)Ty)UK7]6Ac7JLp-}aLFA#;g(=OG`t%Q7');
define('NONCE_KEY',        'afT1j$bf 0Z>%SFvskeEcE5fxvzbq?C%bELEPJnbLE)uu#i$VvU-RpM#yt)Pi|FA');
define('AUTH_SALT',        'z)Hyu(PlknJLBFmLg?L0LAVVBM=>0A=2q5c(/VF0,]uh52SSKqMx^^5`Z%N._bbo');
define('SECURE_AUTH_SALT', '5B{b% /h}MU/AOVe?;mWRdJ*mEV_EkT-W5[>(imF,T|BWd,Tf{2eS*vh%-28u:s ');
define('LOGGED_IN_SALT',   'of,NTnW;PA71Qvr=f(X.f/o8G:bYmwjzAv1ym%.lj&u~[VBT.xbq}P+KI(*a g.#');
define('NONCE_SALT',       '8~ =xU]7H{Ygamtq@Kz]e28{}!h ](Ubh*jZIX}]=$#cVoKG:ZekQCu6Fwj[)e5J');
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
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
