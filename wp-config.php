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
define('DB_NAME', 'patchd');

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
define('AUTH_KEY',         'l*qE<C[c>5(X13!6:88@Noe|4yovgi,N`O-fSGY}9ML-9u 7ZX$bi]QU-P;DtU5q');
define('SECURE_AUTH_KEY',  '6wd9Z<H|zB+{BYiB/@tm]}O@ich]]t6yLF#k$Vmny-(nm3V-8%Ok*gUd`wA*dF *');
define('LOGGED_IN_KEY',    '05YU*k-N<#=>8 gyq<E%|{#.*qbiss}-/[UeFRpI0@~29zT/eu59tO1N+De@|n9T');
define('NONCE_KEY',        'Ug6n}9b/=W5BJx9qqW`-xi+ab>2JDl/Q|OUY`[}>]1/Ubg.BEWAJr4(|4tS7/$/N');
define('AUTH_SALT',        '<`9oI?Ah:_)| ^SLMV%@-0#xI8^49tWLAT6]RV+,@,!HR87GW@Q<Y+@6!U;#0XMt');
define('SECURE_AUTH_SALT', 'K3T!s*m)_1E5BdL[%r8n5k-~HX2s<z2; E3r!uX6WZDZIT8W6 a|K3g `:T+^O2<');
define('LOGGED_IN_SALT',   '-K07 L@xJbH6`EWjy+Vj8%_EMYmL;{F+(Ep#*-]2{|S;cnpG}o+]L[d$S#Jr(JT$');
define('NONCE_SALT',       '?@[DowK-M1m8GBN]#1/v+WD}*/Qx#^|xFIwop  spd >e0St? Op#P-?$T2anSZ-');

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
