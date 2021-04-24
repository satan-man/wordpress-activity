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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qBptEcZ%)>a$a4rnPi0wdgzZEcoZ/z=s=^@%L?W.f,A{E%V>*!LfAOmjz?7Pnf9A' );
define( 'SECURE_AUTH_KEY',  'Ybx08E^rlf(v~@8gg:]%t<+k-{&b<_+Uw|:Mb #&+9qvaCDATgTd2K5!nc*OUjNT' );
define( 'LOGGED_IN_KEY',    'kC m;>$3q{(4=<:c$lXP*Oixp<l]e[<|VQDgG0@K<7yyO<:=bPQ:u%-[U/QTI0iC' );
define( 'NONCE_KEY',        'n,[(V@,JagETA.<$Rj{VS%+!4NG!BR!KD*@tE~F9fED%}|re=&axUtz#yQWMIm=K' );
define( 'AUTH_SALT',        'NjT#WZd1qczXo>Qd5gZ5AidePX?Tg Bo+6b[da:J$Zj.|(4J.y K+N%}r{ISFl~i' );
define( 'SECURE_AUTH_SALT', 'jN5dxm U2;FGNw0ZFJwO$~2LRCrnc2!jIaT-aTETYJu<[cPg&Qcc<3(hU=[6d7&D' );
define( 'LOGGED_IN_SALT',   'X8S3^`1X4oi-EHU#._^X7~$,c>KmO`V{%Bb[g1^:f.6yQ3+c8}&H,Stdq?Yop#kQ' );
define( 'NONCE_SALT',       '(dq9)w?6.H~EQUFfqf* 9x8NmwK$IkJtgB)jM{_}[I+{p@r^X/xe9j-/{82a@6<c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
