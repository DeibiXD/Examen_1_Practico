<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function clientes()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));

    }

    public function crearClienteVista(){
        return view('crear-cliente');
    }

    public function guardarCliente(Request $request)
    {
        $nvoCliente = new Cliente();
        $existenteCliente = Cliente::where('dni', $request->dni)->first();
        if ($existenteCliente ) {
            return to_route('Clientes');
        }

        $nvoCliente->dni = $request->dni;
        $nvoCliente->nombre = $request->nombre;
        $nvoCliente->apellido = $request->apellido;
        $nvoCliente->telefono = $request->telefono;
        $nvoCliente->correo = $request->correo;
        $nvoCliente->save();

        return to_route('Clientes');
        

    }

    public function verCliente($dni)
    {
        $cliente = Cliente::find($dni);
        return view('ver-cliente', compact('cliente'));
    }

    public function editarClienteVista($dni){
        $cliente = Cliente::find($dni);
        return view('editar-cliente', compact('cliente'));
    }

    public function editarCliente(Request $request, $dni){
        $clienteEdit = Cliente::find($dni);
        $clienteEdit->nombre = $request->nombre;
        $clienteEdit->apellido = $request->apellido;
        $clienteEdit->telefono = $request->telefono;
        $clienteEdit->correo = $request->correo;
        $clienteEdit->save();
        return to_route('Clientes');
    }

    public function eliminarCliente($dni){
        $cliente = Cliente::find($dni);
        return view('eliminar-cliente', compact('cliente'));
    }

     public function destroyCliente($dni){
        $cliente = Cliente::find($dni);
        $cliente->delete();
        return to_route('Clientes');
    }
    
}
