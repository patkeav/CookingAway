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
define('DB_NAME', 'cookingaway');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'jZuBh@4x9;[]Ld{:##$*WR=DHM+9f9^]F/~y?ka/Visz_!mXLE`^e}M?^|;|p9;i');
define('SECURE_AUTH_KEY',  'V8rFM[fAHln1dzdfwluUR>?-omrGq#&IA|FW65p~EdqI;j,Q7|Oz!<#&8xnN6]ju');
define('LOGGED_IN_KEY',    'J|c&Ziu@E{0j?|WqW d,~^>U%d6_+|oP|WG}B$[#-)E^QJytEx$|{/}}X}#o%c<B');
define('NONCE_KEY',        '|54?Jr<b1+4k5qYx&ygr:mBpn@aM_3H9(t*M+TMY7!Gn10l49>^D56&N!4<8.k(2');
define('AUTH_SALT',        '$K7sr77e6:920I/lpC+{g$f-LhYZ!Us4Ii39(e1Y^=6rd,~cqA81?E(s4F/=BO(h');
define('SECURE_AUTH_SALT', '$c5Ry?~JbnDjggmOSLe1 LF Z(1XM[xfU@Oa(hb[FjS12h01Ris*#>c-Dn5+{}=C');
define('LOGGED_IN_SALT',   '~+:]M&^EaRJjqmuR?#pRv3W-f6lIVtmAu3-*F|q],{-{C` ~+3#*yswf8Ysmf)z#');
define('NONCE_SALT',       'u~=hyCfI8&J[v7r/iGnA*TF-;_2`6@MftB|DalcwJw$2Y@dUFWl.pJ^|T8jb!W@x');

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
