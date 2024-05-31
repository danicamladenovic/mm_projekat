<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'cypWUFApQmU0YlIyIGI5ZlEme04+Pk81OTBEN3EkMEomd0ZCIElvPzJFXTNmcUh3RFJeNkQ0KjhiYHIwRjddcw==' );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wprojekat' );

/** Database username */
define( 'DB_USER', 'danica' );

/** Database password */
define( 'DB_PASSWORD', 'danica' );

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
define( 'AUTH_KEY',         '4~]bTTKR>_J2?{2aURUmLg|2Vc:fy67RDaEZJGREE)UCPR~WWTkK)xO,S{mtV7KQ' );
define( 'SECURE_AUTH_KEY',  'wwM^[YU`0/ARwb$1>*aM4%i8~.0xzNN~%hO}TpUrIX#F3f?6}41<;h&Cje1J.*g2' );
define( 'LOGGED_IN_KEY',    ')1) *H{6)[m0BO@fdZb2 S&Ebsna6~N]BUVkQmK2^$-=Qv~YfBmnp|pD_N%8;6Xn' );
define( 'NONCE_KEY',        '8|q5j_E]cB*96aamB:ADCTz hX0MW0SZU1qBWBEh!6v47P`.DRf=sZG)`)oBUPyp' );
define( 'AUTH_SALT',        'Y[`E3m|EH@5xGO.>LY33MybDcJCt{nMi$Lm._?]x7YHK`/0`19MZ2g(mrK0E1Z0=' );
define( 'SECURE_AUTH_SALT', 'e6 1P;<KU&:eFoLN[9Nuo^4bT8KqlNhG.{8mcB6]8a@A@UcHg>;+%{pW{a[p_`e@' );
define( 'LOGGED_IN_SALT',   'iK0aW<ZAR7myih_D3BlBTK^E]tTyT%,v:m ]Ob~h^u/9I9KXvk)ck.Q],R2fm9cA' );
define( 'NONCE_SALT',       '+@p~9FCNUU4*<|j)Rb>WM65,QR.-|fN?fFK=dz]>-jvdGQqgMy>yZlp8K/NIi@ra' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
