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
define('DB_NAME', 'previewm_steel');

/** MySQL database username */
define('DB_USER', 'previewm_steel');

/** MySQL database password */
define('DB_PASSWORD', 'GcfAkchTtl64');

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
define('AUTH_KEY',         'SfBUl}_QJim+yc;Dn$)^C[6*7KwIHDm8SPizjhf#%~HV}a05XmVSsY M6k__F,pA');
define('SECURE_AUTH_KEY',  'mt}SY^&>?F`VHQ;vY}G=AeW-Tfn5Y`;F%*tPA,&OaM9m&}5$7H1|iGXRS-xOR?)}');
define('LOGGED_IN_KEY',    '#j?|mx$wi.gg`lt?[ZotofQm0We5f]Oc PQ[s|}<yB}x77NSj=wr]:g+I^:Kv9Nv');
define('NONCE_KEY',        '&c@+K`KTT.GML$,]}Vp3i8tgEIz*E)*DHb[:%6Xl!Z#!O<vklAX.ZNSE{|@KBgRK');
define('AUTH_SALT',        'X2GWL!:b8nsUpLcZ2^sgfqT+vFj|!Pz>hB@9JEE%5- +XqaHg9&Ldq]uk)Q QSHB');
define('SECURE_AUTH_SALT', 'o`buaF%7qU$5l]n9pUo {+e153X%7p;a*gGcCtC9|EUV|m]JkTx4LJJqYPDJ|h=[');
define('LOGGED_IN_SALT',   'eNn5zzY):N-:RV2~s8)2`o@GHl4 :[gx{+r&r%Zns8(TB%<8xK3B.b<:,=m7<%$<');
define('NONCE_SALT',       'zgwACwTb/f8S|1K>.C$:r@f >Ey&GQ|{McGX7fx`xgq;p=}Q~v;WrKC+<54G*zzg');

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
