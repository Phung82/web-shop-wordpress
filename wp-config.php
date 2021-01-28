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
define( 'DB_NAME', 'sb' );

/** MySQL database username */
define( 'DB_USER', 'SB' );

/** MySQL database password */
define( 'DB_PASSWORD', '0802Sm@llBird' );

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
define( 'AUTH_KEY',         ';4ffsy>#F9tn 4;ma%KAm=GeiGX5v+C,|nI4A_d;A8[AwBSd([Gy71 |X{re4Ujn' );
define( 'SECURE_AUTH_KEY',  'CC4HO=,l5DX8@+<lzVM>opo%B:Xc;:RI{8AgpI>IB/[Bd{nD-DS*NbBq%Zarl3`%' );
define( 'LOGGED_IN_KEY',    'V5w@;VGn:gBYFP#z+R+R7jB6(#]ySb.o_5Tl3JObbKN5zYt]MoV_~?,MUI m(8z=' );
define( 'NONCE_KEY',        '^qjWq^@kFUv/Y-)@SNkYH~V0f2*C^hN$0I%%t4fN*0dJgxJY|V1.SSh{dNgJ~Xkp' );
define( 'AUTH_SALT',        '}(^+ITyZL_[*AKg!77*Q H;H}H%lsc`eB)W4=$D%,,_CC,+hZk|s1Ki#5s}Uq _W' );
define( 'SECURE_AUTH_SALT', '&?w(_!`-&4V@NSHPg-ryDmSMH^6nEhupmd9Cq>C=a><s+>llQ{&r<z@f(R1}MQ+t' );
define( 'LOGGED_IN_SALT',   ' >r*A(q4k&r^ab`46&<?0%`D00>eTKtMTR5`JJC)fZku}V2f1~!VCJDC}4;[DL54' );
define( 'NONCE_SALT',       '>rHHj<h?6#L$z|3`rt=2>$8QhtEzr^S[kj38.MAtxAT58}pyB+wv $ Lvl2+pE.F' );

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
