<?php
require_once __DIR__ . '/vendor/autoload.php';
define('APP_ROOT', dirname(__FILE__));

new \App\Routs\Router($_REQUEST);

