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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         ']VQAWf?6Q0zPe*k7D/U}!i+4blK6f<-2V4{a(4h3k^#G,>p.+k+.V2tWG;.F]:yN');
define('SECURE_AUTH_KEY',  '!rzrm8f@4TvLz}(FwzG~hk3l8NUa,dDIRRmh4SC|s{A;z`;e!crVrVO[KccY}elC');
define('LOGGED_IN_KEY',    'W-q^jU7h5U H~@Q?LoipzjdkmxQ^+DB/4xKgLICAvG<8r[:(*$8n%?Ae*_/W0ESE');
define('NONCE_KEY',        '1o.+H#_(S3G7sH4W..yrrczpyZ/(2/f(3dn*i68am^v<<.}>IzoBxR}Y5+2:BSsa');
define('AUTH_SALT',        'P<-_]~0 C80~+}|+GEV*8Y&v9.jd&vMg>&gl*(rMd-]oDW3Uw^@MXmoJ9N;ZS2&r');
define('SECURE_AUTH_SALT', '&PS+0+55Lb=:wHxOVZMTW]gt5^ dVd;,S)C^a;+y#B<N7ma +M!>dg@JMU*#)W{E');
define('LOGGED_IN_SALT',   '~DeDK1us`T@*(g+?&1ul4~rur!/Q5+Kc Pvg,!dM;PM,a0&nEW1eY`YI?&zoXw|*');
define('NONCE_SALT',       'j<,SFaQZQt;M84]6{_]?rS`.46xm_nJ%r][pcHsU3le$5IYLbPDS06Ex#;@$vgV(');

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
