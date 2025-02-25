<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarjeta;

use App\Models\Cliente;

class TarjetaController extends Controller
{
    //

  public function tarjetas()
    {
        $tarjetas = Tarjeta::all();
        return view('tarjetas', compact('tarjetas'));

    }

    public function crearTarjetaVista(){
        return view('crear-tarjeta');
    }

    public function guardarTarjeta(Request $request){
        $nvaTarjeta = new Tarjeta();
        $existenteCliente = Cliente::where('dni', $request->dni)->first();
        if (!$existenteCliente || $request->tipoTarjeta != "cls" || $request->tipoTarjeta != "gld" || $request->tipoTarjeta != "plt") {
            return to_route('tarjetas');
        }
        $nvaTarjeta->numeroTarjeta = $request->numeroTarjeta;
        $nvaTarjeta->cvv = $request->cvv;
        $nvaTarjeta->limite = $request->limite;
        $nvaTarjeta->dni = $request->dni;
        $nvaTarjeta->tipoTarjeta = $request->tipoTarjeta;
        $nvaTarjeta->save();
        return to_route('tarjetas');
    }
}
