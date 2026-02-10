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
define( 'DB_NAME', 'wp_old' );

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
define( 'AUTH_KEY',         'G8W=ZG_q7G]x|8`s~7XECyH[:cDX3#:$<sa`%@lu[r4,$%9r ~ajl_yKh%Ods59p' );
define( 'SECURE_AUTH_KEY',  '?zn*yU}-nY4=^Eso}w)zRdaGwR@d5Abzw6AWk&M?/&fOi%#taD:?(@Aga^#Y1[dT' );
define( 'LOGGED_IN_KEY',    'w`C;>c-2ZHf|*1GeTWJPa@#z`v17,%Ab&nXA#>pMBq}hagt=(zOdt]Gw/G9N;]a`' );
define( 'NONCE_KEY',        'bzuK8jHujv:#O=wRC7nKH~k]fU2bDH)jq >xjllwD&KsT7_d1d#tma@/G%~KNA@p' );
define( 'AUTH_SALT',        '(.{3Zv8B[9Y(zyf31ICPx4dTh.L^&p&YRDV9EHUi)66ekyq!H`AdJ}{/z%Is!TcS' );
define( 'SECURE_AUTH_SALT', 'TVtqpG:W9gTK@pP`76|L.u};Y1LNmVy^s!yDpn g||>-:ulRT$C+XH<L*57)HfP0' );
define( 'LOGGED_IN_SALT',   'p8.X]KjGt.}OD]$r-wCdOh~d@NA}6=Fx8H*N28k~ynVnL#GmY>$0zh7!N.Btllnz' );
define( 'NONCE_SALT',       'M?9_j@6.K8nO%#u+PaQRp1>e2ycg=W#@e/TvYA1jI>@1}E#~(^WQp;eoQwgiNX7v' );

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
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_MEMORY_LIMIT', '512M' );
require_once ABSPATH . 'wp-settings.php';
