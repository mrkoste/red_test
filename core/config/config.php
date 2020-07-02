<?php
// Database setting
$database_charset = 'utf8';
$database_host = '148.251.139.209';
$database_name = 'tasks';
$database_user = 'tasks';
$database_password = 'IPs7m2ecl1';

if (!defined('PROJECT_BASE_PATH')) {
    define('PROJECT_BASE_PATH', strtr(realpath(dirname(dirname(dirname(__FILE__)))), '\\', '/') . '/');
}

if (!defined('PROJECT_CORE_PATH')) {
    define('PROJECT_CORE_PATH', PROJECT_BASE_PATH . 'core/');
}

if (!defined('PROJECT_TEMPLATES_PATH')) {
    define('PROJECT_TEMPLATES_PATH', PROJECT_CORE_PATH . 'templates/');
}

if (!defined('PROJECT_CACHE_PATH')) {
    define('PROJECT_CACHE_PATH', PROJECT_CORE_PATH . 'cache/');
}

if (!defined('PROJECT_FENOM_OPTIONS')) {
    define('PROJECT_FENOM_OPTIONS', \Fenom::AUTO_RELOAD | \Fenom::FORCE_VERIFY);
}
