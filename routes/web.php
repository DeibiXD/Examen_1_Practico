<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TarjetaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function (){
    return view('menu');
});

Route::get('/menu/cliente', [ClienteController::class,'clientes'])->name('Clientes');

Route::get('/menu/tarjeta', [TarjetaController::class,''])->name('Tarjetas');

Route::get('/menu/cliente/crear', [ClienteController::class,'crearClienteVista'])->name('crear-cliente');

Route::post('/menu/cliente/crear/guardar', [ClienteController::class, 'guardarCliente'])->name('guardar-cliente');

Route::get('/menu/cliente/ver/{dni}', [ClienteController::class, 'verCliente'])->name('ver-cliente');

Route::get('/menu/cliente/editar/{dni}', [ClienteController::class,'editarClienteVista'])->name('editar-cliente');

Route::get('/menu/cliente/editar/guardar/{dni}', [ClienteController::class,'editarCliente'])->name('guardar-cliente-editado');

Route::get('/menu/clientes/eliminar/{dni}', [ClienteController::class,'eliminarCliente'])->name('eliminar-cliente');

Route::get('/menu/clientes/destroy/{dni}', [ClienteController::class, 'destroyCliente'])->name('destroy-cliente');

Route::get('/menu/tarjeta/crear', [TarjetaController::class,'crearTarjetaVista'])->name('crear-tarjeta');

Route::post('/menu/tarjeta/crear/guardar', [TarjetaController::class, 'guardarTarjeta'])->name('guardar-tarjeta');
