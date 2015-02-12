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
define('DB_NAME', 'country_wp_db');

/** MySQL database username */
define('DB_USER', 'country_wp_db');

/** MySQL database password */
define('DB_PASSWORD', ')2Cfa^l+am');

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
define('AUTH_KEY',         '2YRf#!qZ~anq6jr?|4_+w`[IbZgTi7g..d[q92>vtK$}V(jNUux+d=:JR@lmrEtz');
define('SECURE_AUTH_KEY',  '.(n4&sY0S;,QCTfh*6~,J=))FYoq.*>{/)KqkM*tAVlC_fY2>yk(`7],J^dH[{&D');
define('LOGGED_IN_KEY',    '.~_i6(giiAYP$r;ic~}-<mE5UR|+i(4H__6:6ZaC[)T]PXNjgL,l-%!,(]N6p@A7');
define('NONCE_KEY',        'A0-?$*s15F%i|BylW]5s6bc}c-)5Z~g!A.eV;A:|eUqy4=5#[HaERf7GoODPMh@P');
define('AUTH_SALT',        'jORUCqNa?:.n@af-fLRSo@{~* |cu;* B%PIQao&,.Vx|QjR-bjG|`@@O16Hr1?U');
define('SECURE_AUTH_SALT', '@;f_W1W#bw-#Ab3Q{0)x@CMB7;-RKOGOcoiApEy1+>)wOO:ubAr/gBpm!N5mYx7N');
define('LOGGED_IN_SALT',   'xP<#0TTlyOz@pQJ,*)~HNWHNG&Fh}R8|_4wNs@e7||%%%wRz[9|7<SopU|f`/zu~');
define('NONCE_SALT',       'i6)WaO,(|+a.,6vVm&,,t1wQdViFD0!G<BmA7}|5k#}]dM_qJUvg;)QkKAI7iY2W');

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
