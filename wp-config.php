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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '121-west' );

/** MySQL database username */
define( 'DB_USER', 'cesco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'asd123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3wGM9q`$JcP]h3@i%=YQ6{N~@F*H/td-Pms[bQwN<;CezK}|O@6i!6<)MJD|G*Nw');
define('SECURE_AUTH_KEY',  'tK&M}9`2H]$a%.C3vB?m]+[O.i;2$~)6_e)a;=f:h#!_$e*W0<-bMWi{(%r#~/P<');
define('LOGGED_IN_KEY',    'm>FT}@/6!)_bRl1v  &-|Cw`?BbZV*<wuQ-Wjv,>U_:YGqQrGdLHm=]|5byl48G:');
define('NONCE_KEY',        'AerU9|1F&7i+<O.^4_KdRR?W@4OvY R#i3bCjIDp[xtmskY@cpH7w{=y%:pxsg`/');
define('AUTH_SALT',        'L*0S,s},-$F!ebAQ~$J{<6h2qY{r8rI8Q{dkTL-#Fo.{OF-t$tK?2qa$ %:0R)v_');
define('SECURE_AUTH_SALT', '8iv9d<)fKC:,oc1n=y#l|{fdkhRt-l%$O< XcPMQIV{WrKJo*Nl{6n6X.WO>.{7w');
define('LOGGED_IN_SALT',   'F50`);XF]5J%`DZ!f1C)l?qvqZMl!|bPj><hO(m d|ihQ@<6LqP-i(2yHyCPdH!Z');
define('NONCE_SALT',       'v>T9y(-lqS4Dek)KGRXe8QumK_{ah>Q+LySbS8aA bmBch,EUl6}/;}<3z`@fyaj');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cf9_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
