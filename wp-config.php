<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-5=OK<-DclkYc,&f]-=I<wp-e|QAzi8rAX$TvC#a!-BIHrA}sNz:b:lL37`cMUf$');
define('SECURE_AUTH_KEY',  './q3:5#`mN;I`EQV$}]Y;7.AQ0BeQ/f9F29,HpVpNI2l~&~$95sE}nh,z^?p6I=U');
define('LOGGED_IN_KEY',    '#aa,RkkGmuDAT$lxz}Gm-*W]W)c>!`#x63}oZ=ZU~j-,dH|p0#7Pox9;kR28>#@U');
define('NONCE_KEY',        '~SaeH>!,kha[[Fqf3&/sey<BC`1JC@;JlDrkFlyw>}r6DwiS@c;UcEnjM}cyv6|I');
define('AUTH_SALT',        'p&bzI+YlrO-)];UVuF4 ouYhVT:Zges#`NRs|ix =Q&- ]{&vxbce.:uEN+1foZL');
define('SECURE_AUTH_SALT', '0n%KtalVoVsun?[):uNQ~B}AXaw8oMpRX u^8JV]Alu8`7cz9!lSH0JtS-^e_NE4');
define('LOGGED_IN_SALT',   'P7r]jNF+.C73lnY*/B|7{*`+#8:MkN1!=>=hE`W:%v1ikW4/4Pb;%HE*d]y2,{93');
define('NONCE_SALT',       'RI|,4E<y <.IM5;P|v_KG7K ,3^.vtz|XT$^3Y<~nS^?,v1U*ptdap8h7=1>5g+5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shopcc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
