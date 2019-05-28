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
define( 'DB_NAME', 'bussiness' );

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
define( 'AUTH_KEY',         'vs#,(s+uv!|4]rJ%@f;$^7<po?dVfI&dd.^PSj&::q& )0n(E@(jhi[eAO(9Qc8T' );
define( 'SECURE_AUTH_KEY',  'S?jfh;G!>w7SN5/|r@BG:BK1H&j9{lE ,flt>%`]NYnV)V9c!xHP2{d#H9*AX%cM' );
define( 'LOGGED_IN_KEY',    'LH@Uqp}~;8ZkksR]gSHj#C~m^UeN+qW_.&N}@zG]dFA`X~Ityp_ouGS.Qz4P|EGr' );
define( 'NONCE_KEY',        'l*18cLkAERx:*Y/M%=?UVA44s{[C>R],2=rxs(Yi$axp9BVW]fv1G`DbY<0S{91_' );
define( 'AUTH_SALT',        'J;.~[oV~%mbc/s%T5=__V>,^j0LA5QPvl~X>yJ4iTSP-s3!]OGqs+o@8Z0iOMXNv' );
define( 'SECURE_AUTH_SALT', '7ok@vcQ8~[VG3i,~FY6YF@=Lg3.xK81!B! R*wj at(GOu@;v,v58g`aJ^*eYjTc' );
define( 'LOGGED_IN_SALT',   'X]1yexQ(ZWshIG@&:m)GcVNi_Mg<(U;0q+1iS#@j>MU~<f/W[#[,-~SAza0|GiMe' );
define( 'NONCE_SALT',       '.T$f!oJ=BIU*#@wd;NB6aj{DYC#MeEN0MhI{jBbjTg)zdr/K*q{*DEacj0Y%<b%r' );

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
