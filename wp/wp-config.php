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
define('DB_NAME', 'bahuxtest');

/** MySQL database username */
define('DB_USER', 'pos');

/** MySQL database password */
define('DB_PASSWORD', 'pw.pos.123');

/** MySQL hostname */
define('DB_HOST', '50.56.176.125');

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
define('AUTH_KEY',         '6PA%KjeSqjDv~?1f~%f/CFhh.3~S%K>S+]NUAk`SOb9O&m87P5lU@/]ywJtudOSY');
define('SECURE_AUTH_KEY',  '{VPorT`RA@o5=iy:LR|F#J~vbf<.v3/WbzNMgw0y%p&^%(Ghg3yhV3*=;}0ky+5|');
define('LOGGED_IN_KEY',    '/n#|.f@It?<n<-Ws,V-fVG>Y#U(>`S:ebsB:8$_Xb_Xi|vlj9KF<LwF~qj[#%POe');
define('NONCE_KEY',        '425fAaz_Pw3nE/N1M8W9,!FsJ4aV>7&^f7wtSF]dt%l1s+EIkRy>[5u7-%hDFw]-');
define('AUTH_SALT',        'R8SF:EOv -95*4};KE+j*Z7FH~JgkDrUqTLT?!=b1&K3~?qSGqcJWu8H?[G{j(If');
define('SECURE_AUTH_SALT', ' al6XS/%v7k/(sh_P$,[>L%Aa_=rnKm0#QC*E5]LFVA8(1?IY@st]&;zI|S4_TS2');
define('LOGGED_IN_SALT',   '7YjRH<1rg)]diKvO-TD5w:PzBS3R.kFj8(,0CLgf^`%m@rsAa*%!k&NIe,JubT1B');
define('NONCE_SALT',       '*h#0;51;v{Pt6L3XZARf6r-gl&}82-D4u:Vc/xQia`/Tf}$m5.Gq]F-;Uw-HjqI+');

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
