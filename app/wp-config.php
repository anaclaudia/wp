<?php
# Database Configuration
define( 'DB_NAME', 'wp_anaoliveira' );
define( 'DB_USER', 'anaoliveira' );
define( 'DB_PASSWORD', 'A8T4z4iGWbIB1BsqemVP' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'ag?ECk^5EFchCjz+2t%)cz12JHCCGD,A}b]]ryFwEP<ZvimXn32E3R`VEq5.Zgik');
define('SECURE_AUTH_KEY',  'mPF:#VZwxcKfm 4|SRSr{^^[*y-F.k1s]:9{xd+<|y-H}*C.*s?@_kKT-`wvL<Q_');
define('LOGGED_IN_KEY',    '#115SO{3@IFlK]I5//3*hDAT-49|C~5}Xfsu0lu,nHnBp*K,{w,[E T1q.cg[k|C');
define('NONCE_KEY',        '!i-<KdgQ$U!OUV+a0W eamuS-bxyeVklLQBK7|3VCjf-@[?H+D8y*J26Fu#y2Uc2');
define('AUTH_SALT',        'wd/oHdDsbFT*^tKr?3zH6*H|3b;X?+oHTLDWQ]VMXR,*_ka4xd({xd5-IC=zM2sW');
define('SECURE_AUTH_SALT', 'Y1@-l0{ugc-TfQM!aYWLut:c^j<rYLM>Qk&_tt%$YJx`!:A#LBqS;;>#8L5 `)}n');
define('LOGGED_IN_SALT',   ',;<8m8zqb%r@yYjK.am%6H &qZq+eC;8Hq/mdq-r+AU|E-U40I9Y*(*/aUWNgR2-');
define('NONCE_SALT',       '/pa<%{:`r}-RLp#ob4p<*]:[:nMLxT*y-L6G_-;xC3[N.H8+s-1ab_si unn4u*K');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'anaoliveira' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '236dde8d1af65a24a155e9e4c189eb25561f62e4' );

define( 'WPE_CLUSTER_ID', '120106' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'anaoliveira.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120106', );

$wpe_special_ips=array ( 0 => '35.185.239.152', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
