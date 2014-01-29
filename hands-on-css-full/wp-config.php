<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', '3ee1504a19541e842c31ca621a8f5a7d');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', '8ad6d16c515bc58f913b71f9ede2d83c969cb00aaa3d4f3fe07125427bc15545');
define('AUTH_SALT', '16f92af3055aa3c7928e59bba925183f1dbc76350a0f2f2bc901b6f4f00d2d54');
define('AUTH_KEY', '8ad6d16c515bc58f913b71f9ede2d83c969cb00aaa3d4f3fe07125427bc15545');
define('AUTH_SALT', '16f92af3055aa3c7928e59bba925183f1dbc76350a0f2f2bc901b6f4f00d2d54');
define('LOGGED_IN_KEY', 'a2ecd468b11671dfee7bd921fbc617eb6267a54c8b023bcc622a7cf99078ffcd');
define('LOGGED_IN_SALT', 'bfa875a48cb1ffc2717c071e38111ce93cff7c04743b20312157740f53f94e11');
define('NONCE_KEY', 'ac11c439f5e53f51ef4077af1204c1ca6f2b8ef70d56c980da62adea50bc858b');
define('NONCE_SALT', '4c48374865ca20c4b294b881ed1381b9f6ede6d816aa1993282a6edae6bb9498');

$table_prefix  = 'handson20131111_';

// WordPress Localized Language, defaults to English.
define ('WPLANG', '');

// WordPress debugging mode (for developers).
define('WP_DEBUG', false);

// Single-Site (serves any hostname)
// For Multi-Site, see: http://www.turnkeylinux.org/docs/wordpress/multisite
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
