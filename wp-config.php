<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myfirstbase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ySDJ6>a{Z<m/y2,l}Qm0THy,0X;nrrUStz|3_wY1f%BFypPB#d,^e>#80b`T}V4t' );
define( 'SECURE_AUTH_KEY',  ';{=J`iCl}`)7_GY5t{Z>`&_+-LrE(mV%FV~>=Tq|C7l|U6S8RroMs~R,4ShL|Rl7' );
define( 'LOGGED_IN_KEY',    'NQ=poQk*)[#2>[9QK.K]@+7 -g<C60!qXG@vN$[r?W]?ZfTZ PAHCG>2GpM]u!rJ' );
define( 'NONCE_KEY',        'eZu@tW7r0=!@~>)qF%HBZ[7cN:/%,=g/1@b!/:mE#9-u!~?+D6HXYJLj -(nGO&o' );
define( 'AUTH_SALT',        'V/KtikLMSjdK[(lV(2O%6]_s(!lcn^}S|O{!P.7$}5}LinYf}3&kIy|&obaT4fJZ' );
define( 'SECURE_AUTH_SALT', 'ufDWE#R1E3gAKAN aY^Av/;TH2IW(Jq8qH!i=Sw9x1AW.R$gdouCnyrHS][[Krt=' );
define( 'LOGGED_IN_SALT',   'ksEz3i(=;iL+xIUcm[myZ?Awp)7Src2L4eRX+:{YbHHaaIMq-!Luw(smIg*/R$Sk' );
define( 'NONCE_SALT',       'gwC?FGabO5LG{?OwR&`m:HTI5p+H;I)/1Shw/6O=-akPy8]J|UL,)6nv@IY6Kq4,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
