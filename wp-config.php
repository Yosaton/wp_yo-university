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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         'ihj^&5(SLfc#tb@FKu(-L@!>9@YIdo?WZ?2Z|;SPkV{UNyWM}&/g^){}wEyFb9a8' );
define( 'SECURE_AUTH_KEY',  '(Bgpq/I1-Q&?(,= SE}(dZI[RABa`L};H~2s85}kk#Us:O0)0g8vm 7c{oz;wrfz' );
define( 'LOGGED_IN_KEY',    'Dpvnj@*L].5kvyAxgPJ{N(!&H(CL+5=q4H/%Yt9x?8M[|*DOe<j&f&:izaNp*|H2' );
define( 'NONCE_KEY',        'a9rf1oZ12?$v#6)SQ1yXX|cgYwpKO_muLP`]SrHrVW,<^n%a@#Q#dO=s|`VY4E#&' );
define( 'AUTH_SALT',        ' A6BGX]7C]guE%-ip}SUpv?%qTA[wTPLDbC5z/%0u*@ K+GPqBxe]PtgA~nW6: &' );
define( 'SECURE_AUTH_SALT', '3Eh P#kqbCSALRT??5J-UPLeh8d/YD7L] I6)lKDtsn<Av$N RDZN;8S0u]rTx->' );
define( 'LOGGED_IN_SALT',   'Y-I);9K^eqRk;~0Xl 8L2`T&Z6H.Z4-v 8%;[QQB)h1f4`0bD+]IH!|3LM~l4r7}' );
define( 'NONCE_SALT',       '*fltwt7&FkW|.^RIQ@ihJe%lf`;nF5g|kaS!Z3Jm%9@s(_qR2g_Dp`Gw/yfD< 1:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yo_';

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
