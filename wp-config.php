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
define('DB_NAME', '2k17_wp_musiqueaction');

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
define('AUTH_KEY',         '}O}:mKduE0p6E#)ze^g:pn^]<$&HZ%kPHN`+mE/+)$ceMR#V9:ajW^L= Z6D@Zd[');
define('SECURE_AUTH_KEY',  'd7iFbLxoC>5D2>.gq=PzgF)Xpp(_*y$#Ujkr.g]n]<B1f1B`ZoVdF_Jp&<ie-@Cv');
define('LOGGED_IN_KEY',    '7ioJ8A}xQ&O,T{}qPQ}7]GHgb/0.%NlD_+9N6s0B@{sd9cO?D*3Q2ZD:QOX`h@~z');
define('NONCE_KEY',        's5Xr0CW-:8io&SAdYNP>x_^v4%Dnfr30@E!qfYCJ;t`/C$4?C,0+wYox.V)=Y+ m');
define('AUTH_SALT',        'c2c}Eme(7NsES#J@(B%)_]q:HM~ItzHrrWUdpDFU[YD!nf:J]jN/{j.3VeTJU_Vk');
define('SECURE_AUTH_SALT', 'Pu8k4p@N9lin90t$$9[k4tI&H7HVSg[ZqkHwD.=j-%^*=mP~q)gL6[4NaR#GrAqY');
define('LOGGED_IN_SALT',   '!b^9ewbHK:0>5Q;<O?$3!]yrtjW;d4YLUYH$<$13d[x+r*-/_i.eB_f#~6:@w?&H');
define('NONCE_SALT',       '$+, #I]cf?=Lj4yHw;PR3vD+w/Th(|Xi99h/<~J?}H?_H$Lx9V_AUXWN.3$UyBIK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2k17pml';

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
