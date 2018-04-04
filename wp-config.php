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
define('DB_NAME', 'bib');

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
define('AUTH_KEY',         ':yTJ01*mz1M@aeBCH3zydm5hG};Ow4Go9~hlkB!g)*z$`:oR 4V8o]@B9G99(bo*');
define('SECURE_AUTH_KEY',  ']M#.vmzAS~wnZx.#nTIiA+5e*oKRQVy=+EV=4Qlb,g=Cm7/oTRF@G@Dysq9;,QD`');
define('LOGGED_IN_KEY',    '-g3nRFk<vG-JOQ3Vfv-@Z_FsV{ ?-!$nlIDO<^mD[sznp5tN6c)k46(r4I75;v#%');
define('NONCE_KEY',        'FBz})nwg 1>{V|$Y:4e,?}yZhon<9%&m|hFq>C)2z7:{G1OZRpB3Oe19;jU?B|vf');
define('AUTH_SALT',        ' |&s,i4tL.sWrrzDl_iF8Ld6zG7Gp,oE.lD~TS+v`eWR^sTFpMWG,E#UxMJd[)M|');
define('SECURE_AUTH_SALT', 'U6O70Kt_|FQ!Fp3yOaiVx47!W</Du!+#7LPJzRTmvs_4=/M|m4:nVx?O.N#[(4!1');
define('LOGGED_IN_SALT',   '9wza8aN2]L6}xg*O3!)sTF}]RI|RwCZP#a>C}qp/9@zuI4}r8<0av- Za)pNC)/:');
define('NONCE_SALT',       '7G2@K4g7d3ly<`_d&[iZc|SN)2V(?Y)$u *)v9WtV%!c.| zB/N^k0T{Or (Wz{7');

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
