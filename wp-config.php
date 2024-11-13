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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'oq}yTwm$D(KJ}C,ujuF~vjZPE{xIO71N.=>f8}^PN%G(L/,cTLI!a5$t^di1]6u!' );
define( 'SECURE_AUTH_KEY',   'F~#ra_o8X]Ue:ONw<N~]w3~B|i[6*L|N=F&rUQPplgi5GYuPy7lD7=x5 W67Ry/N' );
define( 'LOGGED_IN_KEY',     'Y1O<nF{9ptXH*D7yW}-^b(QkZzYJuXevwHOb9~0hyj6(jF{S:AJWCADD}}E-Umqm' );
define( 'NONCE_KEY',         'bY3M$+bAIE_Vo>cM<h9@|=uyij[VSt|byo&{*osOC~htWb4bGBwE(CX$+StM)P(m' );
define( 'AUTH_SALT',         'O #-^0)>U|t*?3<{k=?]PhToM3oc/yj8Y&vs(mtH_$FY, nT(s1i=Z7<:*#DYsQd' );
define( 'SECURE_AUTH_SALT',  '!C<i9Ps]`j;!%TsZ|uT HRIR?4hoBi)|AWOP_Ek?E2cgJ)N}>`zc8GG=%?@}(sN}' );
define( 'LOGGED_IN_SALT',    'n6{|kNU>z~tyV3-9c8iK%a((Y*jk0wXZ1t]8v$$D#jSKploJ!ZZfuacVAqc~J<)&' );
define( 'NONCE_SALT',        'DPp;^zY+=Y>Zr7gJKPGg9OK1{o4 o)H0n$kVha9<`-h|zmdH|a.G8lt^61aj=]1h' );
define( 'WP_CACHE_KEY_SALT', 'RC)H[{[Ff{<=CfIR!;K1XV@EkM!:cOQjxi!^,eN{jZA32#69m;;53<mK0%Xc6!2B' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
