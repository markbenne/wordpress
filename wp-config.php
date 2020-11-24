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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwerty@123' );

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
define( 'AUTH_KEY',         '=O@.u$hj>[?*VhSg 1>/ pLY1,P0XL5(Xj`<^+rF~mo:S]Zr,.2Vcqd.IB0|uP2J' );
define( 'SECURE_AUTH_KEY',  'p.uY]K%hmdGUyWTUU?K|8SbC[*00l<;md;H`TD4(jw8;RG?S-#j=yftK{TeCq|5A' );
define( 'LOGGED_IN_KEY',    'njGoegz{?}8`Q`A|5uwgyDYw8n}iA67-#y5!^6a^<n9?hq#N`@B.H,8YY(yR@%%B' );
define( 'NONCE_KEY',        'V|{FU#Y7d&c|OC( #86Bk$}4VDR|.aD/ZE6&-u|a5-d#f;;!lSc1v%@)m%Hy,!fg' );
define( 'AUTH_SALT',        ':{hZc]k^J{,PkbPvM0zAo:HuKy>jc]<H9Dw:nhUS7U)r*^3vRdhN:DfM*6rVS>Vs' );
define( 'SECURE_AUTH_SALT', '{P6eHST tW BOo>m7gPM@X$9[EvDq/XPavC+iN@,?sKQ9;P@6SA8zid9%^.}Nq;a' );
define( 'LOGGED_IN_SALT',   'ZP*hM[ncUFw1Ecp}_4vOHN]YGS|c/WB,-]40fwmEM dOHcIVrHmg(s.U$Zo7X_7~' );
define( 'NONCE_SALT',       ',DDH0-S13+?IX*2h{PZ)s`FV:Im-SWrW$Cw6t7K%j(5YqY%Q=rj`i~|83^yk=F}9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
