<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorUtiles extends Controller
{
    public function index()
    {
        return view('UtilesEscolares');
    }

    public function procesarFomulario(Request $request)
    {
        $nombre = $request->input('txtnombre');
        $marca = $request->input('txtmarca');
        $cantidad = $request->input('txtcantidad');

        return "Nombre: $nombre, Marca: $marca, Cantidad: $cantidad";
    
    }

    public func

}   