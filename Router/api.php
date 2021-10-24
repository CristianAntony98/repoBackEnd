<?php

use App\Controllers\MarcaController;
use App\Controllers\CategoriaController;
use App\Controllers\RamController;
use App\Controllers\DiscoController;
use App\Controllers\PantallaController;
use App\Controllers\UbicacionController;
use App\Controllers\SedeController;
use App\Controllers\RolController;
use App\Controllers\AplicacionController;
use App\Controllers\ArchivoController;
use App\Controllers\UsuarioController;
use App\Controllers\EquipoController;
use App\Controllers\HistorialController;
use App\Controllers\EmpleadoController;
use App\Controllers\ServicesController;
use App\Controllers\InstallationController;
use App\Controllers\MovementsController;

$router->get('/mark', [MarcaController::class, 'index']);
$router->get('/category', [CategoriaController::class, 'index']);
$router->get('/ram', [RamController::class, 'index']);
$router->get('/disk', [DiscoController::class, 'index']);
$router->get('/screen', [PantallaController::class, 'index']);
$router->get('/location', [UbicacionController::class, 'index']);
$router->get('/seat', [SedeController::class, 'index']);
$router->get('/role', [RolController::class, 'index']);
$router->get('/app', [AplicacionController::class, 'index']);
$router->get('/file', [ArchivoController::class, 'index']);
$router->get('/device', [EquipoController::class, 'index']);
$router->get('/record', [HistorialController::class, 'index']);
$router->get('/employee', [EmpleadoController::class, 'index']);
$router->get('/service', [ServicesController::class, 'index']);
$router->get('/installation', [InstallationController::class, 'index']);
$router->get('/move', [MovementsController::class, 'index']);

$router->get('/mark/:id', [MarcaController::class, 'show']);
$router->get('/category/:id', [CategoriaController::class, 'show']);
$router->get('/ram/:id', [RamController::class, 'show']);
$router->get('/disk/:id', [DiscoController::class, 'show']);
$router->get('/screen/:id', [PantallaController::class, 'show']);
$router->get('/location/:id', [UbicacionController::class, 'show']);
$router->get('/seat/:id', [SedeController::class, 'show']);
$router->get('/role/:id', [RolController::class, 'show']);
$router->get('/app/:id', [AplicacionController::class, 'show']);
$router->get('/file/:id', [ArchivoController::class, 'show']);
$router->get('/device/:id', [EquipoController::class, 'show']);
$router->get('/record/:id', [HistorialController::class, 'show']);
$router->get('/employee/:id', [EmpleadoController::class, 'show']);
$router->get('/service/:id', [ServicesController::class, 'show']);
$router->get('/installation/:id', [InstallationController::class, 'show']);
$router->get('/move/:id', [MovementsController::class, 'show']);

$router->post('/mark', [MarcaController::class, 'insert']);
$router->post('/category', [CategoriaController::class, 'insert']);
$router->post('/ram', [RamController::class, 'insert']);
$router->post('/disk', [DiscoController::class, 'insert']);
$router->post('/screen', [PantallaController::class, 'insert']);
$router->post('/location', [UbicacionController::class, 'insert']);
$router->post('/seat', [SedeController::class, 'insert']);
$router->post('/role', [RolController::class, 'insert']);
$router->post('/app', [AplicacionController::class, 'insert']);
$router->post('/file', [ArchivoController::class, 'insert']);
$router->post('/register', [UsuarioController::class, 'register']);
$router->post('/auth', [UsuarioController::class, 'auth']);
$router->post('/device', [EquipoController::class, 'insert']);
$router->post('/record', [HistorialController::class, 'insert']);
$router->post('/employee', [EmpleadoController::class, 'insert']);
$router->post('/service', [ServicesController::class, 'insert']);
$router->post('/installation', [InstallationController::class, 'insert']);
$router->post('/move', [MovementsController::class, 'insert']);

$router->put('/mark', [MarcaController::class, 'update']);
$router->put('/category', [CategoriaController::class, 'update']);
$router->put('/ram', [RamController::class, 'update']);
$router->put('/disk', [DiscoController::class, 'update']);
$router->put('/screen', [PantallaController::class, 'update']);
$router->put('/location', [UbicacionController::class, 'update']);
$router->put('/seat', [SedeController::class, 'update']);
$router->put('/role', [RolController::class, 'update']);
$router->put('/app', [AplicacionController::class, 'update']);
$router->put('/file', [ArchivoController::class, 'update']);
$router->put('/device', [EquipoController::class, 'update']);
$router->put('/record', [HistorialController::class, 'update']);
$router->put('/employee', [EmpleadoController::class, 'update']);
$router->put('/service', [ServicesController::class, 'update']);
$router->put('/installation', [InstallationController::class, 'update']);
$router->put('/move', [MovementsController::class, 'update']);

$router->delete('/mark', [MarcaController::class, 'destroy']);
$router->delete('/category/:id', [CategoriaController::class, 'destroy']);
$router->delete('/ram', [RamController::class, 'destroy']);
$router->delete('/disk', [DiscoController::class, 'destroy']);
$router->delete('/screen', [PantallaController::class, 'destroy']);
$router->delete('/location', [UbicacionController::class, 'destroy']);
$router->delete('/seat', [SedeController::class, 'destroy']);
$router->delete('/role', [RolController::class, 'destroy']);
$router->delete('/app', [AplicacionController::class, 'destroy']);
$router->delete('/file', [ArchivoController::class, 'destroy']);
$router->delete('/device', [EquipoController::class, 'destroy']);
$router->delete('/record', [HistorialController::class, 'destroy']);
$router->delete('/employee', [EmpleadoController::class, 'destroy']);
$router->delete('/service', [ServicesController::class, 'destroy']);
$router->delete('/installation', [InstallationController::class, 'destroy']);
$router->delete('/move', [MovementsController::class, 'destroy']);
