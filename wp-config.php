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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'P$+sy`&4_f`$FWCpzXTH]ETpy!Tp-aR}j2r3m|*1pL<oxp3SEMt=8!dQ$)*rkS}y');
define('SECURE_AUTH_KEY',  'Z{-]Ov;I)$o#rwBRwEy/|UOl3y?iW(FX-Q0MN-|Mxx4Al^)5I5o8<OBb[nr$)D=;');
define('LOGGED_IN_KEY',    'lv: [EvDHLPu&n7W &Mnc&/>GsdwBDY6(~t9W2qq3vh;#c{tHZu?bZ?$rn&^$qUg');
define('NONCE_KEY',        'H8ygIt(qMq.s*$oSj@2E{ff4{-2,1SNQC&bUbp(Z!MqA%<JPQ=ItvZ6X])2zh.QD');
define('AUTH_SALT',        '4>=-1_,Q^CS;?<?Mga}0?QC&yCim TcPCCJ2ja$2.sO!Sm]<,Qh:nP0Y^O~]5P]g');
define('SECURE_AUTH_SALT', 'q{v20IK3o(}O{jU!q4^JN[)R&.]A}?M5Idp{Z2C)%pc!;HOOI<`Jg,emR6DTUbj.');
define('LOGGED_IN_SALT',   '.FCDNF6b*6d{`&/7WWhTmO.FI@Pe~jrRBhk?l]}e>~}(0wk0h{Vn-@USrK$P:,m7');
define('NONCE_SALT',       'A&C!NI)%$GwsGU*QY;kCL$wG9bku4?]FS@)rr3ZWwK&!LSrbb,xq1Vx|G@hbStY4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
