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
define( 'DB_NAME', 'climbingblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BnWf+&(;=Fg,*a2Yo~S*b9Wj. V}#cBEVF`|sDY6H;o7@m_tEUezoxv`k(;b[OSU' );
define( 'SECURE_AUTH_KEY',  'g&5z X6u2pPM:c>tX.M2)G|BAsKj_`4yepxEYA7oX(G&lqB4Rc jh xe8 <yQpp?' );
define( 'LOGGED_IN_KEY',    'H.3-dH::5.1&+{NUA[s0Tu)f^DK@H>}Vg^!b|OH 7~Za(;;&GK[*DwW!j4U(>V&R' );
define( 'NONCE_KEY',        'L=Us:^yu|5Ny6kNS)vdrmuehv99O}BMkM+~-@1k$m:~rP,W@7y/O3*, Q-4Lf@-B' );
define( 'AUTH_SALT',        '^^~ML+n1@}m+l^+Zs(+EVg!QK1$rIhhAODCaoh@:E:L3Dth#fc)rgR(lt5?c&3Iu' );
define( 'SECURE_AUTH_SALT', ',&#,H<Pmnh~t1tNg^wvnM.:QRa,+k5rD%h}ww=F{|a{^&#%ehsG-+}ir~UB2IGZ<' );
define( 'LOGGED_IN_SALT',   '$SJDKR ,Q.#^e[,w!xBDb+&}$YDMyJwo[p<rVd6-ht*rC^!i&sI2{V91K*Bk)dm;' );
define( 'NONCE_SALT',       'R=P*^(&`0kuM7IdwF4alriFgx!G=4_WUGrLDheZ}o# 4zNa2eFyfcKw.Wf+X^sO-' );

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
