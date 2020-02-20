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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         '`zO6m}YN]V$Ka5*/!Q9X=n(KJX<L?NH+|pPd]>`7Qo{S>^YK.}+1qohE+LM2zhCo' );

define( 'SECURE_AUTH_KEY',  '6Y|;h)h9`AV]%Iz-Km_hrQ462%4g8!*5=qTGo32c&(E1w-lDC514Z(c>EzwV5VLE' );

define( 'LOGGED_IN_KEY',    'DF61i0i?QYxGC`u5LmGrui|c57uDu>A$|1t(_oT}nIW0>Wb=dv;2HQ<Zk/dIJ:i4' );

define( 'NONCE_KEY',        '{YX.AB+p=a{;V~T9SRTZo/V&SJx{rUO5TeZN}AnPN]aWj596vPWA9w$V}xXTep,@' );

define( 'AUTH_SALT',        'c(l9&w;K|l#Ze_+K#GH 3l9:[v@%,1t^ D7=!1IVDvF&B,<IRvEe,Z@A_dNHq^D}' );

define( 'SECURE_AUTH_SALT', 'FzIv6`lx@UeNLVbJlty,:}r5J r_4sw_*vO+t7[Fb:yBjHr%wmpCbjh|H3UL_bJ=' );

define( 'LOGGED_IN_SALT',   'lY h5SO{a)*[e>,N^&k[wJ@lI55r&4]g}CVmS/rC0nd!@1G44..h<o8Ra3(jR;aL' );

define( 'NONCE_SALT',       '!/(XiKbvu&0m3;8ZR[0bi[`d]y>[gSlKquG?]m+8b}G@+il[HY~h;y03:Km6<KKA' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

