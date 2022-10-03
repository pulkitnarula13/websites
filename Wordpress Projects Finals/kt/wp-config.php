<?php
define( 'WP_CACHE', true );















/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

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

define( 'DB_NAME', "quarlruh_portfolio_kt" );


/** MySQL database username */

define( 'DB_USER', "quarlruh" );


/** MySQL database password */

define( 'DB_PASSWORD', "EMuPd72ZClLJ" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '/&{rL^_@8$D~^tq/GIGZ{9{c$Z4C|DnE,2.1H)uP% /7)N1[|t$~Kg7+:>oS>~`o' );

define( 'SECURE_AUTH_KEY',  'S}ZXgU@Zbjjta|0;FW_/zl/FXx/27*-_+07Q<_aMJA.Z+P^2jeka!J/8]qq=%PUB' );

define( 'LOGGED_IN_KEY',    '@A/RjtPrF+Js>(}*p2%W|efm::R7}OP=F^hmLh-bkENU_AzZ`__6v::j `s_0x*U' );

define( 'NONCE_KEY',        '|A,}#@96@QWNxYSd|@0H1e~S|.Gax11i+@sOrz?8f<i;07PT,aYLpOqsLg #9~Dh' );

define( 'AUTH_SALT',        'K:.3ab5`b9)jSrl_0JSazip%F PHTn)67md8s/n1H.{;`lSs6p-3neQ^9bq $LiS' );

define( 'SECURE_AUTH_SALT', '|%] f$5h*>TPw~G<sHf^h%GdC5,G1N?:m>[Z>!P[yw?$6+[^dVj%My&|O3nfp9gQ' );

define( 'LOGGED_IN_SALT',   '5F`@S#Xpz%CG{SRl]#25JVGt,Iog9yxOc/.VZ2aN^Y0LUkF*YHR*_zjMaQmw7Ty~' );

define( 'NONCE_SALT',       ',5R~uFO&NvW0%@eVx0+x6?|4,M%iG9Ini2G$<[<Fq9Fm=H+6NbNbcN($#Lo4!hB`' );


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

