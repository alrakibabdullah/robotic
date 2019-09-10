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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robotic1' );

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
define( 'AUTH_KEY',         '6L~7gFIl<f.X]VGR7,T@g#n,W!uxu3+u|S9vib}CA{n2!9HM}Bb)xZN9Z)jqeif0' );
define( 'SECURE_AUTH_KEY',  'c:8Y{]Pa+@Jm+T_Y}6)u+.<V=/_[VjC3U$_1;tL@I@z22$J]ziL);OEEUsKF+:qg' );
define( 'LOGGED_IN_KEY',    '^+g,~Na,u~n+PZxzf:0mQ]* -jPMS@q@yz|7O;)GtgzYt4`lnZ(w/lyi&5S(el.M' );
define( 'NONCE_KEY',        'N1V,*@a?,9[7SimTY8u|2smC3SHF;Ay^g%R0.8=Q+QGUfWZU`Cd-#(C7`6P&qRKw' );
define( 'AUTH_SALT',        ')g~k/kR5lY!~^X]NH$REDu;=g&?.]1CmU_8]&h{iuW0B%Qx0j^`Vb#p7,O>W)V^7' );
define( 'SECURE_AUTH_SALT', 'uSn8Oe]8AEe_Ot{u#zMq?~,07;EypS3Dh+f1ve{D?tPZOo=3W=5c#kq=t%1Q{! A' );
define( 'LOGGED_IN_SALT',   'a-t0:!14r_]R]3*LoW1h{7<e3<xHT#qB^&S0])V*CSUun7ig@!ZHf2TeV}{m4KZg' );
define( 'NONCE_SALT',       'Nfo)_FB= sf^iPCKcM(RSho0Lf?a%~6Qferbs)Xq]QHt6F9Q]0xYBK:H7_^z6i:L' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
