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
define('DB_NAME', 'ivana');

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
define('AUTH_KEY',         'HBf7vz`b$_+@J.*kjlRYQ&|^bpdiT6Wei0^86f*B`!<#pce129mw5E.90YHSX<s%');
define('SECURE_AUTH_KEY',  '[%s+eJN|9~J2R2Ygulo>w4PTeq+KHsk-$y+V%zac`(@i:==kb.WG[W9%.I0p+I6U');
define('LOGGED_IN_KEY',    '-;SW!f{c<<[GDW `L2oSp-z|-qjH?q^|>%l}CMZ2DUc[r:e/d(-^V|-*rE X8qK:');
define('NONCE_KEY',        '|!<25KyYW*2r8|k*+$`|Pe+8mX%[z+L<dOFcKuKI}QA1Wo|o]29VH6WrF)3>#xFp');
define('AUTH_SALT',        'N`UD/8m$48T~;EK-G#8(`lq@KO2L@,O%lplL L16:fRp&&}YydKn+=*IZU,mBP $');
define('SECURE_AUTH_SALT', 'mz_Y0r(T|><snD}/!^B?*3d!z6i%a|b`>hV&oE-nFO69hAp3yb{LF;[t`Qw6YVhb');
define('LOGGED_IN_SALT',   'FwmsIctE8.1L7Es#^27}[fu+)Ik}o3`d1w|BF>*xg7 er2)90IMlb-KM}Z(gF*%0');
define('NONCE_SALT',       'J29I~+ME;X787PAa3u{kMp-O/>5fv0^Ec,#C!?u+;7^>zK$AjVu_q0Z7!)yp&u.J');

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
