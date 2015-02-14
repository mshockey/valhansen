<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'valhansen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Pointer39');

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
define('AUTH_KEY',         'bcwD-vhlmuiYowPo9hzX,3G3I-cvPcVZ?{)e5olp2:`F-I`R-j2%=asd-5IwUQ:T');
define('SECURE_AUTH_KEY',  'T7IKRxZSiYsN6O{b4B;n|g.:VX,~hOlnnzM,L.$5GTS=Uwcs-`IF>YPUiYa3Y7W]');
define('LOGGED_IN_KEY',    'H1CipNj7)K)H |B0U:5`~03H=D31=%gH2Z2_b$(wV.<GXG*qF!n:fIhL=:907`7&');
define('NONCE_KEY',        '7]?nc$D}P:d[O&2}Q}xe&W|P@%V^(f]OxM5IH)x{;$bt?&kR+qEiQu OaQ:L0>,l');
define('AUTH_SALT',        'jtZGinDxJh%$vA5b}O;X8d!d2Y^a(+4+Ml|7=wg)H)C|M(Win<w.<|Mr0XJl1gmK');
define('SECURE_AUTH_SALT', 'g0W&v}sy+IS8eY5__.[c7/,p?Em<b8j2m.J^JozY@`k-Qb=#7kJtHK+d|;8~+?br');
define('LOGGED_IN_SALT',   'A.xg8Qlr?3JM6.C+cA(cVR$^y2~4Mt:lyRLpbS>hrT`g^n2([E#Ovu<je&#f^1.[');
define('NONCE_SALT',       '?Xw-gQ,*vRu|oq5o2*4,a>$E7n]tg7e9][@Dv4q}S:$1$M2E_q&T5=Zz0_{4-L!T');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
