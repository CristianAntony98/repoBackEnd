<?php

use App\Controllers\CategoriaController;
use App\Controllers\PantallaController;
use App\Controllers\DiscoController;
use App\Controllers\EmpleadoController;
use App\Controllers\EquipoController;
use App\Controllers\MarcaController;
use App\Controllers\RamController;
use App\Controllers\SedeController;
use App\Controllers\ServicesController;
use App\Controllers\UbicacionController;
use App\Controllers\UsuarioController;
use App\Controllers\ViewsController;

$router->get("/", [ViewsController::class, "dash"]);
$router->get('/devices', [ViewsController::class, "devices"]);
$router->get('/services', [ServicesController::class, "index"]);
$router->get('/get/service/:id', [ServicesController::class, 'service']);
$router->get('/get/users', [UsuarioController::class, 'index']);
$router->get('/stock', [EquipoController::class, 'inStock']);
$router->get('/filter/serv/:state/:priori', [ServicesController::class, 'filter']);
    
$router->post('/device', [EquipoController::class, 'add']);
$router->post('/services', [ServicesController::class, 'add']);

$router->group('/get', [
    ['/devices', [EquipoController::class, 'index'], 'get'],
    ['/stock', [EquipoController::class, 'inStock'], 'get'],
    ['/asign', [EquipoController::class, 'asign'], 'get'],
    ['/marca', [MarcaController::class, 'index'], 'get'],
    ['/disco', [DiscoController::class, 'index'], 'get'],
    ['/ram', [RamController::class, 'index'], 'get'],
    ['/pantalla', [PantallaController::class, 'index'], 'get'],
    ['/categoria', [CategoriaController::class, 'index'], 'get'],
    ['/empleado', [EmpleadoController::class, 'index'], 'get'],
    ['/sede', [SedeController::class, 'index'], 'get'],
    ['/equipo/:id', [EquipoController::class, 'find'], 'get'],
    ['/empleado/:id', [EmpleadoController::class, 'find'], 'get'],
    ['/emp/:data', [EmpleadoController::class, 'search'], 'get'],
    ['/eq/:data', [EquipoController::class, 'search'], 'get'],
    ['/sede/:id', [SedeController::class, 'find'], 'get'],
    ['/ubicacion/:id', [UbicacionController::class, 'find'], 'get'],
]);

$router->group('/del', [
    ['/equipo/:id', [EquipoController::class, 'delete'], 'post']
]);

$router->group('/up', [
    ['/equipo/:id', [EquipoController::class, 'update'], 'post'],
    ['/change/:id', [EquipoController::class, 'changeEmp'], 'post'],
    ['/change/state/:id', [ServicesController::class, 'changeState'], 'post'],
    ['/change/support/:id', [ServicesController::class, 'changeUser'], 'post'],
]);
