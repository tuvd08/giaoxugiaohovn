<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gxgiaohovn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'i=Uii`B*Lyq0|M2~|!6jVN?c-bPw27Km7/fF-9M*wH%tV0oiD%ywg/de#RAnu*fl');
define('SECURE_AUTH_KEY',  'AXla +4r12Fr7|cKM/&e+l5GVcN+PUC;neM&X7h1b3j`HCkVs]e^[&?|cGQqN0U5');
define('LOGGED_IN_KEY',    '~*|;LRD?8KheksRjtA)ahH&n q]IessJ5:<*oEP|@G<0]}3A[W=ox/T[]ZSD<|Sj');
define('NONCE_KEY',        'aMnCfHD@QY!m=g2EugI;wKohI`&a7F1?1|dgH</}L+}m2Af){W6RDR527vv)dg4l');
define('AUTH_SALT',        'w1BIo#dm_mmLj:n bFs+a1rMr{7lL| -9xWMv+C[>*DnDMZ|*?mpm?|{`$CK t|9');
define('SECURE_AUTH_SALT', 'FY(b?qu7nd`1H_^HEYfn!EO2a@Ntt/cV*jU|NU{,zzoukiYZVMjW+f!]QfIaL%:7');
define('LOGGED_IN_SALT',   'l?Z<.dPle]C-(|?U=b j25[P+}h4hCbuwfD6u+gGuj4q-om/-hKzJFuGUb,}+Yp@');
define('NONCE_SALT',       '&V|F(0,rl.RT/t-=o #z` x%%RC&MgE|7jecL;XDhr6lpZ--U_Q;wU 2^/mhr-&x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gx_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
