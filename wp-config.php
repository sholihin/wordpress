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
define( 'DB_NAME', 'wp_pluginmaker_db' );

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
define( 'AUTH_KEY',         'JP!2H&_ `T|kpz=adMS4K*@@fxL#*b iANsTAOn)0^0tIj&B)h1<pv!E+ByH;yB.' );
define( 'SECURE_AUTH_KEY',  'tpw6D{(C@ap%RD6j%,V/-KeOJ!@(m~V%N]l=T^?(WL*<ndMt>V_a;QD1!1[gsy{k' );
define( 'LOGGED_IN_KEY',    '98VoUYRUa8{|9.h{#lT,?x?=/6LIkpKgA0TrLkYF({3p2b2|oRJ/Z2jf1eQEj.Mz' );
define( 'NONCE_KEY',        '+$rVNR%/+USy^hejMmG3Hg^Q^^b}v&!R|WeS2/}!MmQ@w9kl{t>=>pxkEZB*=G08' );
define( 'AUTH_SALT',        ']74}~JXgtGB-g&z354C5]`E!]c:M*)s:){z+`B$<C5`3{MxNk5RH50@g*(ac$D X' );
define( 'SECURE_AUTH_SALT', 'CQj7f>3sC-7_gTJ`D DEfsBH:3_O_EhgfG:!n)Uc9~V7cHl^e=Hx@jsDKhj]3t}l' );
define( 'LOGGED_IN_SALT',   '9VS^hZzqbZv1n-2`,HyZo`=lhsgBW8fS_oz4-n+Ao ](Bp.VF:Avdf%Cw4H~5#q?' );
define( 'NONCE_SALT',       '7;{h?m]qul >hVu9V:rT-<BeLo A/nE{@{<zQ^t-k^#66gG.aIR|+jc$44kt$&9h' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
