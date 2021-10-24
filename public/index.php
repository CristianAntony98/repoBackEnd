<?php
date_default_timezone_set("America/Mexico_City");
define("DS", "/");

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

require '../vendor/autoload.php';
require_once './../Config/Autoload.php';

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