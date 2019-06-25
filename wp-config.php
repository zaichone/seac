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
define( 'DB_NAME', 'seac' );

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
define( 'AUTH_KEY',         '>3eRg3#<7X4.<G>Y9hs>F^Yfr2u):YD;3.bpT}n@+3fQK%JaQ#t4H5?&M1CM|}:p' );
define( 'SECURE_AUTH_KEY',  'm6K}to/q}K,gQ=_t@`h-|@P^^Y|b){euWP|([j=@8p%g~xw38$OF(AO+^+Wn#S~|' );
define( 'LOGGED_IN_KEY',    'WOwq`0%]cqsJ.1Yg_9a}=DA&mYU0t_}N&,jg4/.MTiU%A:%WGvZ9KLw;xPnI-.T$' );
define( 'NONCE_KEY',        '*]jU^8$!OQqTnG_lSDMb|*!.NEu+9,%8${W/0{h9;#.NGM,:>s$Q)~n~c(OD1UM6' );
define( 'AUTH_SALT',        '<s*~7uw#~&mJHi$k2Ze:F)88 Bu9%v|Y|9Hy17pB+R&e, F6Sh6wau])1*M=UF`@' );
define( 'SECURE_AUTH_SALT', 'Sm?)@nEd!+*OyvWFxa)e>_^f?R7%]b}v*b+]x(3yKQ|+:Kh~,;|JGNifJL{irHK~' );
define( 'LOGGED_IN_SALT',   '.lz/u#04-]ZMlRdw=T&Vf[]3(xCM~qfcQ//WYfhr@TqMDwpF/6~mgY;bEtC{D^)>' );
define( 'NONCE_SALT',       '^r.?kpC.$s^CtZN_mr!DU%HpMyM+PG.sH13-Nly7d0f&w!7:m@Tj!]2^tt1mT<YA' );

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
