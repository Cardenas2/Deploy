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
define('DB_NAME', 'empresa-limpiesa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j$XfVi8z6)yeA%_g%d#2Fc1v@Bd4aDIU8ex1Vh];3Ay0$+m/iS!8|4~iq(hb!B!Z');
define('SECURE_AUTH_KEY',  '0cnmu<m;icx^FG^]QvWOa-5X nVU*<8PUv 72m7c%`q@P_eu= D W+H}]}nA8%`!');
define('LOGGED_IN_KEY',    'it[O<N0ff$zkPOu- 1~{=0UV%Xfbh0EP!!%6LXPE5Ma`Zi$hYLcb?|x; [>Jzm7}');
define('NONCE_KEY',        'x_R>o;9*F3tBQ~4cPT/U^*3wduxUeUJ}!=/TE@K8q%r_${2Azgy_tgWcWQoN~N|I');
define('AUTH_SALT',        '[>&YH]zl7-!a^b?})3g8L0bqCZwWsVoUoO!*=$aFtpqK_`yCjd//2P.<x>]+F6?Q');
define('SECURE_AUTH_SALT', 'ji~DM@<%$D^.;$>{ZB}5{RFoL8~>,qA#xLJ_{S(lCUyz!K/z5m!Lzb.`K1`#AIzJ');
define('LOGGED_IN_SALT',   'BVvd0v]wPdg+;Q@Cpa,7pOu]5:Id`B;jm!78b3*+}ST$SgMU8knN$~ BUNB38DV^');
define('NONCE_SALT',       'FJd+EVpR#CllIz-DNT/Q7?rpr2Dh#-{lo3ZQpU%vu^U:N)!Al!fH7uQ<g+%_o8X=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vc_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
