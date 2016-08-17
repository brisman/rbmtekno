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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'CvMvH6*nra>XaKNY0ATPmNO*7A-7M0@aKrHCz!9@#(DiDJ(ik`kdiE=fqQt7KnKv');
define('SECURE_AUTH_KEY',  '!}|D:W7T^YxQ7r!M<!%Vm|VBM2Y$i<?fssDyIF!I`7K.X= ;;>[JKlQ]$ue+2L`q');
define('LOGGED_IN_KEY',    '8UB+wCU9:H-oeWOWHcDz8opcWHtcNA_1MC)1:mCO=Z`/M6biT&^7yzYG~%+X<Q3<');
define('NONCE_KEY',        'j]9R^9Dg!apTWZ&iAX9cx@M[9$d,JEt54#cp7~{n9fT:m-ZUX-M-&D6IHct%Aqc ');
define('AUTH_SALT',        'sB- #,~mGs/qZ}LAu]x8TOr)zL35JM3SP`sk8)zj25Kg}|v `.u%Fw=H,b%$hFPS');
define('SECURE_AUTH_SALT', 'jTOjq{@e]PXrAAU0[{p!~CG<s*w>,1Xvh/Wv7hsm{$@]>zTY]mK,j`&C:$M<UqvU');
define('LOGGED_IN_SALT',   '&+z5?FCJ],pTmi%rPp-@MgLbJNt~.-7hipLmV[d?Oe<.)=#@|zQ53TK#mnp2@<tl');
define('NONCE_SALT',       'l}t8hnFQJzAs!x=Ujq@9lci_#Q2`(`!ydt?We|=>^]QWPsRZB~ju}.D>K/g92@Cv');

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
