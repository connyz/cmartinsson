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
define('DB_NAME', 'cmartinsson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!8UE}N{#i}$,-^+[ 5ai1i|7 ,JFNw :R lSIm5p>5D*|-$.~=?n%|!7Tm|4<D79');
define('SECURE_AUTH_KEY',  '}54<(%?C&^Wp]g6C#V,xoK:+ej3ZZ*h~zuWi]GW%d&SPHMid]Rr-8p~L2kX;H+T1');
define('LOGGED_IN_KEY',    '=8) |p``S1z>{=6`4B{Kt@m]?:OA0n7ST}9[rQCoIcudo^|3z^(@0GcO3:v|M@w(');
define('NONCE_KEY',        '6I9SQxs yX?*4l8y*#:jx=U7A5Riz,KSut]Vixh7Dwss>UaV-+f[[s@pu+(L:+K/');
define('AUTH_SALT',        'Iw<!(J-|@T+#[kfFVb{B<ELO j-*)s91^x-|YtQPMQKUq}DG_-+knwp7k|2)fWf~');
define('SECURE_AUTH_SALT', 'xvoRw,Z=?z[+)}d} $EQMjBwScC+yl(ps[ )K3^*8dA#=g*Lf8kf`TA2,fbtXczK');
define('LOGGED_IN_SALT',   '[KuN(IA_e}f]:CXTL~%,,&M^w?/2z|j((VpP. ]9,2Fe;G-@&H~1.&2Dkan<WEc*');
define('NONCE_SALT',       'PC-Radk|5MKe0AR%62p-x-%2TH@UE0EulFzlzd@MF-N+b`7on:<0/<J-&NLy~jXh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
