<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'JSDUjtnhUPkibp' );

/** Database username */
define( 'DB_USER', 'JSDUjtnhUPkibp' );

/** Database password */
define( 'DB_PASSWORD', 'Uj07CJlD9K47wp' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '@HJ`BIjhi`=.zKu7Mt600A<&f)8-qgEm!xV6Kp#8OHv.cz2jNxe<hZ*H;~!KZ(m7' );
define( 'SECURE_AUTH_KEY',   'PM4{S@41b!%A`6h`Mf0ht~rNwX36ESKbv~&a9ySj2kh]8y8IujHR%yn{X)P%BL2M' );
define( 'LOGGED_IN_KEY',     '?~u8(H yY/@}fteCyp8eZ@=}Y!^U@tz!d%*D!D}F8nkx[r$SZ[.-*kIv{Gs,LJYD' );
define( 'NONCE_KEY',         'cG]BkcNFRadz7_Bcv?Xu50_|Fu]qn1i1vob&Yex#:8&0{*6g+;e-xRN)T}]}y!IC' );
define( 'AUTH_SALT',         't/#p7&Th>^.zcZ-PCP$.HE5z21L[vv*z=Kd_$1h<Iyi<8n&97pJ;~FHJY_C|D]eR' );
define( 'SECURE_AUTH_SALT',  '<2dJ&>v,s}X<F|)5$)! k*d&O{JPF@BIzMj$:FxxbH$Z^dI<;=3e//q`!P+GAI/M' );
define( 'LOGGED_IN_SALT',    'eJjV$~CJP!t:d;G J4b)=25m{~6[~n+G%!gtx.&t,uphxH`4JV ,1l=1BD1%hIvW' );
define( 'NONCE_SALT',        '&obo.MGfC%duj6vCyu*1n`p3,#GwtCxffazpLu>NEmUwh[H0ChgidYTef@7$.lPd' );
define( 'WP_CACHE_KEY_SALT', '.|gexo&,GycB_o<H#6wY6Au7sBgp9`zxzZqu~32AWUKukPa#++DBm>!cHpEmhv,*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
