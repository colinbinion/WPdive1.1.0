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
define('DB_NAME', 'pro-headphones');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[!Vc)/+/0NVM^!|R0Kx#yieAVn4igo_W9YoeK6E{e1.mZAsm.J#kcxf(&p^Au1f#');
define('SECURE_AUTH_KEY',  't+/okF{Ibe:/D|@$&)/.3l,?4PE,;V;[gA)L WjM<(i`&|.|~YkmC!QX8O~]+bkw');
define('LOGGED_IN_KEY',    '<q2tejK8-gGW(>0h3,$&Ib;vJgm[JV}gf5/8l_[;3G<-i8}!*;q$XUV-/@;IlC]I');
define('NONCE_KEY',        'OsX/y_%^sW5&oEBM|M56:Tv/=xo3L#A.bVY(QsF{$<:7H|2X*u,GQbi1GJ{(P);7');
define('AUTH_SALT',        ':3eIr?pP;8-Y2G :uPIP})G%!zLp}yQ%ON*+Bw77xeY}T1oJH?o`FN}>EScr]/E6');
define('SECURE_AUTH_SALT', '|>/FHMoUYCnB%2LeT&4cLpC8J}8gF(!5#qvb0oDOAGu^^qD0xB2M{7~7seEg2tY{');
define('LOGGED_IN_SALT',   'W,Bqp4eU &L>B<S}Bb{nwy%AU?m`1D(.hF{(L|1ZSRX!H{O)cWw6^HNF%WCd~t1+');
define('NONCE_SALT',       'aJNyP_riLX(MF&[,6bA!Y[XfOfO&l^MF!lyfxK=3?)IAHeEDQ>PZMH;b||eNGJ9;');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
