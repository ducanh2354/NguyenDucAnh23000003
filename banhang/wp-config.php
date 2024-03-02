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
define( 'DB_NAME', 'banhang' );

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
define( 'AUTH_KEY',         'U%BJK.[8$3bmUK36cM!QMN.[h[z[_0 o}izg4X!@B|ooENU6H@h^>(Gz#3Mchf%Y' );
define( 'SECURE_AUTH_KEY',  'Ev_5*hUA|@zcP@ h?YrRYfY+oIaaE-q[96v{ZnUOBmj]4$<D43/pH @*&zJ0ZeBd' );
define( 'LOGGED_IN_KEY',    '6~.MU+N1&+#wE78Q{5O%)xT7UJ1w*8c,BrQKlY  nWblOmX$,NhJemP@O_.?vo=5' );
define( 'NONCE_KEY',        '!F!iqY_$+y0BDz?m yVQ9(?N,||xKeevy|kQMLQ~_t}Mb?pa*D7UkCt:&_C8iSj.' );
define( 'AUTH_SALT',        'jifS7iEAKm}{oL6NOJ3se1%I<(z=q43k&hH3~peRG#{B+$XXH5e,1P&VVS8C0kiC' );
define( 'SECURE_AUTH_SALT', 'v4(zPlXO/i]-At3Ytl,GZOL8J2eZ~jL`N%l WR0knOKg+/-).JV@8@;3(:w<i/3W' );
define( 'LOGGED_IN_SALT',   'xzMJG3B M_|eOPqGh6ovihOu5vL/Vuf8j04H:,!vAH]5d{1M2HN,`fv*km-^{afk' );
define( 'NONCE_SALT',       'gOm [c.0s!PU+e$w*JWdwc-T<Ox[%=UA.C_SSa/p,*(_^!`IZkku8d,--n,gc$ow' );

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
