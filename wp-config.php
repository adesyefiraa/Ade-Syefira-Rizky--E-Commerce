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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_belajarwoo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iX1[NVm47L$nX|Hr15,>DY{4Ua~?RnG;,;l:-F[C#VZw+@oO:(g H~.8%V2E@e![' );
define( 'SECURE_AUTH_KEY',  '8P`lt${P=.yxnX)L+D5,4e8ID5<Mq$12o(&P*_b%Gz;Jui0R4<iK*^D2Aa4Y%+;-' );
define( 'LOGGED_IN_KEY',    'te!Wiq!zFi15+:zun~C2B~IlIMnW?>lRxC`xRG|uf}5.:d<xCt7j.PgJ:C%{b?qq' );
define( 'NONCE_KEY',        'sG16N#PoJE}--xL2LQq 60?3ynE?1;;otlF|ZCoQoXt<l^*BR=`HF=e,$-W1Da#(' );
define( 'AUTH_SALT',        'Z%7Gzf;Rq#n6WHkiq);NYA$8KC*#}AuSdlTVWox0-i%jTnJ+u$&wX>c_9Lo>!~lY' );
define( 'SECURE_AUTH_SALT', 'z0S6QE[Z_T2~0-(d`+wA;3A0fM5G6Fd);$k2Sp#(^w2Oa*rCx}^(YAiZdq>Ha-6?' );
define( 'LOGGED_IN_SALT',   '{j<^]ge|>TSnAv=y9#BZA=QT.( &&c]yi+0x66<txof-).,AT<E1D=6T_lEeN}E-' );
define( 'NONCE_SALT',       'kDr^/9eQhm:mjU>%OU/%|0SGPl8B9/]vx:so_mCi,Spi.a)[uP,_^T$*QYFj3&k,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
