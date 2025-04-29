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
define( 'DB_NAME', 'u733146658_VNrbW' );

/** Database username */
define( 'DB_USER', 'u733146658_EsUsY' );

/** Database password */
define( 'DB_PASSWORD', 'o8RMZYdu2H' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'yRc@@QG7aVt~2KWgR^G6k,rOam]k9.B_$fpT3rh8$ZxLB3gj<yc2Bht9.TgAcr`s' );
define( 'SECURE_AUTH_KEY',   'tK5UzIM>9j41%||l$7fs9&}ESZivWHnWUy[U~PUU>!z)]T:t!Z/a6i3gIpa#XW3e' );
define( 'LOGGED_IN_KEY',     '6tQZTinzm-}p.|#rDT Rq@1zr:rg[_Oi(ORn%odBsMXctx>pG=g 3G;6Ss%%(Otf' );
define( 'NONCE_KEY',         'SS,w 9_7`EtMIy PV{snI-JgQq/Zv{N@cnpbk[jpqP>V,x5gYfO^GY_ppeRb,ME#' );
define( 'AUTH_SALT',         '%E&rCX5?lESpF4CoTlx$`fHxV25^`I^_q4U#l+V<eUV9/uR276beah_B(1_9JAJ#' );
define( 'SECURE_AUTH_SALT',  'hobcGZ7aQDW y`.~M+&&d=IgwpR-q<N8Jkps]l~:L0F39=}oO[}4.~mHBv@G_,eL' );
define( 'LOGGED_IN_SALT',    'XG>w1:=nj;~:u<||`ijis!t+0$t_=:3w.3/8J3t?rT<X^|kU@[e)8<fLv^Ui|v7}' );
define( 'NONCE_SALT',        'c!duf_rkc-&GY1ndE!+yWlw-:ao)_]({P!CAZK#$l--7{$J`E3RVATe%-N*WEzI!' );
define( 'WP_CACHE_KEY_SALT', 't_ak-fHkL]-LQA@J*vc&F`ugDd&%ACLP:1K2<|7gRN nj-eab7wrdkaNhb&/#yF|' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
