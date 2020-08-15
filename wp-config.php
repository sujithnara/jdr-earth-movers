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
define( 'DB_NAME', 'jdr' );

/** MySQL database username */
define( 'DB_USER', 'jdr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MYfate-0' );

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
define('AUTH_KEY',         ']j?.7Y Fn]d&Zb>UwO>G<RK`QXA8A>^6FlTri(A6syB<[+{Xi6d3O:^+HyP,K[Yu');
define('SECURE_AUTH_KEY',  '{J&H8 G-,>{TWqaQM`C|QK&ozizTO;UwxVrr7+_<up<C0T#%z+SvOT5hh-h54Zn7');
define('LOGGED_IN_KEY',    'pq!+&pa*[Kxa/Z8SB>>tGYG0[Y~,_M%3oJ;h-j J{{Bx T7oH7av O}6Y~Qv-i$p');
define('NONCE_KEY',        'ciO5t=f#P-po/]Q9v0.YSPB*_h,Kci|d +ufLb<)Y<K+DSpL-C&v-^s3.X_o`-@X');
define('AUTH_SALT',        '^7m:fGYvLflND~f%f:Q2W(Eg-74PABm+,XJPc)Pbp6vR@^jt%34O$0hK-=O+?GK0');
define('SECURE_AUTH_SALT', '5C8b-~[FuWV-aY1<YZr>~vfCQd?e}8R:_gJ9!`M7}%~!&^P<oHN@YrH.VBPd!f[v');
define('LOGGED_IN_SALT',   'l<]^-T@B&*q]>0MjO^L{7;Av}g-|VA>u+Qz *g3$^xr-cD~Y7fX2+VOU86WI`}oT');
define('NONCE_SALT',       ',=ADj2.KV]+^*Xc^<;dfgu:WWRYBDC&zJt-r%RHx]Q RCLSS~pk{;Jtk;wVgQa[3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jdr_';

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'jdrearthmovers.in');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
