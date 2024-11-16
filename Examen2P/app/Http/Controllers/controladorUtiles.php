<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUtiles;

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
        

        return "Nombre: $nombre, Marca: $marca";
    
    }
}
