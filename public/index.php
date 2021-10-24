<?php
date_default_timezone_set("America/Mexico_City");
define("DS", "/");

require '../vendor/autoload.php';
require_once './../Config/Autoload.php';
header('ACCESS_CONTROL_ALLOW_ORIGIN: *');

Autoload::run();

use Dotenv\Dotenv;

$env = Dotenv::createImmutable("../");
$env->load();

use Config\Router;

$router = new Router();
require_once './../Router/api.php';

try {
    $router ->run();
} catch (Exception $e) {
    echo $e->getMessage();
}