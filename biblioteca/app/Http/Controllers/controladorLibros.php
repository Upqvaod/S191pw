<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibro;
use Illuminate\Http\Request;

class controladorLibros extends Controller
{
    public function crear()
    {
        return view('registro'); 
    }

    public function guardar(validadorLibro $peticion)
    {
        return redirect()->route('registro')->with('exito', 'Todo correcto: Libro “' . $peticion->input('txttitulo') . '” guardado');
    }
}
