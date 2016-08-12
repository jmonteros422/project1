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
define('DB_NAME', 'school_dev');

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
define('AUTH_KEY',         'p?Qy1kmx}5mk= NPC8f&U+v*,&C m([;et(4A$x_KA~{dD%%xI L2M[EU}bU)>F(');
define('SECURE_AUTH_KEY',  'T?j03Wfm{CO$NV_S:(7e?$euOTndVm}d;dkGiBlITZwWL#~gw;*z4K^]]{kccGnR');
define('LOGGED_IN_KEY',    'P~sC?*U9gHk*l:=$7gpx`=ma;l0:S)ETwSg;!@2C;7LyNvJJUDEKSzP>6 xKZ!|n');
define('NONCE_KEY',        'apX_9Z0o506 hw~*@XD<M)1AlE|nCW_J_&&k!.UR ;JV[H&hEQ-O)DRZ^(02dvkl');
define('AUTH_SALT',        'ez-8sz6Rb*=ri^D{xee$Fb6NS4+vsjO}hX,~C7)?^&gkx&}dqn1>2Q(c(V}|}xtv');
define('SECURE_AUTH_SALT', 'R5s:Qo+&0UJf?R7*#Dq^!yv6{fH)fml#3|@!dy;J#UtufDV)p!Mq4fa-r0&N.?`8');
define('LOGGED_IN_SALT',   'I)7i5t+RF>9Adf+*/(>4fUeVr279,LP(d+amAKbMQ%FB#a9v>{ z6ZY79~MSn;00');
define('NONCE_SALT',       'YdM3;w`]frB3[cp,dvTBlXg]3N1& U90&VFsFHW-Tql*A KX[sXM95ChKN7PJn#~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'school_';

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
