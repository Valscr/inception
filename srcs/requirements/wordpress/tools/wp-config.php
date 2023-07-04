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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sqlname' );

/** MySQL database username */
define( 'DB_USER', 'sqluser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sqlpwd' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );

define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);
define('WP_REDIS_DATABASE', 0);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Omd8&OZ$|W97UB i(!=yZRa[{{7@x5viE+E=Gz&`G1XSiH3C!o:g<J ~KeY:zz9p');
define('SECURE_AUTH_KEY',  ']Ex{A+L-[z<Wn Rt0`z/6M`!*!MnP^3BG9e8:N] >hWk(Qr/sExiW(n+Surm/(Y=');
define('LOGGED_IN_KEY',    'V+e6q%]-+cq0`G5mxY =ZoCqUL8}Ps}ibQC|U4I&(W+zpIW4h(+g3{]r><b4>jR`');
define('NONCE_KEY',        'm_i+lJR #fJ%a{)UH+%fg:#jy]vN6SUub|@O=KG]#n}-B^@w-*KF^I!`~%co~QBK');
define('AUTH_SALT',        'R{,sc@4~n6;rfG4MISpI`K+|(UDA.+cTaEb.U)KnS~;-2z40qqpx.9 bh;mGW ss');
define('SECURE_AUTH_SALT', '!(6-Szh&`}}}47?0-Zqm`}gQO7{Ms|rRx -t:YR8B}?K?1~nycQdRJY`.,1gBcC|');
define('LOGGED_IN_SALT',   '#gee|A,b1}A>+=~mPYAU]hfjuE=f=hwzXDdi+_<3?|rictP/d)(52Ux0l6nGzs%V');
define('NONCE_SALT',       'G+P/;]MxlB^|k}bZ4L.(8-x,GE]NI3nJeI;@CJOw406>iB$ShwM+&s>+Ir+%tj!A');     


define('WP_CACHE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
