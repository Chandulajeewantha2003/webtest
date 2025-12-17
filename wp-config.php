<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_test' );

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
define( 'AUTH_KEY',         '@%pTt<A2yQwF3Y[$y$3AeiORQ6EX?#_,0|Z5K4?i<%^K[$Iad_;u#i;2(t>!z )$' );
define( 'SECURE_AUTH_KEY',  '#raVsHDk>d6;pGN,yh6Up&bBNf9K&]FT]Zj|H/l7<!];WKB?Sl~i;Igie/ryQ.*~' );
define( 'LOGGED_IN_KEY',    'FkP`NUJ<lJkhvU9E0Z`9#H}|&a$F! ,qsmmhMOl*+c$hLw6d*j5+w8bMJJ<.=q8j' );
define( 'NONCE_KEY',        'eBajvId3`).Z;ChI?r6QRRKX*^6V]RNMPsOqgzBc*A!<SmAUy,)EAVL@5|eAAnW*' );
define( 'AUTH_SALT',        '6qe<$c{E,At07t@s6A[4XtE4v-?Tk B8 DaG1/]Bf&O&Qg&|p+0~PJL,.ERDTOu2' );
define( 'SECURE_AUTH_SALT', 'o!KJ4[fK]v.e_%SAV`]5[ZL#K<z1ih.z>Jc{j}bMmom5K_thM&#hamCkl8nishpT' );
define( 'LOGGED_IN_SALT',   'i^zKfUNrs|rD*J=Ui*FZTZ,W&qdc!O)28J/$.b|G7RZJ_R?}9M-MmVBsRmf,@Qy[' );
define( 'NONCE_SALT',       '%u@~xWCVnVlPGOB/?ilKXrp:C7ot}7KS~N*+&>|n[Y6ThU6&0qVpt0iA%h_#J>Es' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
