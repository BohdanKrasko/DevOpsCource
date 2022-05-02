<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'wordpress_mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rhTBeJJ`OuE</5LXIaic!zSH9y7kf:xEw~(XZT`u-3f393]nVsP.UKAP^:lv/vE1');
define('SECURE_AUTH_KEY',  '33@mOp4+kp F(k]u|a9EvD3?AWX4*E;y~f?$dC{/Z`r0>s]!B36[mZmN]0B0$&$A');
define('LOGGED_IN_KEY',    'yN;X*3_qtu8BX-x`)/S.w>CC@XJE:a^ufQS,,%_#Z4xWUSdON@e{Su,gqw:01!r*');
define('NONCE_KEY',        'fU$)}fMGo5C,)/|Bo`|EpEDc|[DzB5V-L$[:a0qZvz[cU*BK&ralP8;60SO+,|9v');
define('AUTH_SALT',        '~[/;[N2Vb)$t5{if5OVz,~x+My|&Nk!Czg7*7x--aZazZ ,]!BzKOFf^c.?U=o~(');
define('SECURE_AUTH_SALT', '4M:8=4V(r+a3Sbk/1z|b a)}r-3F22-bvxxH,tGoG&>foNqbQ%z}}~&1l{}<4{&$');
define('LOGGED_IN_SALT',   'JRiJXj}vw!$f2L>r$>*_D7#YKv X#m@p--3i%mNeGH!mJc0Q9+#4QURw$&RI,o>+');
define('NONCE_SALT',       'dr%9?TmA:f8(AD2j|,UayP<>;nsh`92AgWa>ne:fyaBH.A4o-7fE3p%.$@mD +fM');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */
define( 'FS_METHOD', 'direct' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
