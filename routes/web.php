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