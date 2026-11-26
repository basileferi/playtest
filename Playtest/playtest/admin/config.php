<?php

// Database connection settings.
// Real credentials live in admin/config.local.php, which exists only on the server (or on your
// machine) and is never committed. It must define DB_HOST, DB_NAME, DB_USER and DB_PASSWORD.
$localConfig = __DIR__ . '/config.local.php';
if (is_file($localConfig)) {
    require $localConfig;
}

define("DB", sprintf(
    "mysql:host=%s;dbname=%s;charset=utf8mb4",
    defined('DB_HOST') ? DB_HOST : 'localhost',
    defined('DB_NAME') ? DB_NAME : 'playtest'
));
define("USER", defined('DB_USER') ? DB_USER : 'root');
define("PWD", defined('DB_PASSWORD') ? DB_PASSWORD : '');
