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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!Md:Zl<UFlE&48{SR+:EztC4~x}TBv7Ins^#YlKOaT<q<|$CJHY)qQbf+_fjH3e{' );
define( 'SECURE_AUTH_KEY',  '7u@+B(LMpYqS?4%u#9FoOGInWu/BP>kKQ=Em<.kz$SZhXA=9ZMOR5dRBwFnON4#e' );
define( 'LOGGED_IN_KEY',    '.fuVN2P->(Zy/Nhan`Kk83i1+/}KwgdF4|eTNr^!6~:Z,,Jz+[Muh29zF D@e[nw' );
define( 'NONCE_KEY',        '}ApS/`kFjebE(ORk&@fq[a!a6BrboJ2W,,,NP7zTZ g]IZga&gmPt4<(nORn#sT{' );
define( 'AUTH_SALT',        '[);;`wfQz3B$ ISMGIUk:7_9-r{X&RDvD8h1Aa]cM*f,37~UQyBxrI,[ul@1(R^d' );
define( 'SECURE_AUTH_SALT', 'KTahDbBK{twEpj(uZp[!F-xqf;QYCDnzQ38fSxA?258.$h++6#9G1?!5i}a^,Wl>' );
define( 'LOGGED_IN_SALT',   'qVocBVbztMtBmgYFeGe]IUL{*Ri!MM;l2_lI0_1$<4f4|%LLe o+6&2ziCYd Q1[' );
define( 'NONCE_SALT',       '8oLS06#n&j8XU9j_lVx%cSWpB35@K~_Qy9(XP,v#-3yA4w$T]|@ghIL-dAK.R2TC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
