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
define('DB_NAME', 'runebear');

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
define('AUTH_KEY',         '&ag96Qu}RT?!XNKA]~`F]gGqITqp0)wD]Xwci&FOw[`5@*pehfrJW@TZYUXQByM?');
define('SECURE_AUTH_KEY',  'N*R6AMj,]ynqAY8Aj`h&8k3|gB[8`YKnE,xpj~#G#0;D4x=2@YOn5HVX1+t%dfgv');
define('LOGGED_IN_KEY',    ':Z2>(M4eh!ufV12Hl^eSdqlvW5d*)0{BWs#=t(6D[(T}77j(#0un<(Tk01q^_r+Q');
define('NONCE_KEY',        'L32g7;LoPFJ|3xoW$achumXd*QefU$W#<`;u]UsK3@K+772}o$gfwOA8tss9ENb<');
define('AUTH_SALT',        'd6KOV+Z08?=kX3CW<WYW,QR5hSg8ck!m!BHy<? ,1BBBJ]B!;4#{2l7sb_eqyZ!=');
define('SECURE_AUTH_SALT', 'H^C/Z#=hT)h,+@M],JWQo]]cu6glh!J?CuK|NnT`%Ub)Tl>O(@?{-;IbAK=mK?SN');
define('LOGGED_IN_SALT',   'TmHobVxhl0_R[Oa6o0+FdfWSggCV*$[]Au~)v2zFZ.V/<{@z`&qI>sf4tv$QjsN5');
define('NONCE_SALT',       'z/3},] v3(/nG;XaP3OXc;+Z7%kWVd))hquR#;;lV{kS7%OnE>-BOGCq9T5Lb+yt');

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
