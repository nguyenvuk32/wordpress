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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'k0+>ML!9R<Jz[f,=N<:ncU}]mf&oXC8MiGi1/0&S*}T25+B7oXgC$9Z5%81=:T:?');
define('SECURE_AUTH_KEY',  'tl,1.t;fKY;3(uO!ZKmPDc-7bGL7MkVHeU G6ScoMZ #+%2)o^OR$Z276c:|o|!r');
define('LOGGED_IN_KEY',    '[S+i1]YBE^+v.i67i~kI[{PJrh)KxCSYl8uf i|3,CTY>(9GY^PDF9?WxT)s$SiK');
define('NONCE_KEY',        '9:-($jA h2-`rwS<.4rfW?KU4![7y3l]B<MKT(SJOawGK-6yo_}_Z:k2g}O9hr>N');
define('AUTH_SALT',        '%LSrxnGObRQiI@68?@0LUhA@K`FO_T7?sJL!xvT+7K!4|(gJc{>O${a&6Q5lg?D9');
define('SECURE_AUTH_SALT', 'meu4 sxYcp@4,f0ui_*Ugykk&IM3]en}nwn>dt;$&3kKO;]ix@}9B*MT/l(Rz5}Y');
define('LOGGED_IN_SALT',   'E0O<EGqrZDjXt[tm5f ]u>Hhi[fKnD`tBgf:OmtF%%F SAB;wC8Gm|57ggk!c6kL');
define('NONCE_SALT',       'o3C^S*rZkjp+0eE)c_YseVF8T!Xzr+[Fb,@Tw^DJOK(Fy*m71l5YM04wZ$DaY `7');

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
