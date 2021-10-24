<?php
date_default_timezone_set("America/Mexico_City");
define("DS", "/");

require '../vendor/autoload.php';
require_once './../Config/Autoload.php';
header('Access-Control-Allow_Origin: *');

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