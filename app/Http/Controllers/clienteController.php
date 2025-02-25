<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class clienteController extends Controller
{
    //

    public function clientes()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));

    }

    public function crearClienteVista(){
        return view('crearCliente');
    }

    public function guardarCliente(Request $request){
        $nvoCliente = new Cliente();
        

    }


}
