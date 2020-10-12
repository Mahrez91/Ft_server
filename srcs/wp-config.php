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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '3])Dqe>0 6?:H=JW):oFZblSA|y& lF*=ylCgB;0jnjKs=^?m&Cl.<izf3/|AybR' );
define( 'SECURE_AUTH_KEY',  'N6.c^oJMXDkxfL0FI}`,$DC1Y{/VNT_F{n]:*n(5pS#YwCgO$w3xZ]aBK58/H|g@' );
define( 'LOGGED_IN_KEY',    '`&cO+m,x/i,d8x`eko)tlMqM%N~*1^XD.FAeXDf0ca:ni-zPr2ERPkF,I09)GV}1' );
define( 'NONCE_KEY',        '#RRH<8yzqU40E],;sI*k|~=SU)%_7}y;MGBkApgmn9&xqWpUz59|@BnJO*gz`Lt)' );
define( 'AUTH_SALT',        '.Tww~r0N^9zt/vX6~qlZDz{Ck<Zj/Z!]z=9d[B|HOvY{^!+IGYod2gu&b:6W:*9S' );
define( 'SECURE_AUTH_SALT', 'YwzV,1 {&Q)A,:2u3o?a5u${}4eJ`y*gjb0#-1xp7knlz,1Dud)M{S`^-P@JHmdy' );
define( 'LOGGED_IN_SALT',   '{9>3x 5(rq.jS-wIXge6#qCLEjC[Ev%wz:`yDk_4[xugGi0$m=aEecN;+EWwFHPq' );
define( 'NONCE_SALT',       '$`Wne)~uK!%Zz4,P]<clvvA2VBr78jT(QhbA_VylHT6c*U91jz>]#a!n4Pth+t2S' );

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

