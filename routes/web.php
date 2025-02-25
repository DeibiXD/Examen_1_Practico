<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\tarjetaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function (){
    return view('menu');
});

Route::get('/menu/cliente', [clienteController::class,''])->name('Clientes');

Route::get('/menu/tarjeta', [tarjetaController::class,''])->name('Tarjeta');

Route::get('/menu/cliente/crear', [clienteController::class,'crearClienteVista'])->name('crearCliente');