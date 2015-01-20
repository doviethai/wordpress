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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '`U&4{gEmH?`QRzQFk)IuzOP0:DM4^b|gc0N<Pj8 +_IE<HsHQ`j<j=H>WMit W(2');
define('SECURE_AUTH_KEY',  ')NkeAEMTucs3hsE0EX|do>&+:~v,g@$0Mwvo,t1q>v?Wi+lWL3((y9tSz8;<Ujn$');
define('LOGGED_IN_KEY',    'EO 4XZxY6!D!g;<lPO5G44-p{y_Q00ClQr;LwA+X9-G^#A,Gv}Y& +frPiU#B0k3');
define('NONCE_KEY',        'mhxC&44j^5y//Pd[|}u>Kht/xWz5+^QR7P_-JYyT<2%UGs8uHF2NU>wV+0bmWwOC');
define('AUTH_SALT',        'J|~OV8d%U&Fxk^sL(^ot5(Y}4l3-y[~69Cxf|>daoOX&KCG --)i{29Hkp}=Oe^V');
define('SECURE_AUTH_SALT', '1`r=%rk{~R4n!{zef8#})|:3hQoXP+YGb?>h1/TW(9XAWr(7hE#*jIao9j3OTzF,');
define('LOGGED_IN_SALT',   'E3%.dvN#*D6mQ*!8j8p:>Iz?|H*1;0&1ToI*@C55sn2]vCLLZ%a,|NJe:s&&5,j,');
define('NONCE_SALT',       '5ZRWv%F;%vl;*MT~Z+8j>Wf(WnuaJb${![>.dRO7hVS}BGD#6-o.(+Bj-V4[zj5]');

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
