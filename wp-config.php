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
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         's+BoMKuSm0Bif,W@L0+oqy7m_$d4%/b#}6#$Sz$m0XBw2D-sa RoDU5F?:A>`ww%' );
define( 'SECURE_AUTH_KEY',  'CB6j~jOVd]Q@39dapy~W/QMfy$xM/F_d7dqhE)3)Q%`HOLX6E];mI4 Xn%EkyfKQ' );
define( 'LOGGED_IN_KEY',    'f/twIWOU>BD=8Ntz/8GrbJK.@;BKKL65DR+>c?X}x1XoB80XZh&w mA_&h])j[*T' );
define( 'NONCE_KEY',        ')1FITw]!f__hd|iQNWK%vbFn;N#T-6N>c@l<nm|G@)%8oR[Z)+9|5F`p./.9mP%7' );
define( 'AUTH_SALT',        '9H>E{Og$e9:i!!2^}p!qQgg#fYf_Zx(WuftYM9UIi1.9-IZl)a=[[WkU3glhx@SM' );
define( 'SECURE_AUTH_SALT', '^nC,A@tZCfU8~Ni(]uSyS4g!^rTo}t1.:w|EJa77T@~UmvL@B>?:BgnfSF24Pl3M' );
define( 'LOGGED_IN_SALT',   'Rd858<@|Uv>=IceczVu,m!R)ztWt&/VLRbr4;Yh)IiKR9}3.$~U2J1J<KQaCB1$x' );
define( 'NONCE_SALT',       'YqmiQsCesH~BUoR5nAeq>YoYy0yQJQty.p1}(dlZB@ByzfBI?RPh00u.)`$%I9wI' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
