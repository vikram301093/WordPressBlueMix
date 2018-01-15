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
define('AUTH_KEY',         'a4sZ@~<0,9G2G`<V9nR8<1=.Q!z+g*v__LIuj80YH<r*;+o_t<j~e1:,+:#=UP>K');
define('SECURE_AUTH_KEY',  'Y~Xf#A:|&d-5]7m ~g~e=9SN4#gjbm%~^A|Kaqz@_I%tOQD*|1Dqq*LI);zHU,[<');
define('LOGGED_IN_KEY',    '7h-G)OoP9GoA~y8K#~i&v+qE%4;bjeOV0V@=?XkZ+#w$7Z5j`6tzq2c%&;m>FL4-');
define('NONCE_KEY',        'iI?gPf.BN35(sl{poo899OP|(z4cVW%J^Kk[I}&G-+`%nU.4gyuL|{(_&/!urui?');
define('AUTH_SALT',        'fo-Q[$^4a^bzf-% <^E&_Q)g4+.RmJEq4B#V*j^+:TIP*k-2qb=y+B6.nO$c8Lj{');
define('SECURE_AUTH_SALT', '^@}d;G:@kF61HLG2]8d2s!?==AHuaDJdShWH%W&:Okrlg~tkc)Tf?V6L+]u*Q%0Y');
define('LOGGED_IN_SALT',   '(Yb+V4%$J%)kjd[TVP+J1ot3#bfVi%dJGfPpwA7lC!4Gl+e78QDu3{Y7BPt^{uNd');
define('NONCE_SALT',       '<2AUk4rE-Nvo.]d3F?S?#q3IQ`,Zo:&%0`q]zDJ<vK*M|Oq$E(zBhW|0Ys@p(V_z');
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
