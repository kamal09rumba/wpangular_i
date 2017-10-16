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
define('DB_NAME', 'wpangular_i');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kamal');

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
define('AUTH_KEY',         'UO~<OQDonmdiD7Pg#zrLZ6_Hj I PIO#L#n?S/dD_K@B@(&u!Yj8#^0+X6;}5Sms');
define('SECURE_AUTH_KEY',  'wo0o-.eFn)NP&;D N0}%%V/{)6D((7n>8fym`$q5&W,)<h)WOs;cbJM{2%grRP`v');
define('LOGGED_IN_KEY',    '1z]@Vhr5fXd$?WkLQ=c7vP* Wxh*~JtM74YrOf`ieH,`e)]<X/q dsOO,|K)I=Un');
define('NONCE_KEY',        'rvMu!jR|Xv+4N) syw/2WY 2) wk`N4t#qI65Obb3&&dm!{1)T3muEh7&1/Ai_,8');
define('AUTH_SALT',        'FghqEWj:[7c/D:9/mAAg/r[`^R8(>?VpWb.KVB.^`R<$+M}x?OnF:ZX,nDOy/KYO');
define('SECURE_AUTH_SALT', '<tUh]pvHOP9dME+e&aw_1@2:JHYc[.ed?Dxyy[%AttP<&+x9ReNF{bbIz,C3FFY=');
define('LOGGED_IN_SALT',   'pJg!t#3SYn.`,($/t!4*Jdk#Go6*I8~$+G=#AM6]|(/FunqV+hd8c `99B}Z&ezW');
define('NONCE_SALT',       '.-1t Gi`cK5x/HYRGn(?pX FpkfMgqwC2{6L<4<YGpbLNyL>$DLxQG=_D:+w=not');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
