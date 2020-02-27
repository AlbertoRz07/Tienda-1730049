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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '57598b6237cf3feb5f56bc712acb3f4a5a2416fd633f9bab' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ci)}v/=J.c[j{Gs~Z3T.N/.RAM-0>e_V,4*}PM/rpiqKADk[;ZaC{%-5i:;=KUCH' );
define( 'SECURE_AUTH_KEY',  'qk}6.X?=V[o<3FsWXq&1RJA-;0]<SRh01b:y(NtWW8sRNsfyuS?a!%#MNxHE?-P*' );
define( 'LOGGED_IN_KEY',    'QSklEo!ALblAOI,tID#m{r66WV|Hri(}L}|u<U8T(VtkY:Qe$6u*Out`91sO%A3c' );
define( 'NONCE_KEY',        'mvx}53%W`qtz1mFe{E@%UK^_<c*Ad@ &d?EBDn|8Jd9o^DvO7hHOH0Kd%R)^LQ&9' );
define( 'AUTH_SALT',        '{9i-kK0FHf.qQ<wWv?Yd YcPN,44V{lN%~~F6]Ho^!`e[c(e1z66#O7PgQ+vutT$' );
define( 'SECURE_AUTH_SALT', 'W(zb(0xy`|f(DKC8Q V3FW+#O[9o9*Z><z<L$,>.rORNs zI4_yUf:T<qJax[l?C' );
define( 'LOGGED_IN_SALT',   'LqJ]f%XU8yTV_=yi@`dO8&j*#1WW)er;E^;%Mye*whkdh5i!qxO|BO|dBAct-<S^' );
define( 'NONCE_SALT',       'dQVs^0en:!/YdKW#Ow!xav8c/`6dx?FdU*vw<f&W=LD{&6 KR1CB@65j6yO ==uH' );

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
