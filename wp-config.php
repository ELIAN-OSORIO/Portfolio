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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{E@t(C3vjJ_?vvNJ<63luC8)cb(4Q:@Lr{~[Ym6)%djBH2BsK@7_dLv|So[;ezjD' );
define( 'SECURE_AUTH_KEY',   'h8h:2?0H@6Epucft!i9(=Cyo0lF*i4P^~2&?yg^->#Wag]J4gahxvfULN<dDZeI*' );
define( 'LOGGED_IN_KEY',     'eK+fQuSh~%wfe*yg,l5w(VU[b Y/V:UI!kgxD$jgs]EG,]I`3^J#[*QGS_x87#,F' );
define( 'NONCE_KEY',         'UB;V1-}Y?HBZN|5h8;oEQbLN%?^GS&rw-Tm>X !N;J&H_%IwVFv|YEZ[?_~eHtF:' );
define( 'AUTH_SALT',         '1<J9iG]-NDQr-hHlEvi0+*<Rd,TyHoyiU#tXcCYSFx49+[}spig%Wc#_,rf!RypG' );
define( 'SECURE_AUTH_SALT',  'PbZ7}0zssy55mjBt_,Bv?:M~+ACk@q^jWxW^=;|F:9XNuG><~#Wwp8>WNa,JnD+b' );
define( 'LOGGED_IN_SALT',    '|45$S>^e ^xWq)|7@P7jGik|88|&XWUn.GyKr$Vd/l[`mk+&~/&-Od#8I-_#@%DS' );
define( 'NONCE_SALT',        'C)t[|Ie^a|ReCn${-@KlnuT2:|NFk1AM|$Sa,54R|9$v7]$b#kP6S/X9,[aO:h=*' );
define( 'WP_CACHE_KEY_SALT', '29rd)*B{&-4cq@L3qaXh9g^I4a<=bqB)+,dy/@MdGIbnnlW~$e~b*u@km=KV`C^/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
