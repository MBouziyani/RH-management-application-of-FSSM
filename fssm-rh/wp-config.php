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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fssm_db' );

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
define( 'AUTH_KEY',         'A|6FnAmb}8R[(1kC|/,~v:V<F,rT^eovz*O?$ry1V5dI[liMHq}mUl(i_siL6TIl' );
define( 'SECURE_AUTH_KEY',  'bs. -<UZxcqWz_E`Z> lrWr,^Y]Q|/pmI/gYf,den]F5+I$%&)jA9U,Z1=bg7b/X' );
define( 'LOGGED_IN_KEY',    '$437iIJ$p=<L6wC@UHyVl)AX#~P^K;zL*p7#krOwe>50OKO>wd:ryZ*B,wy G9M~' );
define( 'NONCE_KEY',        'b?KZb(cus<C?M58?mJXk1t[/%LNU+##pplxK|]8$}h-%&==G9`Vt0`M(~Nlx~VP%' );
define( 'AUTH_SALT',        'k3Hcc45:<Z==#DPrjl+/..tG`M1Wn%N:]s=@hz3cV(M}.$tIw :Rkbm8]Af*i--D' );
define( 'SECURE_AUTH_SALT', 'w[./EDy 73*HF3B4QHsfH0nHJu)$E~i<hMq&r|zj$i(1=up:S2*Mo$6!7]@Hr&GO' );
define( 'LOGGED_IN_SALT',   'q]*1)-Z6^?9]mYh.#<_)-K}3e0$URYKJ1Umn%9kcW(ka2qrpO[$#{r0z8=GO egF' );
define( 'NONCE_SALT',       '<R DjVM_Ul.J<GZEn]A~:,~FSLY.o?Ir~H^e^N_uh).mtv4UkhIteqZb)}zKF3N=' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
