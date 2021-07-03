<?php
define( 'DB_NAME', 'sverkart' );
define( 'DB_USER', 'sverkart' );
define( 'DB_PASSWORD', 'sverkart' );
define( 'DB_HOST', 'mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.101:5050' );
define( 'WP_SITEURL', 'http://192.168.99.101:5050' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '#`+-9XG^v|;:mc@K,+fcOS+/EJBsIaD=VP sz4IkURp][C|OGK_lBaACthG^c):n');
define('SECURE_AUTH_KEY',  '$:4_?U0I)Wz.y`YKlKGm7K1kTR@8-[!D9^z/2VYC+&07.Z)A|kz?:!=Y%S-gq[I&');
define('LOGGED_IN_KEY',    '#4*E|>GB2o1S({v5{^[;Z<fE(+>|;Sx`;IiE~dV5nUCJ9+[>+7wY.D-X|vhtEnRl');
define('NONCE_KEY',        '}B2w RVThCStq<]Y%?cs^(V)CC%>`I2BZY734dRQ@xzG*(!_ik|,]@iakr*)V],T');
define('AUTH_SALT',        'YN|,qLM|<-0S216p?Tn-B$kMQbfk0yI@C:8SNz[(/Ty?N3Ad|@N6G`;hg+)_>[w5');
define('SECURE_AUTH_SALT', '!KJXt-d*Lv;I$e3ca)9PWkJ7hFp^jXI&i+vm %J0+trhVj0[B/N$FFzM}:Iu{Y>H');
define('LOGGED_IN_SALT',   'pM,G1IB>=B-nP 5Gb#1suEk3|~=3V*YD&L+D!hkS-,DZEB9}W)U-M^;9s{oW(j}`');
define('NONCE_SALT',       'rO~$|m|Fad42<+VU|~u^r>/PY7)0NchJW]2Lc|O+:j[/qG<#GT8KH(5~`K170[:&');

$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';