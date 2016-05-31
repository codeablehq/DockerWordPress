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

// General settings, we should get most of them via environment vars
define('WP_HOME', getenv('WP_SITEURL'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('WP_CONTENT_DIR', '/var/www/content');
define('WP_CONTENT_URL', WP_SITEURL . '/content');
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WP_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WP_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WP_DB_HOST'));

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
define('AUTH_KEY',         'z9B)OPf u{{%AKxL{iLuXQY|.<j-xnHq7i=Si9(QMj,OTB/4gYky$6*#m)sQlM_-');
define('SECURE_AUTH_KEY',  'TtZUvYf5t:a[5`=U_Nu,_;Gvcv*5:qq|T[J5bD[b>+pGqIY84?[b;Ry[Vx|TjYW#');
define('LOGGED_IN_KEY',    '+?fkOv_=:Mn%HfbOr9Z9qSVSJ$wb:7:|[A+.&&N{tU#.Q(Q@o[tOqvI7~|f.,#CH');
define('NONCE_KEY',        'gY?,x,2C,r8;;xK6&+C~DuvU&KSyS{CK|x=2t@#;Yv{3~$E7Ez13Sa$6<I-m@VZ]');
define('AUTH_SALT',        '#g)3Ojnx3D cd9jcFe+0Dd<D{a|&6QLIRMi`j:{|h)tH+0AbSfdK9!L]JFDaNX)h');
define('SECURE_AUTH_SALT', 'b|q!VWk>`ywK2l1pCZE||)Y lGw9*)zDa.[_PJLlxQsPHt{[#xL$3d.`/[wZ0sn ');
define('LOGGED_IN_SALT',   'p}W=n6EF|f,G6+.m`G+-WxguJ<z7|=Aszc4&:-ZM>xbZf+n7;mE`lI@6N||E+-o|');
define('NONCE_SALT',       'K: <W|-d-hNwedf=sUbU#=_SoKyV3 5(P|~H|`(i9M-w1O3vks|YbJ*)hNXf7NUW');

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
