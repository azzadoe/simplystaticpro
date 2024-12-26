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
define( 'DB_NAME', 'simplystaticpro_db' );

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
define( 'AUTH_KEY',         'rXYH;A^Q9`ulTish$tD{@Dgz:/]b 8r&ix:~0?,D>fv[005jP9# {g eECB-Zp A' );
define( 'SECURE_AUTH_KEY',  '1$/p7xlTNK[*G:ra(MEIG}:{ufN<{Ui9B0m1<ULY2fl0KV1-W=GsFehz^&Q`n(Uw' );
define( 'LOGGED_IN_KEY',    ' -,)3;}y[sb?^3K<LYmGivI,fUA7*x;X<.Lw}OxnVA.S5;D~3;h_{ HOJ1p$FCS!' );
define( 'NONCE_KEY',        'PWH@7O@.9a#>/lL~~R0<Y?5&-$kf$iWu#4(xnA~>kFY>m)Hua:/eW>ootQ4HqR*M' );
define( 'AUTH_SALT',        ']V<@V]6jF*a/c2p+,-|6Togs|efWRF84$YgP)V|waLOG}g`N?z#j7&9~=Z_?HJjI' );
define( 'SECURE_AUTH_SALT', 'Os~k4%KE!mg#S l>7j0@z=qDL*E,s;wr6RN &UN5yZD(oJc*xn*p$9DApm;^,p<u' );
define( 'LOGGED_IN_SALT',   'Y DqQTNWFY?:Z`%;`5P(}aZ4p5Z-r77@2Y~S1yD&C<9/{<6mf s;`q^s_GkR,vW=' );
define( 'NONCE_SALT',       'k)Ci$RqZ!<Ca{!$Q 3Z!#/:,xMG.bJS.4go2NLwsNK=~DT<;!USkzxMUrCzP)*sL' );

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
