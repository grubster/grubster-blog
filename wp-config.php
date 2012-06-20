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
define('DB_NAME', 'heroku_4c8d28b00e7d1dd');

/** MySQL database username */
define('DB_USER', 'b5f21ef7d4f3a5');

/** MySQL database password */
define('DB_PASSWORD', '6e433651');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east.cleardb.com');

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
define('AUTH_KEY',         '&$3`K6}p|F9/Eb8A4nTPiL)vvd+~!Nxu=:a_^Qi0wBY_zU </R<z0?d.);*`SKZ!');
define('SECURE_AUTH_KEY',  'p|HMSd+J{=aK-_4eE@5[e,R/2D(sj$KIuNMKtu!o_+pE]n3q,{M/#}H3-YFj!NN^');
define('LOGGED_IN_KEY',    '|$=cTX)`Cv$^<nEX%zR_?8L$d@dni+^lxS;pmZ77%s<2M-*1O .BG#2u7&j~fegz');
define('NONCE_KEY',        '6m3[V}4I=i=#DE%vKbq])QB(v$o<Ob<P+<QU19?ud%@?+++,+?O<}+]e:`kk4^CN');
define('AUTH_SALT',        'UC@RHlqqy}-K#7/D|Zq2,EGwG@O_Hi_Cp_=!U4Y<B%%%(ym)(t]jWbviUT+DxFbi');
define('SECURE_AUTH_SALT', 'D]/W@/@LwSDJy2c=BU^C%+iw9uL3MeB340FQ{ha@;]KLA!$%%P 4>3 h+8{[x2@-');
define('LOGGED_IN_SALT',   'M`~Z+4VtPWrX.Y%PY@!+v*JoZ*H3Oh%E}CLT$eLJqIUl8pt&~Q%ov1fzO!BR;kts');
define('NONCE_SALT',       '2>(gxsPO+P? -02f!AJhgV0cRmuD@^v|.,|lA=ADjKk>4E+aDJAqp+MQnaxKC[.}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
