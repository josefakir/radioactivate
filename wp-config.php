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
define('DB_NAME', 'radioactivate');

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
define('AUTH_KEY',         'O[aEI 1kr_mG1&2i&f#whJ0R8M}$t],~Ey8oq(]O0H$<x}<4tdD=0`Xv,Lz;hnt;');
define('SECURE_AUTH_KEY',  'FZO+>]9>8G:Vc9,}+/L<e$BW,22$kM5$~:9,-TiG*Hf?1ji.6p~sNR=/8&i;5E=9');
define('LOGGED_IN_KEY',    '=Tz)fNgZv(G1u`Q@`]?0&Q6_?_w6s3E7,&s#E#tM|jd/13>wA.POo4/-ReO]> 60');
define('NONCE_KEY',        'D/>b/[S@A T4K%ar;wtWeX*s_T`nC!japO?hHB=s)#O<Y?TjV-!z,Agvu~]}PL*V');
define('AUTH_SALT',        ',?Z:NJ}#+R&}K&h&azgNnS)pVO}BEA Fezv`*Q!%Ji>U@t$^/,R#=*6CGp-]2N[5');
define('SECURE_AUTH_SALT', 'bIMUXj2_`_Gq?jOS`a~:&ezPl~WEYeA&|j+8N~HXsSk^5cVo*Vm_:aIYXEE=G^9i');
define('LOGGED_IN_SALT',   '2mQJJQG2-d m?n3,SAj3oitlbs`/:fAx=-B1cjxF$J7{<XV;/GW*fGS%uU@th`JE');
define('NONCE_SALT',       '4c|y,#r.Asd>$1E`3a{opL}/^RTnudbiwvPz6y6Lg.<[8BRK*q3PW o!% Isi5:|');

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
