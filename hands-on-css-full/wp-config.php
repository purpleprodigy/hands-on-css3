<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', '3585624991bdf29752055450e8ff922c');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', '85c6c99f02aca5ea6d7f12c3f03cf1e29d3cc8baeb168583775edeac1cc03ec8');
define('AUTH_SALT', 'ec3aaf73c15bedca4c617e74df56197798a71b8556924c853351a0d153294b49');
define('AUTH_KEY', '85c6c99f02aca5ea6d7f12c3f03cf1e29d3cc8baeb168583775edeac1cc03ec8');
define('AUTH_SALT', 'ec3aaf73c15bedca4c617e74df56197798a71b8556924c853351a0d153294b49');
define('LOGGED_IN_KEY', '0d0f904bdd08794170596b46b42dc89d530c779ac036eb240cabe1c0fc164d07');
define('LOGGED_IN_SALT', '38305a37343d814f323b0a4a005e2bac9ff8abcebe055032fbb3cacb98339661');
define('NONCE_KEY', '0e265621f4c4613edf02187636889e5cc34c66316b8cfe480a32d7314ca85265');
define('NONCE_SALT', '5186d3f44cb0a895e83012f1dd510879916f85d62726a4207eb7361c519b62bf');

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