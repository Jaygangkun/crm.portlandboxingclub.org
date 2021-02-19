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
define('DB_NAME', 'portland_wordpress');

/** MySQL database username */
define('DB_USER', 'portland');

/** MySQL database password */
define('DB_PASSWORD', '2MPA79BX');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'y+zSLqZ;%wt!sQUOC;KuI*lm@ke&CF[]/Gi=>fAi)bSTMU=)=%@No%tDbx?NfNc%z|XE_kJS;cj=rzKQm)&f!]=DqExxH%?km)Js|%DYKK%Dje*t!%O(tCce%mMp>ig$');
define('SECURE_AUTH_KEY', 'TWKg&g?E){D!**NoSAbZa;vuu]]=BMU}Mtu=$+N^=$JeMuTwxYh]AdF;]o;IN_XYO@h!&lFPIowMiNSO?MIESEuNxnxK@XT}D}D/!j}z(%okKoeZ)ZAVMKn(;^!jx@aj');
define('LOGGED_IN_KEY', 'J{G_-Pg/QLecrmjgjjvwl[gSjUCKw<xB;XbTErb[bJg?!!Nf-wy/>=(>Voo$GG<RA<tDmCE_(CedCWQ?ynRBP/Js}bANfcU)yRbJQKqD&jxDnsXzUcQxkH(%/D-Nq!Am');
define('NONCE_KEY', '|{[LPXZAXAtj[U^@vx>gT!LIKe/>-z|HaQodJT(+ft+Q|>CIU>vugp&qw/FBzZ&j]x}[!Gp?Aclc%<lxTfop=jTiYnbc>?PCmBG%Eo<s=FRzfUZ&ekw_^ar)tyzk(>)B');
define('AUTH_SALT', '<RV+Z$uT]suaP_}oA>jVbHsFug[ybDWkXm**qWMPhs%&E/sDh<EXKSI]*ZkBs(+QTei$YJ=goPM/rk<DKxqNv/fuhH%do)AaCNSfmkuOtv]Jd+Q^Ct}+i[s[NNl=zd+>');
define('SECURE_AUTH_SALT', 'sSo-W@pZW&(Jr!yw=-Ofet$nZdF$aKn&<hRiaocC)||=B+q$VYSW(<Xr>p]|Exo?@hU<oB[gbA(ma@v)ia/OBJ}tDc@]WQOPIQnAgkAw%m*|{ZTB}TUopC^@|aesGqqo');
define('LOGGED_IN_SALT', 'WDi?%]FfhFUkD@-<qA=]$Gsl|{}ufg%Jp>?+&jtNy_u;KS^d}U)F$T%$a@N/[c(xr)KG-+d=c--vyKM}Nrg!YDn&j-u@(W>RU]HcsB>Xyz/LNuY$iB^VXD-n;Rpc<QSe');
define('NONCE_SALT', 'l$Fzi(yr&Bc;YQEF<>!Pklalbq^^W[o[Xw*;MX$%DA^z+NJhu!JM@B^=Uj^gY(jWKIz+[OAh_k]WsRsa;nTNQvG&&wVX>vv;^^^u$JCGSs%ojQqxQeTingdpjHTe+aAv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fcaz_';

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
