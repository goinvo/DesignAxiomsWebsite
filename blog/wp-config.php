<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db93199_designaxioms');

/** MySQL database username */
define('DB_USER', 'db93199_dawp');

/** MySQL database password */
define('DB_PASSWORD', 'involution');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s93199.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|Y+>OjLwY:=U)_vT<<$s*9*5.g<n]*V|yyi[St@`$xh(H+|V[8`n#N91eASk5.j*');
define('SECURE_AUTH_KEY',  'uuJU-cAt<Xa|jG~kT 2u- |4!/?jpx/tDAPZ=MDHv_7=RmPP}(p_drvDp:SgjdNA');
define('LOGGED_IN_KEY',    'l};&?|Q3U*kQl]&kIKv_+/c|OAfcaF-o}23@  :x4,|2s:hB>rT|-++-zNI0O@~f');
define('NONCE_KEY',        'CD?6O9+WRX9u P4lE{?$ ?{KT@%I!t%Jk}oB5WAh/C}U0C_Oz(^,GTj/gI-y;Ke|');
define('AUTH_SALT',        '$M e#ysQg@w3>%~,sIm`=,Ax*Chd6I)Y99{24s[E0tm6&T(,ColC|.~>7DJ<(oQ&');
define('SECURE_AUTH_SALT', 'x|~C1T%-56RnZ.Gm;@xU+d.+=V61OeDI0<^6f6n!*;Njn#&,|WsF~Y5J)^Z8kD4&');
define('LOGGED_IN_SALT',   's3lVfz%+5Jj>z+.?|^;XU?ND4JTN-!fS]Uh:mO _s}}D3VLoU^d*cxQF?UC):|[s');
define('NONCE_SALT',       '1{>5/[E$tjdK-|k`O|@$|ss?,>VIFmq#J-D&hKO.*:E-W6r`NB63DIN9w$DCx=_i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
