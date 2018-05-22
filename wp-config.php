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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

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
define('AUTH_KEY',         '|kyH#:?~e<ACASIz<J^9|%CV+0L_?Ob9Zad_2g%07!v3kQ-E|cc0TnE2@2Zy-mD0');
define('SECURE_AUTH_KEY',  '0PlUo%eTJ35jS|}a2K-HD%;|W]~1->|kWgE}5|9P3hLt0w}^ehaA1-25l|t=,aPT');
define('LOGGED_IN_KEY',    'qE%M-MQ--fP/%f&3QPD=eOpke:4:tS}k>T3YF{$L<tUVhZn:y lY-F1Q]?H]2~ak');
define('NONCE_KEY',        'H&~F|g#?`CPJs|83*c58z3.&/<XvXQ6s{@+8vQhiWTnV7,!z^Bz|Ay~BDm2*=Nr;');
define('AUTH_SALT',        'o;`37b--:oM_6%Vo5^1+t;Q#Nfs/LBsky~B6U/g/@oWl5MCL|3~)3!G#+-z-pG,U');
define('SECURE_AUTH_SALT', '>*22=x-sg3`vsx -+zl]|*RwcgQvqg+Mw1W+F+96Vq@)[gI_De8i|zq--8+*-XaA');
define('LOGGED_IN_SALT',   '47r`8lf}/@<` 5U]NiQz`H!39 R|BM08s02z`2`3`XW4aUju^VRPt@UQcKA5[M5m');
define('NONCE_SALT',       '-5w|-Pj~ysku#YZ1f;-mVTN{FQ;c&+$5Rj([{|(FY;[A+LZZh &HEEI00)?0|d<,');
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
